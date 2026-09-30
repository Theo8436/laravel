<?php

namespace App\Http\Controllers;

use App\Models\Postagem;

class Principal extends Controller
{
    public function principal()
    {
        $publicacoes = Postagem::with('user')
            ->where('status', 'aprovada')
            ->latest()
            ->get();

        return view('inicio', compact('publicacoes'));
    }
}