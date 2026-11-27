<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AlunoModel;
use App\Models\ProfessorModel;

class EventoCalendario extends Model
{
    protected $table = 'eventos_calendario';

    protected $fillable = [
        'professor_id',
        'aluno_id',
        'categoria',
        'descricao',
        'data_evento'
    ];

    public function aluno()
    {
        return $this->belongsTo(AlunoModel::class, 'aluno_id');
    }

    public function professor()
    {
        return $this->belongsTo(ProfessorModel::class, 'professor_id');
    }
}