<?php

namespace App\Http\Controllers;

use App\Models\LivroModel;
use App\Models\SolicitacaoEmprestimo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitacaoEmprestimoController extends Controller
{
    public function store(Request $request, $livroId)
    {
        $aluno = Auth::guard('alunos')->user();

        if (!$aluno) {
            return redirect()->back()
                ->with('erro', 'Você precisa estar logado para solicitar um empréstimo.');
        }

        $livro = LivroModel::findOrFail($livroId);

        if ($livro->status !== 'livre') {
            return redirect()->back()
                ->with('erro', 'Este livro não está disponível no momento.');
        }

        $jaSolicitou = SolicitacaoEmprestimo::where('aluno_id', $aluno->id)
            ->where('livro_id', $livro->id)
            ->exists();

        if ($jaSolicitou) {
            return redirect()->back()
                ->with('erro', 'Você já solicitou este livro.');
        }

        SolicitacaoEmprestimo::create([
            'aluno_id' => $aluno->id,
            'livro_id' => $livro->id,
            'nome_aluno' => $aluno->nome,
            'email_aluno' => $aluno->email,
            'titulo_livro' => $livro->titulo,
            'status' => 'pendente',
        ]);

        return redirect()->back()
            ->with('sucesso', 'Solicitação de empréstimo enviada com sucesso!');
    }


    public function aprovar($id)
    {
        $solicitacao = SolicitacaoEmprestimo::findOrFail($id);

        $solicitacao->status = 'aprovada';
        $solicitacao->save();

        return redirect()->back()
            ->with('sucesso');
    }
}