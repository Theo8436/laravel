<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function nome(){ 
        return view('curso.nome');
    }
    function periodo(){
        return view('curso.periodo');
    }

    function add(Request $dados) { 
        $nome = new \App\Models\CursoModel();
        $nome::create($dados->all());
    }
}
