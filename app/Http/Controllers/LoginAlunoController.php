<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;
use App\Models\ProfessorModel;
use App\Models\EventoCalendario;
use App\Models\Postagem;
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

    public function logado()
    {
        return $this->painelLogado();
    }

    public function adicionar(Request $request)
    {
        $request->validate([
            'nome'         => 'required|string|max:255',
            'email'        => 'required|email|unique:professores,email|unique:alunos,email',
            'senha'        => 'required|size:8',
            'nivel_acesso' => 'required|in:monitor,clubista'
        ], [
            'email.unique'     => 'Este e-mail já está cadastrado.',
            'senha.size'       => 'A senha deve ter 8 caracteres.',
            'nivel_acesso.in'  => 'O nível de acesso selecionado é inválido.'
        ]);

        $aluno = AlunoModel::create([
            'nome'         => $request->nome,
            'email'        => $request->email,
            'senha'        => Hash::make($request->senha),
            'code'         => $request->code,
            'nivel_acesso' => $request->nivel_acesso,
        ]);

        Auth::guard('alunos')->login($aluno, true);

        $request->session()->regenerate();

        return redirect()->route('aluno.logado');
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

        if (Auth::guard('alunos')->attempt($tentativa, true)) {
            $request->session()->regenerate();
            return redirect()->route('aluno.logado'); 
        }

        return back()->withErrors(['email' => 'E-mail ou senha incorretos.'])->withInput();
    }

    public function logout(Request $request) {
        Auth::guard('alunos')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('aluno');
    }

    public function painelLogado()
    {
        $alunoId = Auth::guard('alunos')->id();
    
        $eventos = EventoCalendario::where('aluno_id', $alunoId)
            ->orderBy('data_evento', 'asc')
            ->get();
    
        $minhasPostagens = Postagem::where('user_id', $alunoId)
            ->latest()
            ->get();
    
        return view('aluno.logado', compact(
            'eventos',
            'minhasPostagens'
        ));
    
    
    $eventos = EventoCalendario::where('aluno_id', $alunoId)->get();

    $minhasPostagens = Postagem::where('aluno_id', $alunoId)->get();

    return view('aluno.logado', compact('eventos', 'minhasPostagens'));
}
    public function remover(Request $dados) {  }
    public function atualizar(Request $dados) {  }
    public function consultar() {  }
}