<?php

namespace App\Http\Controllers;

use App\Models\GaleriaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    // Exibe a galeria para o Professor (com botão de criar/deletar)
    public function index()
    {
        $fotos = GaleriaModel::latest()->get();
        return view('professor.galeria', compact('fotos'));
    }

    // Exibe a galeria de modo leitura para o Aluno
    public function indexAluno()
    {
        $fotos = GaleriaModel::latest()->get();
        return view('aluno.galeria', compact('fotos'));
    }
    public function galeriaa()
    {
        $fotos = GaleriaModel::latest()->get();
        return view('galeria', compact('fotos'));
    }

    // Processa a imagem e salva no banco
    public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descricao' => 'required|string',

        'imagens' => 'required|array|min:1|max:10',

        'imagens.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ], [
        'imagens.required' => 'Selecione pelo menos uma imagem.',
        'imagens.min' => 'Selecione pelo menos uma imagem.',
        'imagens.max' => 'Você só pode enviar no máximo 10 imagens por galeria.',
        'imagens.*.image' => 'Todos os arquivos devem ser imagens.',
        'imagens.*.mimes' => 'As imagens devem estar nos formatos JPEG, PNG, JPG, GIF ou WEBP.',
        'imagens.*.max' => 'Cada imagem pode ter no máximo 2 MB.',
    ]);

    $imagensSalvas = [];

    if ($request->hasFile('imagens')) {

        foreach ($request->file('imagens') as $imagem) {

            $path = $imagem->store('galeria', 'public');

            $imagensSalvas[] = $path;
        }
    }

    GaleriaModel::create([
        'titulo' => $request->titulo,
        'descricao' => $request->descricao,
        'imagem' => json_encode($imagensSalvas),
    ]);

    return redirect()
        ->back()
        ->with('sucesso', 'Galeria adicionada com sucesso!');
}
    // Adicione este método dentro do seu GaleriaController
public function update(Request $request, $id)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descricao' => 'required|string',

        'imagens' => 'nullable|array|max:10',
        'imagens.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        'remover_imagens' => 'nullable|array',
    ], [
        'imagens.max' => 'Você só pode ter no máximo 10 imagens por galeria.',
        'imagens.*.image' => 'Todos os arquivos devem ser imagens.',
        'imagens.*.mimes' => 'As imagens devem ser JPEG, PNG, JPG, GIF ou WEBP.',
        'imagens.*.max' => 'Cada imagem pode ter no máximo 2 MB.',
    ]);

    $galeria = GaleriaModel::findOrFail($id);

    /*
    |--------------------------------------------------------------------------
    | Recupera as imagens atuais
    |--------------------------------------------------------------------------
    */

    $fotosAtuais = json_decode($galeria->imagem, true);

    // Compatibilidade com galerias antigas
    if (!is_array($fotosAtuais)) {
        $fotosAtuais = $galeria->imagem
            ? [$galeria->imagem]
            : [];
    }

    $fotosAtuais = array_values(
        array_filter($fotosAtuais)
    );

    /*
    |--------------------------------------------------------------------------
    | Remove as imagens selecionadas
    |--------------------------------------------------------------------------
    */

    $removerImagens = $request->input('remover_imagens', []);

    if (!empty($removerImagens)) {

        foreach ($removerImagens as $imagemRemover) {

            // Remove do array
            $fotosAtuais = array_values(
                array_filter(
                    $fotosAtuais,
                    fn ($foto) => $foto !== $imagemRemover
                )
            );

            // Não tenta apagar imagens antigas que estão diretamente
            // na pasta public, como imagem1.png
            if (
                !str_contains($imagemRemover, 'imagem') &&
                Storage::disk('public')->exists($imagemRemover)
            ) {
                Storage::disk('public')->delete($imagemRemover);
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Adiciona novas imagens
    |--------------------------------------------------------------------------
    */

    $novasImagens = $request->file('imagens', []);

    $quantidadeAtual = count($fotosAtuais);
    $quantidadeNova = count($novasImagens);

    if (($quantidadeAtual + $quantidadeNova) > 10) {

        return redirect()
            ->back()
            ->withInput()
            ->withErrors([
                'imagens' => 'Uma galeria pode ter no máximo 10 imagens.'
            ]);
    }

    foreach ($novasImagens as $imagem) {

        $path = $imagem->store('galeria', 'public');

        $fotosAtuais[] = $path;
    }

    /*
    |--------------------------------------------------------------------------
    | Atualiza os dados
    |--------------------------------------------------------------------------
    */

    $galeria->titulo = $request->titulo;
    $galeria->descricao = $request->descricao;
    $galeria->imagem = json_encode($fotosAtuais);

    $galeria->save();

    return redirect()
        ->back()
        ->with('sucesso', 'Galeria atualizada com sucesso!');
}
public function show($id)
{
    $galeria = GaleriaModel::findOrFail($id);

    return view('professor.showGaleria', compact('galeria'));
}

    // Remove do banco e o arquivo físico do servidor
    public function destroy($id)
    {
        $foto = GaleriaModel::findOrFail($id);

        // Se não for imagem padrão estática dos seeders, remove do disco público
        if (Storage::disk('public')->exists($foto->imagem)) {
            Storage::disk('public')->delete($foto->imagem);
        }

        $foto->delete();

        return redirect()->back()->with('sucesso');
    }
}

