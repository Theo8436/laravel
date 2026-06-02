<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;

class CursoController extends Controller
{
    function index()
    {
        return view('curso.index', [
            'cursos' => CursoModel::all()
        ]);
    }

    function add(Request $dados)
    {
        CursoModel::create($dados->all());

        return view('curso.index', [
            'success' => 'Cadastrado!',
            'cursos' => CursoModel::all()
        ]);
    }

    function remove(string $id)
    {
        CursoModel::destroy($id);

        return view('curso.index', [
            'success' => 'Removido!',
            'cursos' => CursoModel::all()
        ]);
    }

    function atualizar(string $id)
    {
        $curso = CursoModel::find($id);

        return view('curso.atualizar', [
            'curso' => $curso
        ]);
    }

    function save(Request $dados)
    {
        $curso = CursoModel::find($dados->id);
        $curso->update($dados->all());

        return view('curso.index', [
            'success' => 'Atualizado!',
            'cursos' => CursoModel::all()
        ]);
    }
}