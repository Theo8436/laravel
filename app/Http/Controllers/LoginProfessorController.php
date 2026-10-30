<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorModel;
use App\Models\AlunoModel;
use App\Models\AdicionaModel;
use App\Models\EventoCalendario; // Certifique-se de que este model está importado
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
    // Exibe a lista de alunos e as publicações pendentes
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

        // PUBLICAÇÕES QUE JÁ FORAM APROVADAS
        $publicacoes = Postagem::with('user')
            ->where('status', 'aprovada')
            ->latest()
            ->get();

        // PUBLICAÇÕES QUE O PROFESSOR PRECISA REVISAR
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

        return redirect()
            ->route('professor.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
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

        return redirect()
            ->route('professor.index')
            ->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    // Remove o aluno
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

        // Código mestre exigido para o cadastro de professores
        $codigoAcessoProfessor = env('CODIGO_ACESSO_PROFESSOR');

        // Verifica o código de acesso
        if ($request->code !== $codigoAcessoProfessor) {
            return redirect()->back()
                ->withErrors([
                    'code' => 'O código de acesso fornecido é inválido para professores.'
                ])
                ->withInput();
        }

        // CADASTRO DIRETO SEM VERIFICAÇÃO
        $professor = ProfessorModel::create([
            'nome'  => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'code'  => $request->code,
        ]);

        // Faz login automático do professor
        Auth::guard('professores')->login($professor, true);

        // Regenera a sessão por segurança
        $request->session()->regenerate();

        // Redireciona para a área do professor
        return redirect()->route('professor.logado');
    }

public function painelLogado()
    {
        // 1. Pega o ID do professor logado
        $professorId = Auth::guard('professores')->id();

        // 2. Busca todos os alunos para o <select> do painel
        $alunos = AlunoModel::all();

        // 3. Busca apenas os eventos cadastrados por este professor (com os dados do aluno)
        $eventos = EventoCalendario::with('aluno')
            ->where('professor_id', $professorId)
            ->get();

        // 4. Retorna a view enviando as variáveis
        return view('professor.logado', compact('alunos', 'eventos'));
    }

    public function salvarEventoCalendario(Request $request)
    {
        // Validação estrita exigindo aluno_id e data válida (bloqueando datas passadas)
        $request->validate([
            'titulo' => 'required|string|max:255',
            'aluno_id' => 'required|exists:alunos,id', // Garante que o aluno existe
            'data_evento' => 'required|date|after_or_equal:today',
            'descricao' => 'nullable|string'
        ]);

        // Salva o evento vinculado ao professor logado e ao aluno escolhido
        EventoCalendario::create([
            'professor_id' => Auth::guard('professores')->id(),
            'aluno_id' => $request->aluno_id,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'data_evento' => $request->data_evento,
        ]);

        return response()->json([
            'sucesso' => true,
            'message' => 'Evento cadastrado com sucesso!'
        ]);
    }

    // Processa o Login
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