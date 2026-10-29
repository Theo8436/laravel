<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorModel;
use App\Models\AlunoModel;
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