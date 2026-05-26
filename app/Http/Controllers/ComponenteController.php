<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function nome(){ 
        return view('componente.nome');
    }
    
    function hora_inicio(){ 
        return view('componente.hora_inicio');
    }

    function hora_fim(){ 
        return view('componente.hora_fim');
    }

    function add(Request $dados) { 
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());
    }
}
