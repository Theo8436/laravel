<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostagemController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FEED PÚBLICO
    |--------------------------------------------------------------------------
    */

    public function inicio()
    {
        // Visitantes e alunos só enxergam publicações aprovadas
        $publicacoes = Postagem::with('user')
            ->where('status', 'aprovada')
            ->latest()
            ->get();

        return view('aluno.inicio', compact('publicacoes'));
    }


    /*
    |--------------------------------------------------------------------------
    | ÁREA DO ALUNO
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $userId = Auth::guard('alunos')->id()
            ?? Auth::id()
            ?? session('aluno_id')
            ?? session('user_id');

        if (!$userId) {
            return redirect()
                ->route('aluno.entrar')
                ->with('erro', 'Sessão não encontrada ou expirada.');
        }

        /*
         * O aluno vê:
         * - as próprias publicações, independente do status;
         * - publicações aprovadas dos outros alunos.
         */
        $postagens = Postagem::with('user')
        ->where('status', 'pendente')
        ->latest()
        ->get();

        return view('professor.logado', compact('alunos', 'postagens'));
        $publicacoes = Postagem::with('user')
    ->where('status', 'aprovada')
    ->latest()
    ->get();
        // $postagens = Postagem::with('user')
        //     ->where(function ($query) use ($userId) {
        //         $query->where('user_id', $userId)
        //               ->orWhere('status', 'aprovada');
        //     })
        //     ->latest()
        //     ->get();

        // return view('aluno.logado', compact('postagens'));
    }


    /*
    |--------------------------------------------------------------------------
    | CRIAR POSTAGEM
    |--------------------------------------------------------------------------
    */

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

        $userId = Auth::guard('alunos')->id()
            ?? Auth::id()
            ?? session('aluno_id')
            ?? session('user_id');

        if (!$userId) {
            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'erro',
                    'Sessão não encontrada ou expirada. Por favor, faça login novamente.'
                );
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
            'user_id'    => $userId,
            'status'     => 'pendente'
        ]);

        return redirect()
            ->route('aluno.logado')
            ->with(
                'sucesso',
                'Postagem enviada para aprovação do professor!'
            );
    }
    


    /*
    |--------------------------------------------------------------------------
    | VISUALIZAR POSTAGEM
    |--------------------------------------------------------------------------
    */
    public function aprovar(Postagem $postagem)
{
    $postagem->update([
        'status' => 'aprovada',
    ]);

    return redirect()
        ->back()
        ->with('sucesso', 'Postagem aprovada com sucesso!');
}
    public function rejeitar(Postagem $postagem)
{
    $postagem->update([
        'status' => 'rejeitada',
    ]);

    return redirect()
        ->back()
        ->with('sucesso', 'Postagem rejeitada.');
}


    public function show(Postagem $postagem)
    {
        /*
         * Publicação rejeitada ou pendente não pode ser
         * acessada publicamente.
         *
         * O próprio aluno pode visualizar sua publicação.
         */

        $userId = Auth::guard('alunos')->id()
            ?? Auth::id()
            ?? session('aluno_id')
            ?? session('user_id');

        if (
            $postagem->status !== 'aprovada'
            && (int) $postagem->user_id !== (int) $userId
        ) {
            abort(404);
        }

        return view('aluno.showPostagem', compact('postagem'));
    }


    /*
    |--------------------------------------------------------------------------
    | EDITAR POSTAGEM
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, Postagem $postagem)
    {
        $userId = Auth::guard('alunos')->id()
            ?? Auth::id()
            ?? session('aluno_id')
            ?? session('user_id');

        // Só o dono pode editar
        if ((int) $postagem->user_id !== (int) $userId) {
            abort(403);
        }

        // Publicação aprovada não pode ser alterada diretamente
        if ($postagem->status === 'aprovada') {
            return redirect()
                ->back()
                ->with(
                    'erro',
                    'Uma publicação aprovada não pode ser editada.'
                );
        }

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
            $fotosAtuais = $postagem->imagem
                ? [$postagem->imagem]
                : [];
        }

        /*
        |--------------------------------------------------------------------------
        | Remover imagens
        |--------------------------------------------------------------------------
        */

        if ($request->has('remover_imagens')) {
            $fotosParaRemover = $request->input('remover_imagens');

            foreach ($fotosParaRemover as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }

            $fotosAtuais = array_values(
                array_filter(
                    $fotosAtuais,
                    function ($foto) use ($fotosParaRemover) {
                        return !in_array($foto, $fotosParaRemover);
                    }
                )
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Adicionar novas imagens
        |--------------------------------------------------------------------------
        */

        $novasImagens = $request->file('imagens')
            ? count($request->file('imagens'))
            : 0;

        $totalFinal = count($fotosAtuais) + $novasImagens;

        if ($totalFinal > 10) {
            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'erro',
                    'Limite excedido! A postagem pode ter no máximo 10 imagens no total.'
                );
        }

        if ($request->hasFile('imagens')) {
            foreach ($request->file('imagens') as $file) {
                $path = $file->store('postagens', 'public');
                $fotosAtuais[] = $path;
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Atualizar e enviar novamente para aprovação
        |--------------------------------------------------------------------------
        */

        $postagem->update([
            'titulo'     => $request->titulo,
            'categoria'  => $request->categoria,
            'comentario' => $request->comentario,
            'imagem'     => json_encode($fotosAtuais),

            // Depois de editar, volta para análise do professor
            'status'     => 'pendente',
        ]);

        return redirect()
            ->route('aluno.logado')
            ->with(
                'sucesso',
                'Postagem atualizada e enviada novamente para aprovação!'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | EXCLUIR POSTAGEM
    |--------------------------------------------------------------------------
    */

    public function destroy(Postagem $postagem)
    {
        $userId = Auth::guard('alunos')->id()
            ?? Auth::id()
            ?? session('aluno_id')
            ?? session('user_id');

        // Só o dono pode excluir
        if ((int) $postagem->user_id !== (int) $userId) {
            abort(403);
        }

        $fotos = json_decode($postagem->imagem, true) ?? [];

        if (is_array($fotos)) {
            foreach ($fotos as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }
        }

        $postagem->delete();

        return redirect()
            ->route('aluno.logado')
            ->with('sucesso', 'Postagem removida!');
    }


    /*
    |--------------------------------------------------------------------------
    | PROFESSOR - LISTAR PUBLICAÇÕES PENDENTES
    |--------------------------------------------------------------------------
    */

    public function pendentes()
    {
        $postagens = Postagem::with('user')
            ->where('status', 'pendente')
            ->latest()
            ->get();

        return view('professor.postagens', compact('postagens'));
    }


    /*
    |--------------------------------------------------------------------------
    | PROFESSOR - APROVAR
    |--------------------------------------------------------------------------
    */

    public function aprovar(Postagem $postagem)
    {
        $postagem->update([
            'status' => 'aprovada',
        ]);

        return redirect()
            ->back()
            ->with(
                'sucesso',
                'Publicação aprovada com sucesso!'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | PROFESSOR - REJEITAR
    |--------------------------------------------------------------------------
    */

    public function rejeitar(Postagem $postagem)
    {
        $postagem->update([
            'status' => 'rejeitada',
        ]);

        return redirect()
            ->back()
            ->with(
                'sucesso',
                'Publicação rejeitada.'
            );
    }
}