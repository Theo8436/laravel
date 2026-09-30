<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class Aluno extends Controller


{
    function aluno(){
        return view('aluno.aluno');
    }

    function entrar(){
        return view('aluno.entrar');
    }

    function logado(){
        return view('aluno.logado');
    }

    public function inicio()
    {
        $publicacoes = Postagem::with('user')
            ->where('status', 'aprovada')
            ->latest()
            ->get();

        return view('aluno.inicio', compact('publicacoes'));
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
