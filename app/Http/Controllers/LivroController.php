<?php

namespace App\Http\Controllers;

use App\Models\LivroModel;
use App\Models\SolicitacaoEmprestimo;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function biblioteca()
    {
        $livros = LivroModel::latest()->get();

        $solicitacoes = SolicitacaoEmprestimo::where('status', 'pendente')
    ->latest()
    ->get();

        return view('professor.biblioteca', compact(
            'livros',
            'solicitacoes'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'status'    => 'required|string|max:255',
        ]);

        LivroModel::create($request->all());

        return redirect()->back()->with('sucesso', 'Livro cadastrado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'status'    => 'required|string|max:255',
        ]);

        $livro = LivroModel::findOrFail($id);

        $livro->update($request->all());

        return redirect()->back()->with('sucesso', 'Livro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $livro = LivroModel::findOrFail($id);

        $livro->delete();

        return redirect()->back()->with('sucesso', 'Livro excluído com sucesso!');
    }

    public function bibliotecaAluno()
    {
        $livros = LivroModel::all();

        return view('aluno.biblioteca', compact('livros'));
    }

    public function bibliotecaa()
    {
        $livros = LivroModel::all();

        return view('biblioteca', compact('livros'));
    }
}