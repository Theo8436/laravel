<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorModel;
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
        'email.unique'  => 'Este e-mail já está cadastrado.',
        'senha.size'    => 'A senha deve ter 8 caracteres.',
        'code.required' => 'O código de acesso é obrigatório.'
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

    public function logout(Request $request) {
        Auth::guard('professores')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('professor');
    }

    public function remover(Request $dados) {  }
    public function atualizar(Request $dados) {  }
    public function consultar() {  }
}