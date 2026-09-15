<?php

namespace App\Http\Controllers;

use App\Models\LivroModel; // Importação correta do seu model
use Illuminate\Http\Request;

class LivroController extends Controller
{
    // Exibe a página da biblioteca com a lista de livros do banco
    public function biblioteca()
    {
        // Alterado de Livro para LivroModel
        $livros = LivroModel::all(); 
        return view('professor.biblioteca', compact('livros'));
    }

    // Salva um novo livro via Modal
    public function store(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'status'    => 'required|string|max:255',
        ]);

        // Alterado de Livro para LivroModel
        LivroModel::create($request->all());

        return redirect()->back()->with('sucesso');
    }

    // Atualiza os dados de um livro existente via Modal de Edição
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'status'    => 'required|string|max:255',
        ]);

        // Alterado de Livro para LivroModel
        $livro = LivroModel::findOrFail($id);
        $livro->update($request->all());

        return redirect()->back()->with('sucesso');
    }

    // Exclui um livro do banco de dados
    public function destroy($id)
    {
        // Alterado de Livro para LivroModel
        $livro = LivroModel::findOrFail($id);
        $livro->delete();

        return redirect()->back()->with('sucesso');
    }
    // Adicione este método dentro da classe LivroController
    public function bibliotecaAluno()
    {
    // Busca todos os livros cadastrados no banco de dados
    $livros = LivroModel::all(); 
    
    // Retorna a view da biblioteca do aluno passando os livros (ajuste o caminho da view se necessário)
    return view('aluno.biblioteca', compact('livros')); 
    }
    // Adicione este método dentro da classe LivroController
    public function bibliotecaa()
    {
    // Busca todos os livros cadastrados no banco de dados
    $livros = LivroModel::all(); 
    
    // Retorna a view da biblioteca do aluno passando os livros (ajuste o caminho da view se necessário)
    return view('biblioteca', compact('livros')); 
    }

}
