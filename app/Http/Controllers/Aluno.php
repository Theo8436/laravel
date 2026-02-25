<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function aluno(){
        echo 'Página do Aluno';
    }
    
    function matricula(){
        echo 'Aluno está matriculado';
    }

    function cancelarMatricula(){
        echo 'Aluno está desmatriculado!';
    }
}


