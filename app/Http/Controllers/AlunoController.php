<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;

class AlunoController extends Controller
{
    function index()
    {
        return view('aluno.index', [
            'alunos' => AlunoModel::all()
        ]);
    }

    function add(Request $dados)
    {
        AlunoModel::create($dados->all());

        return view('aluno.index', [
            'success' => 'Cadastrado!',
            'alunos' => AlunoModel::all()
        ]);
    }

    function remove(string $id)
    {
        AlunoModel::destroy($id);

        return view('aluno.index', [
            'success' => 'Removido!',
            'alunos' => AlunoModel::all()
        ]);
    }

    function atualizar(string $id)
    {
        $aluno = AlunoModel::find($id);

        return view('aluno.atualizar', [
            'aluno' => $aluno
        ]);
    }

    function save(Request $dados)
    {
        $aluno = AlunoModel::find($dados->id);
        $aluno->update($dados->all());

        return view('aluno.index', [
            'success' => 'Atualizado!',
            'alunos' => AlunoModel::all()
        ]);
    }
}