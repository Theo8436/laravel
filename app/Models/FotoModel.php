<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoModel extends Model
{
    use HasFactory;

    // Define explicitamente o nome da tabela criada na sua migration
    protected $table = 'foto';

    // Campos permitidos para cadastro
    protected $fillable = [
        'titulo',
        'descricao',
        'caminho',
    ];
}
