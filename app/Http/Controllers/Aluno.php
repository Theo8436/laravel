<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function aluno(){
        return view('aluno.aluno');
    }


    function logado(){
        return view('aluno.logado');
    }

    function inicio(){
        return view('aluno.inicio');
    }
}
