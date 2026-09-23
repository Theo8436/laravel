<?php

namespace App\Http\Controllers;

use App\Models\AdicionaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Postagem;

class AdicionaController extends Controller
{
    // Exibe a lista de alunos e as publicações pendentes
    public function index(Request $request)
    {
        $query = AdicionaModel::query();

        // Filtro de busca por nome ou e-mail
        if ($request->filled('busca')) {
            $busca = $request->busca;

            $query->where(function ($q) use ($busca) {
                $q->where('nome', 'like', "%{$busca}%")
                  ->orWhere('email', 'like', "%{$busca}%");
            });
        }

        // Lista paginada de alunos
        $alunos = $query
            ->latest()
            ->paginate(10)
            ->appends($request->all());

        // Publicações que precisam ser aprovadas pelo professor
        $postagens = Postagem::with('user')
            ->where('status', 'pendente')
            ->latest()
            ->get();

        return view('professor.logado', compact('alunos', 'postagens'));
    }

    // Exibe a tela/modal de formulário para adicionar aluno
    public function create()
    {
        return view('professor.adiciona');
    }

    // Processa a gravação do novo aluno
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

        return redirect()->route('professor.index')->with('sucesso');
    }

    // Atualiza os dados do aluno
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

        return redirect()->route('professor.index')->with('sucesso');
    }

    // Remove o aluno
    public function destroy(AdicionaModel $aluno)
    {
        $aluno->delete();

        return redirect()->route('professor.index')->with('sucesso');
    }
}