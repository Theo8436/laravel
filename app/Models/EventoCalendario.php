<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoCalendario extends Model
{
    use HasFactory;

    protected $table = 'eventos_calendario';

    protected $fillable = [
        'professor_id',
        'aluno_id',
        'titulo',
        'descricao',
        'data_evento'
    ];

    public function aluno()
    {
        return $this->belongsTo(LoginAlunoModel::class, 'aluno_id');
    }

    public function professor()
    {
        return $this->belongsTo(LoginProfessorModel::class, 'professor_id');
    }
}
