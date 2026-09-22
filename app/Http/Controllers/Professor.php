<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem; // 1. Importa a Model de postagens dos alunos

class Professor extends Controller
{
    function professor(){
        return view('professor.professor');
    }

    function cadastro(){
        return view('professor.cadastro');
    }

    function inicio(){
        // 2. Busca todas as postagens dos alunos do banco de dados (da mais recente para a mais antiga)
        $publicacoes = Postagem::with('user')->latest()->get();

        // 3. Envia a variável $publicacoes para a view inicio.blade.php
        return view('professor.inicio', compact('publicacoes'));
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