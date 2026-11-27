<?php

namespace App\Http\Controllers;

use App\Models\Mencao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MencaoController extends Controller
{
    public function indexProfessor()
    {
        $mencoes = Mencao::latest()->get();
        return view('professor.mencao', compact('mencoes'));
    }

    public function indexAluno()
    {
        $mencoes = Mencao::latest()->get();
        $postagens = $mencoes;
        return view('aluno.mencao', compact('mencoes', 'postagens'));
    }

    public function indexPublico()
    {
        $mencoes = Mencao::latest()->get();
        $postagens = $mencoes;
        return view('mencao', compact('mencoes', 'postagens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'data_reconhecimento' => 'required',
            'icone' => 'nullable',
            'descricao' => 'required'
        ]);

        Mencao::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'data_reconhecimento' => $request->data_reconhecimento,
            'icone' => $request->icone,
            'descricao' => $request->descricao,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('professor.mencao')->with('sucesso', 'Menção criada com sucesso!');
    }

    public function edit($id)
    {
        $mencao = Mencao::findOrFail($id);
        return view('professor.edit', compact('mencao'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'data_reconhecimento' => 'required',
            'icone' => 'nullable',
            'descricao' => 'required'
        ]);

        $mencao = Mencao::findOrFail($id);
        $mencao->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'data_reconhecimento' => $request->data_reconhecimento,
            'icone' => $request->icone,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('professor.mencao')->with('sucesso', 'Menção atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $mencao = Mencao::findOrFail($id);
        $mencao->delete();

        return redirect()->route('professor.mencao')->with('sucesso', 'Menção excluída com sucesso!');
    }

    public function show($id)
    {
        $postagem = Mencao::findOrFail($id);
        $mencao = $postagem;

        if (request()->is('aluno*')) {
            return view('aluno.show', compact('postagem', 'mencao'));
        }

        if (request()->is('professor*')) {
            return view('professor.show', compact('postagem', 'mencao'));
        }

        return view('show', compact('postagem', 'mencao'));
    }
}