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
    function inicio(){
        return view('professor.inicio');
    }
    function entrar(){
        return view('professor.entrar');
    }
    function logado(){
        return view('professor.logado');
    }
    function sobre(){
        return view('professor.sobre');
    }
    function mencao(){
        return view('professor.mencao');
    }
    function biblioteca(){
        return view('professor.biblioteca');
    }
    function galeria(){
        return view('professor.galeria');
    }
    function publi(){
        return view('professor.publi');
    }

}
