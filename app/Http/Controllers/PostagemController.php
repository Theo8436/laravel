<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostagemController extends Controller
{
    public function index()
    {
        $postagens = Postagem::with('user')->latest()->get();

        return view('aluno.logado', compact('postagens'));
    }

    public function store(Request $request)
    {
        $rules = [
            'titulo'     => 'required',
            'categoria'  => 'required|in:Beth Indica,Beth nas Estrelas,Beth Anatomy',
            'comentario' => 'required',
            'imagens'    => 'required|array|min:1|max:10',
            'imagens.*'  => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ];

        $messages = [
            'imagens.max' => 'Você só pode enviar no máximo 10 imagens por postagem.',
            'imagens.min' => 'Selecione pelo menos 1 imagem.',
        ];

        $request->validate($rules, $messages);

        // ✅ CAPTURA CORRETA DO ID:
        // Prioriza o guard 'alunos', depois 'web', e fallbacks de sessão
        $userId = Auth::guard('alunos')->id() 
            ?? Auth::id() 
            ?? session('aluno_id') 
            ?? session('user_id');

        // Se por algum motivo o usuário não estiver autenticado no guard
        if (!$userId) {
            return redirect()->back()
                ->withInput()
                ->with('erro', 'Sessão não encontrada ou expirada. Por favor, faça login novamente.');
        }

        $imagensSalvas = [];

        if ($request->hasFile('imagens')) {
            foreach ($request->file('imagens') as $imagem) {
                $path = $imagem->store('postagens', 'public');
                $imagensSalvas[] = $path;
            }
        }

        Postagem::create([
            'titulo'     => $request->titulo,
            'categoria'  => $request->categoria,
            'comentario' => $request->comentario,
            'imagem'     => json_encode($imagensSalvas),
            'user_id'    => $userId
        ]);

        return redirect()->route('aluno.logado')->with('sucesso', 'Postagem criada com sucesso!');
    }

    public function show(Postagem $postagem)
    {
        return view('aluno.showPostagem', compact('postagem'));
    }

    public function update(Request $request, Postagem $postagem)
    {
        $request->validate([
            'titulo'          => 'required',
            'categoria'       => 'required|in:Beth Indica,Beth nas Estrelas,Beth Anatomy',
            'comentario'      => 'required',
            'imagens'         => 'nullable|array|max:10',
            'imagens.*'       => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'remover_imagens' => 'nullable|array'
        ], [
            'imagens.max' => 'Você só pode enviar no máximo 10 imagens novas.'
        ]);

        $fotosAtuais = json_decode($postagem->imagem, true) ?? [];
        if (!is_array($fotosAtuais)) {
            $fotosAtuais = $postagem->imagem ? [$postagem->imagem] : [];
        }

        if ($request->has('remover_imagens')) {
            $fotosParaRemover = $request->input('remover_imagens');

            foreach ($fotosParaRemover as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }

            $fotosAtuais = array_values(array_filter($fotosAtuais, function ($foto) use ($fotosParaRemover) {
                return !in_array($foto, $fotosParaRemover);
            }));
        }

        $novasImagens = $request->file('imagens') ? count($request->file('imagens')) : 0;
        $totalFinal = count($fotosAtuais) + $novasImagens;

        if ($totalFinal > 10) {
            return redirect()->back()
                ->withInput()
                ->with('erro', 'Limite excedido! A postagem pode ter no máximo 10 imagens no total.');
        }

        if ($request->hasFile('imagens')) {
            foreach ($request->file('imagens') as $file) {
                $path = $file->store('postagens', 'public');
                $fotosAtuais[] = $path;
            }
        }

        $postagem->update([
            'titulo'     => $request->titulo,
            'categoria'  => $request->categoria,
            'comentario' => $request->comentario,
            'imagem'     => json_encode($fotosAtuais)
        ]);

        return redirect()->route('aluno.logado')->with('sucesso', 'Postagem atualizada com sucesso!');
    }

    public function destroy(Postagem $postagem)
    {
        $fotos = json_decode($postagem->imagem, true) ?? [];
        if (is_array($fotos)) {
            foreach ($fotos as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }
        }

        $postagem->delete();

        return redirect()->route('aluno.logado')->with('sucesso', 'Postagem removida!');
    }
}