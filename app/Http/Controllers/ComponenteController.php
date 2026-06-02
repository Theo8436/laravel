<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;

class ComponenteController extends Controller
{
    function index()
    {
        return view('componente.index', [
            'componcomponente' => ComponenteModel::all()
        ]);
    }

    function add(Request $dados)
    {
        ComponenteModel::create($dados->all());

        return view('componente.index', [
            'success' => 'Cadastrado!',
            'componcomponente' => ComponenteModel::all()
        ]);
    }

    function remove(string $id)
    {
        ComponenteModel::destroy($id);

        return view('componente.index', [
            'success' => 'Removido!',
            'componentes' => ComponenteModel::all()
        ]);
    }

    function atualizar(string $id)
    {
        $componente = ComponenteModel::find($id);

        return view('componente.atualizar', [
            'componente' => $componente
        ]);
    }

    function save(Request $dados)
    {
        $componente = ComponenteModel::find($dados->id);
        $componente->update($dados->all());

        return view('componente.index', [
            'success' => 'Atualizado!',
            'componentes' => ComponenteModel::all()
        ]);
    }
}