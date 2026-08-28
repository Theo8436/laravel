<?php

namespace App\Http\Controllers;

use App\Models\Mencao;
use Illuminate\Http\Request;

class MencaoController extends Controller
{
    // Exibe a visão pública para os alunos (resources/views/mencao.blade.php)
    public function index()
    {
        $mencoes = Mencao::latest()->get();

        return view('mencao', compact('mencoes'));
    }

    // Exibe a visão do professor com botão de cadastro (resources/views/professor/mencao.blade.php)
    public function professorIndex()
    {
        $mencoes = Mencao::latest()->get();

        return view('professor.mencao', compact('mencoes'));
    }

    // Processa e salva o formulário enviado pelo professor
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data_reconhecimento' => 'required|date',
            'icone' => 'nullable|string|max:100',
        ]);

        Mencao::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'descricao' => $request->descricao,
            'data_reconhecimento' => $request->data_reconhecimento,
            'icone' => $request->icone ?? 'bi-trophy-fill',
        ]);

        return redirect()->back()->with('sucesso', 'Menção honrosa cadastrada!');
    }
}