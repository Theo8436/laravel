<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function professor(){
        return view('professor.professor');
    }
    function cadastro(){
        return view('professor.cadastro');
    }
    function entrar(){
        return view('professor.entrar');
    }
    function logado(){
        return view('professor.logado');
    }
}
