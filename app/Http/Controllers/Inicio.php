<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem; // Importa o Model correto de postagens

class Inicio extends Controller
{
    public function inicio()
    {
        // Busca as postagens do banco ordenando das mais recentes para as mais antigas
        $publicacoes = Postagem::latest()->get();

        // Envia a variável $publicacoes para a view inicio.blade.php
        return view('inicio', compact('publicacoes'));
    }
}