<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdministradorModel;

class AdministradorController extends Controller
{
    function index()
    {
        return view('administrador.index', [
            'administradores' => AdministradorModel::all()
        ]);
    }

    function add(Request $dados)
    {
        AdministradorModel::create($dados->all());

        return view('administrador.index', [
            'success' => 'Administrador cadastrado!',
            'administradores' => AdministradorModel::all()
        ]);
    }

    function remove(string $id)
    {
        AdministradorModel::destroy($id);

        return view('administrador.index', [
            'success' => 'Administrador removido!',
            'administradores' => AdministradorModel::all()
        ]);
    }

    function atualizar(string $id)
    {
        $administrador = AdministradorModel::find($id);

        return view('administrador.atualizar', [
            'administrador' => $administrador
        ]);
    }

    function save(Request $dados)
    {
        $administrador = AdministradorModel::find($dados->id);
        $administrador->update($dados->all());

        return view('administrador.index', [
            'success' => 'Administrador atualizado!',
            'administradores' => AdministradorModel::all()
        ]);
    }
}