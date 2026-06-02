<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorModel;

class ProfessorController extends Controller
{
    function index()
    {
        return view('professor.index', [
            'professores' => ProfessorModel::all()
        ]);
    }

    function add(Request $dados)
    {
        ProfessorModel::create($dados->all());

        return view('professor.index', [
            'success' => 'Professor cadastrado!',
            'professores' => ProfessorModel::all()
        ]);
    }

    function remove(string $id)
    {
        ProfessorModel::destroy($id);

        return view('professor.index', [
            'success' => 'Professor removido!',
            'professores' => ProfessorModel::all()
        ]);
    }

    function atualizar(string $id)
    {
        $professor = ProfessorModel::find($id);

        return view('professor.atualizar', [
            'professor' => $professor
        ]);
    }

    function save(Request $dados)
    {
        $professor = ProfessorModel::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', [
            'success' => 'Professor atualizado!',
            'professores' => ProfessorModel::all()
        ]);
    }
}