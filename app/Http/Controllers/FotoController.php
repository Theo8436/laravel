<?php

namespace App\Http\Controllers;

use App\Models\FotoModel; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Importado para gerenciar a exclusão física de arquivos

class FotoController extends Controller
{
    // Exibe a página da biblioteca com a lista de fotos do banco
    public function galeria()
    {
        $fotos = FotoModel::all(); 
        return view('professor.galeria', compact('fotos'));
    }

    // Salva uma nova foto e faz o upload do arquivo
    public function store(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'caminho'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 👈 Valida se é uma imagem de até 2MB
        ]);

        // Pega todos os dados do formulário, exceto a foto original
        $dados = $request->except('caminho');

        // Verifica se o arquivo foi enviado corretamente
        if ($request->hasFile('caminho') && $request->file('caminho')->isValid()) {
            
            // Salva a imagem na pasta 'storage/app/public/fotos' e retorna o caminho gerado automaticamente
            $caminhoFoto = $request->file('caminho')->store('fotos', 'public');
            
            // Adiciona o caminho gerado ao array de dados que vai para o banco
            $dados['caminho'] = $caminhoFoto;
        }

        // Salva no banco de dados usando o array modificado
        FotoModel::create($dados);

        return redirect()->back()->with('sucesso', 'Foto cadastrada com sucesso!');
    }

    // Atualiza os dados de uma foto existente via Modal de Edição
    public function update(Request $request, $id)
    {
        $foto = FotoModel::findOrFail($id);

        $request->validate([
            'titulo'    => 'required|string|max:255',
            'descricao' => 'required|string|max:255', // Corrigido de 'autor' para 'descricao'
            'caminho'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 👈 Nullable caso ele não queira mudar a foto atual
        ]);

        $dados = $request->except('caminho');

        // Se o usuário enviou uma nova foto
        if ($request->hasFile('caminho') && $request->file('caminho')->isValid()) {
            
            // Deleta a foto antiga do servidor para não acumular lixo eletrônico
            if ($foto->caminho) {
                Storage::disk('public')->delete($foto->caminho);
            }

            // Salva a nova foto
            $caminhoFoto = $request->file('caminho')->store('fotos', 'public');
            $dados['caminho'] = $caminhoFoto;
        }

        $foto->update($dados);

        return redirect()->back()->with('sucesso', 'Foto atualizada com sucesso!');
    }

    // Exclui uma foto do banco de dados e do servidor
    public function destroy($id)
    {
        $foto = FotoModel::findOrFail($id);

        // Deleta o arquivo físico da pasta storage antes de apagar o registro
        if ($foto->caminho) {
            Storage::disk('public')->delete($foto->caminho);
        }

        $foto->delete();

        return redirect()->back()->with('sucesso', 'Foto excluída com sucesso!');
    }

    public function galeriaAluno()
    {
        $fotos = FotoModel::all(); 
        return view('aluno.galeria', compact('fotos')); // Corrigido de 'livros' para 'fotos'
    }

    public function galeriaa()
    {
        $fotos = FotoModel::all(); 
        return view('galeria', compact('fotos')); 
    }
}