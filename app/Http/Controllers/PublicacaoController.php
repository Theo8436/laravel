<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Models\Postagem;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    public function inicio()
    {
        $publicacoes = Publicacao::latest()->get();

        return view('aluno.inicio', compact('publicacoes'));
    }

    public function index()
    {
        $publicacoes = Publicacao::latest()->get();

        return view('publi', compact('publicacoes'));
    }

    public function show($id)
    {
        $publicacao = Publicacao::findOrFail($id);

        return view('show', compact('publicacao'));
    }

    public function professorIndex()
    {
        $publicacoes = Publicacao::latest()->get();

        return view('professor.publi', compact('publicacoes'));
    }

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