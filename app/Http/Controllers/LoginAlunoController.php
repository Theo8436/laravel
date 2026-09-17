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

    // 1. Processa o formulário de cadastro inicial e envia o e-mail
    public function adicionar(Request $request) { 
        $request->validate([
            'nome'            => 'required|string|max:255',
            'email'           => 'required|email|unique:alunos,email|unique:professores,email',
            'senha'           => 'required|size:8',
            'nivel_acesso'    => 'required|in:monitor,clubista' // VALIDAÇÃO: Garante que só aceite uma das duas opções
        ], [
            'email.unique'    => 'Este e-mail já está cadastrado.',
            'senha.size'       => 'A senha deve ter 8 caracteres.',
            'nivel_acesso.in' => 'O nível de acesso selecionado é inválido.'
        ]);

        // Gera um código aleatório de 6 dígitos
        $codigo = rand(100000, 999999);

        // Guarda temporariamente os dados, incluindo o nível de acesso escolhido na SESSÃO
        session([
            'cadastro_temporario' => [
                'nome'            => $request->nome,
                'email'           => $request->email,
                'senha'           => Hash::make($request->senha),
                'nivel_acesso'    => $request->nivel_acesso, // CAPTURA: Salva a escolha do formulário
            ],
            'codigo_verificacao' => $codigo
        ]);

        // Envia o e-mail real com o código para o e-mail digitado
        Mail::to($request->email)->send(new CodigoVerificacaoMail($codigo));

        // Redireciona para a página onde ele deve digitar o código
        return redirect()->route('aluno.verificar_codigo');
    }

    // 2. Exibe a tela para digitação do código
    public function telaCodigo() {
        if (!session()->has('cadastro_temporario')) {
            return redirect()->route('aluno.entrar');
        }
        return view('aluno.verificar_codigo');
    }

    // 3. Valida o código de e-mail e CRIA a conta definitiva salvando no banco
    public function confirmarCodigo(Request $request) {
        $request->validate([
            'codigo_digitado' => 'required|numeric|digits:6',
        ]);

        $codigoCorreto = session('codigo_verificacao');
        $dadosAluno = session('cadastro_temporario');

        if (!$dadosAluno) {
            return redirect()->route('aluno.entrar')->withErrors(['error' => 'Sessão expirada. Tente o cadastro novamente.']);
        }

        // Verifica se o código bate
        if ($request->codigo_digitado == $codigoCorreto) {
            
            // Grava o aluno definitivamente no banco com o seu nível correspondente
            $aluno = AlunoModel::create([
                'nome'            => $dadosAluno['nome'],
                'email'           => $dadosAluno['email'],
                'senha'           => $dadosAluno['senha'], 
                'nivel_acesso'    => $dadosAluno['nivel_acesso'], // GRAVAÇÃO: Insere no banco
            ]);
            
            // Limpa as sessões temporárias
            session()->forget(['codigo_verificacao', 'cadastro_temporario']);

            // Faz o login automático do Aluno recém-criado
            Auth::guard('alunos')->login($aluno, true);

            // Redireciona para a página interna/logada do aluno
            return redirect()->route('aluno.logado');
        }

        // ---- CÓDIGO ERRADO ----
        return redirect()->back()->withErrors(['codigo_digitado' => 'O código de verificação digitado está incorreto.']);
    }

    // 4. Método de Reenvio do Código por e-mail
    public function reenviarCodigo(Request $request)
    {
        $dadosAluno = session('cadastro_temporario');
        $email = $dadosAluno['email'] ?? null; 

        if (!$email) {
            return redirect()->back()->withErrors(['error' => 'Não encontramos seus dados de cadastro. Tente reiniciar o cadastro.']);
        }

        // Gera um novo código aleatório de 6 dígitos
        $novoCodigo = rand(100000, 999999);

        // Atualiza apenas o código de verificação na sessão
        session(['codigo_verificacao' => $novoCodigo]);

        try {
            Mail::to($email)->send(new CodigoVerificacaoMail($novoCodigo));
            return redirect()->back()->with('status', 'Um novo código de 6 dígitos foi enviado para o seu e-mail!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Não foi possível reenviar o e-mail. Verifique suas configurações de servidor de e-mail.']);
        }
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
