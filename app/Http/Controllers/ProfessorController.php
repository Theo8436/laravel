<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function nome(){ 
        return view('professor.nome');
    }

    function email(){ 
        return view('professor.email');
    }

    function telefone(){ 
        return view('professor.telefone');
    }

    function add(Request $dados) { 
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());
    }
}
