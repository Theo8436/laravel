<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem; // Importa o Model correto de postagens

class Inicio extends Controller
{
    public function inicio()
    {
        $publicacoes = Postagem::with('user')
            ->where('status', 'aprovada')
            ->latest()
            ->get();

        return view('inicio', compact('publicacoes'));
    }
}