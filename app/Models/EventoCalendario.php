<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventoCalendario extends Model
{
    protected $table = 'eventos_calendario';
    
    protected $fillable = [
        'professor_id',
        'aluno_id',
        'titulo',
        'descricao',
        'data_evento'
    ];

    // Relacionamento com o aluno
    public function aluno()
    {
        return $this->belongsTo(AlunoModel::class, 'aluno_id');
    }
}
