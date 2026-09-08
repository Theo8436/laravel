<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroModel; // Aqui está correto como LivroModel

class LivroController extends Controller
{
    // 1. Lista os livros com filtro de busca
    public function index(Request $request)
    {
        $busca = $request->input('busca');

        if ($busca) {
            // CORRIGIDO: Mudado de Livro para LivroModel
            $livros = LivroModel::where('titulo', 'LIKE', "%{$busca}%")
                ->orWhere('autor', 'LIKE', "%{$busca}%")
                ->orWhere('categoria', 'LIKE', "%{$busca}%")
                ->orderBy('id', 'desc')
                ->get();
        } else {
            // CORRIGIDO: Mudado de Livro para LivroModel
            $livros = LivroModel::orderBy('id', 'desc')->get();
        }

        return view('professor/biblioteca', compact('livros', 'busca'));
    }

    // 2. Salva um novo livro vindo do formulário
    public function adicionar(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string',
            'status'    => 'required|string',
        ]);

        // CORRIGIDO: Mudado de Livro para LivroModel
        LivroModel::create([
            'titulo'    => $request->titulo,
            'autor'     => $request->autor,
            'categoria' => $request->categoria,
            'status'    => $request->status,
        ]);

        return redirect()->route('professor.biblioteca')->with('success', 'Livro cadastrado com sucesso!');
    }

    // 3. Exibe a página de detalhes/gerenciamento do livro clicado
    public function detalhes($id)
    {
        // CORRIGIDO: Mudado de Livro para LivroModel
        $livro = LivroModel::findOrFail($id);
        return view('detalhes_livro', compact('livro'));
    }

    // 4. Salva as alterações completas de edição do livro
    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string',
            'status'    => 'required|string',
        ]);

        // CORRIGIDO: Mudado de Livro para LivroModel
        $livro = LivroModel::findOrFail($id);
        $livro->update([
            'titulo'    => $request->titulo,
            'autor'     => $request->autor,
            'categoria' => $request->categoria,
            'status'    => $request->status,
        ]);

        return redirect()->route('professor.biblioteca')->with('success', 'Livro atualizado com sucesso!');
    }

    // 5. Exclui o livro do banco de dados
    public function remover($id)
    {
        // CORRIGIDO: Mudado de Livro para LivroModel
        $aluno = LivroModel::findOrFail($id);
        $aluno->delete();

        return redirect()->route('professor.biblioteca')->with('success', 'Livro excluído com sucesso!');
    }
}
