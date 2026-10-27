<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodigoVerificacaoMail;

class LoginAlunoController extends Controller
{
    public function entrar() {
        return view('aluno.entrar');
    }

    public function cadastro() {
        return view('aluno.cadastro');
    }

    public function adicionar(Request $request)
{
    $request->validate([
        'nome'  => 'required|string|max:255',
        'email' => 'required|email|unique:professores,email|unique:alunos,email',
        'senha' => 'required|size:8',
        'nivel_acesso'    => 'required|in:monitor,clubista'
    ], [
        'email.unique'  => 'Este e-mail já está cadastrado.',
        'senha.size'    => 'A senha deve ter 8 caracteres.',
        'nivel_acesso.in' => 'O nível de acesso selecionado é inválido.'
    ]);


    $aluno = AlunoModel::create([
        'nome'  => $request->nome,
        'email' => $request->email,
        'senha' => Hash::make($request->senha),
        'code'  => $request->code,
        'nivel_acesso'    => $request->nivel_acesso,
    ]);

    // Faz login automático do aluno
    Auth::guard('alunos')->login($aluno, true);

    // Regenera a sessão por segurança
    $request->session()->regenerate();

    // Redireciona para a área do professor
    return redirect()->route('aluno.logado');
}

     // 5. Processa o Login convencional
    public function logar(Request $request) {
        $credenciais = $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        $tentativa = [
            'email'    => $credenciais['email'],
            'password' => $credenciais['senha']
        ];

        // Executa a tentativa de login guardando a sessão (true)
        if (Auth::guard('alunos')->attempt($tentativa, true)) {
            $request->session()->regenerate();
            return redirect()->route('aluno.logado'); 
        }

        return back()->withErrors(['email' => 'E-mail ou senha incorretos.'])->withInput();
    }

    // 6. Processa o Logout
    public function logout(Request $request) {
        Auth::guard('alunos')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('aluno');
    }

    public function remover(Request $dados) {  }
    public function atualizar(Request $dados) {  }
    public function consultar() {  }
}
