<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller


{
    function aluno(){
        return view('aluno.aluno');
    }

    function cadastro(){
        return view('aluno.cadastro');
    }
    function entrar(){
        return view('aluno.entrar');
    }

    function logado(){
        return view('aluno.logado');
    }

    function inicio(){
        return view('aluno.inicio');
    }
    function sobre(){
        return view('aluno.sobre');
    }
    function galeria(){
        return view('aluno.galeria');
    }
    function biblioteca(){
        return view('aluno.biblioteca');
    }
    function mencao(){
        return view('aluno.mencao');
    }
    function doacao(){
        return view('aluno.doacao');
    }
    function publi(){
        return view('aluno.publi');
    }




}
