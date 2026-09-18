<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    // Tela pública com a lista de postagens (Visão Aluno)
    public function index()
    {
        $publicacoes = Publicacao::latest()->get();

        return view('publicacao.index', compact('publicacoes'));
    }

    // Tela detalhada da postagem enviada pelo "Ler mais"
    public function show($id)
    {
        $publicacao = Publicacao::findOrFail($id);

        return view('publicacao.show', compact('publicacao'));
    }

    // Tela do Professor com o formulário de criar nova postagem
    public function professorIndex()
    {
        $publicacoes = Publicacao::latest()->get();

        return view('professor.publicacao', compact('publicacoes'));
    }

    // Processa e salva a publicação com foto no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'conteudo'  => 'required|string',
            'imagem'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $caminhoImagem = null;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $caminhoImagem = $request->file('imagem')->store('publicacoes', 'public');
        }

        Publicacao::create([
            'titulo'   => $request->titulo,
            'autor'    => $request->autor,
            'conteudo' => $request->conteudo,
            'imagem'   => $caminhoImagem,
        ]);

        return redirect()->back()->with('sucesso', 'Publicação cadastrada com sucesso!');
    }
}