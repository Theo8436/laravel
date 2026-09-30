<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitacaoEmprestimo extends Model
{
    use HasFactory;

    protected $table = 'solicitacoes_emprestimo';

protected $fillable = [
    'aluno_id',
    'livro_id',
    'nome_aluno',
    'email_aluno',
    'titulo_livro',
    'status',
];

    public function aluno()
    {
        return $this->belongsTo(AlunoModel::class, 'aluno_id');
    }

    public function livro()
    {
        return $this->belongsTo(LivroModel::class, 'livro_id');
    }
}