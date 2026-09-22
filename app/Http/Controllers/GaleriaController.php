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
            'arquivoFoto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('arquivoFoto')) {
            // Salva a imagem física na pasta interna storage/app/public/galeria
            $caminhoImagem = $request->file('arquivoFoto')->store('galeria', 'public');

            GaleriaModel::create([
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'imagem' => $caminhoImagem
            ]);

            return redirect()->back()->with('sucesso', 'Foto adicionada com sucesso!');
        }

        return redirect()->back()->withErrors(['arquivoFoto' => 'Falha ao efetuar o upload da imagem.']);
    }
    // Adicione este método dentro do seu GaleriaController
public function update(Request $request, $id)
{
    $request->validate([
        'titulo'    => 'required|string|max:255',
        'descricao' => 'required|string',
        'arquivoFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Opcional na edição
    ]);

    $foto = GaleriaModel::findOrFail($id);
    
    // Atualiza os campos de texto
    $foto->titulo = $request->titulo;
    $foto->descricao = $request->descricao;

    // Se o professor enviou uma nova foto, substitui a antiga
    if ($request->hasFile('arquivoFoto')) {
        // Deleta o arquivo antigo do storage físico se não for do seeder
        if (\Storage::disk('public')->exists($foto->imagem) && !str_contains($foto->imagem, 'imagem')) {
            \Storage::disk('public')->delete($foto->imagem);
        }
        // Salva a nova imagem
        $foto->imagem = $request->file('arquivoFoto')->store('galeria', 'public');
    }

    $foto->save();

    return redirect()->back()->with('sucesso');
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

