<?php

namespace App\Http\Controllers;

use App\Models\Mencao;
use Illuminate\Http\Request;

class MencaoController extends Controller
{
    // Tela PÚBLICA (Alunos / Visitantes) - Apenas visualização
    public function index()
    {
        $mencoes = Mencao::latest()->get();

        return view('mencao', compact('mencoes'));
    }

    // Tela do PROFESSOR - Com botão e formulário de cadastro
    public function professorIndex()
    {
        $mencoes = Mencao::latest()->get();

        return view('mencao-professor', compact('mencoes'));
    }

    // Salvar nova menção
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