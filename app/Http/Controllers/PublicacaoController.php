<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    // Tela pública com a lista de postagens (Visão Visitante/Aluno)
    public function index()
    {
        $publicacoes = Publicacao::latest()->get();

        // Direciona para a view 'publi.blade.php' na raiz de views
        return view('publi', compact('publicacoes'));
    }

    // Tela detalhada da publicação ("Ler mais")
    public function show($id)
    {
        $publicacao = Publicacao::findOrFail($id);

        return view('show', compact('publicacao'));
    }

    // Tela do Professor com o formulário de criar nova publicação
    public function professorIndex()
    {
        $publicacoes = Publicacao::latest()->get();

        return view('professor.publi', compact('publicacoes'));
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