<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;

    protected $table = 'postagems';

    protected $fillable = [
        'titulo',
        'categoria',
        'comentario',
        'imagem',
        'user_id',
        'status',
        'observacao_professor',
    ];

    public function user()
    {
        return $this->belongsTo(AlunoModel::class, 'user_id');
    }
}