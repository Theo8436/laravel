<?php

namespace App\Http\Controllers;

use App\Models\AdicionaModel;
use App\Models\Postagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdicionaController extends Controller
{
    public function index(Request $request)
    {
        $query = AdicionaModel::query();

        if ($request->filled('busca')) {
            $busca = $request->busca;

            $query->where(function ($q) use ($busca) {
                $q->where('nome', 'like', "%{$busca}%")
                  ->orWhere('email', 'like', "%{$busca}%");
            });
        }

        $alunos = $query
            ->latest()
            ->paginate(10)
            ->appends($request->all());

        $publicacoes = Postagem::with('user')
            ->where('status', 'aprovada')
            ->latest()
            ->get();

        $postagens = Postagem::with('user')
            ->where('status', 'pendente')
            ->latest()
            ->get();

        return view('professor.logado', compact(
            'alunos',
            'publicacoes',
            'postagens'
        ));
    }

    public function create()
    {
        return view('professor.adiciona');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:alunos,email',
            'nivel_acesso' => 'required|in:Clubista,Monitor',
        ]);

        AdicionaModel::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'nivel_acesso' => $request->nivel_acesso,
            'senha' => Hash::make('12345678'),
        ]);

        return redirect()
            ->route('professor.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function update(Request $request, AdicionaModel $aluno)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:alunos,email,' . $aluno->id,
            'nivel_acesso' => 'required|in:Clubista,Monitor',
        ]);

        $aluno->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'nivel_acesso' => $request->nivel_acesso,
        ]);

        return redirect()
            ->route('professor.index')
            ->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    public function destroy(AdicionaModel $aluno)
    {
        $aluno->delete();

        return redirect()
            ->route('professor.index')
            ->with('sucesso', 'Aluno removido com sucesso!');
    }
}