<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    function nome(){ 
        return view('administrador.nome');
    }

    function email(){
        return view('administrador.email');
    }

    function telefone(){
        return view('administrador.telefone');
    }

    function cpf(){
        return view('administrador.cpf');
    }

    function usuario(){
        return view('administrador.usuario');
    }

    function senha(){
        return view('administrador.senha');
    }

    function status(){
        return view('administrador.status');
    }


    function add(Request $dados) { 
        $administrador = new \App\Models\AdministradorModel();
        $administrador::create($dados->all());
    }
}
