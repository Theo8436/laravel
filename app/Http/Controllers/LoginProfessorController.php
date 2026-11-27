<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorModel;
use App\Models\AlunoModel;
use App\Models\AdicionaModel;
use App\Models\Postagem;
use App\Models\EventoCalendario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodigoVerificacaoMail;

class LoginProfessorController extends Controller
{
    public function entrar() {
        return view('professor.entrar');
    }

    public function cadastro() {
        return view('professor.cadastro');
    }
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

    public function adicionar(Request $request)
    {
        $request->validate([
            'nome'  => 'required|string|max:255',
            'email' => 'required|email|unique:professores,email|unique:alunos,email',
            'senha' => 'required|size:8',
            'code'  => 'required|string|min:7|max:7'
        ], [
            'email.unique'   => 'Este e-mail já está cadastrado.',
            'senha.size'     => 'A senha deve ter 8 caracteres.',
            'code.required'  => 'O código de acesso é obrigatório.'
        ]);

        $codigoAcessoProfessor = env('CODIGO_ACESSO_PROFESSOR');

        if ($request->code !== $codigoAcessoProfessor) {
            return redirect()->back()
                ->withErrors([
                    'code' => 'O código de acesso fornecido é inválido para professores.'
                ])
                ->withInput();
        }

        $professor = ProfessorModel::create([
            'nome'  => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'code'  => $request->code,
        ]);

        Auth::guard('professores')->login($professor, true);

        $request->session()->regenerate();

        return redirect()->route('professor.logado');
    }

public function painelLogado(Request $request)
{
    $professorId = Auth::guard('professores')->id();

    $alunos = AlunoModel::latest()
        ->paginate(10)
        ->appends($request->all());

    $eventos = EventoCalendario::with('aluno')
    ->where('professor_id', Auth::guard('professores')->id())
    ->latest('data_evento')
    ->get();

    $postagens = Postagem::with('user')
        ->where('status', 'pendente')
        ->latest()
        ->get();

    return view('professor.logado', compact('alunos', 'eventos', 'postagens', 'eventos'));
}
public function excluirEventoCalendario($id)
{
    $evento = EventoCalendario::findOrFail($id);

    if ($evento->professor_id !== Auth::guard('professores')->id()) {
        return redirect()->back()->withErrors(['erro' => 'Você não tem permissão para excluir este evento.']);
    }

    $evento->delete();

    return redirect()->back()->with('sucesso', 'Evento removido com sucesso!');
}



    public function salvarEventoCalendario(Request $request)
    {
        $request->validate([
            'categoria'  => 'required|string|in:Beth Indica,Beth nas Estrelas,Beth Anatomy',
            'aluno_id' => 'required|exists:alunos,id',
            'data_evento' => 'required|date|after_or_equal:today',
            'descricao' => 'required|string'
        ]);

        EventoCalendario::create([
            'professor_id' => Auth::guard('professores')->id(),
            'aluno_id' => $request->aluno_id,
            'categoria' => $request->categoria,
            'descricao' => $request->descricao,
            'data_evento' => $request->data_evento,
        ]);

        return response()->json([
            'sucesso' => true,
            'message' => 'Evento cadastrado com sucesso!'
        ]);
    }

    public function logar(Request $request) {
        $credenciais = $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        $tentativa = [
            'email'    => $credenciais['email'],
            'password' => $credenciais['senha']
        ];

        if (Auth::guard('professores')->attempt($tentativa, true)) {
            $request->session()->regenerate();
            return redirect()->route('professor.logado'); 
        }

        return back()->withErrors(['email' => 'E-mail ou senha incorretos.'])->withInput();
    }

    public function logout(Request $request) {
        Auth::guard('professores')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('professor.entrar');
    }

    public function remover(Request $dados) {  }
    public function atualizar(Request $dados) {  }
    public function consultar() {  }
}