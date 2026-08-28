<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mencao extends Model
{
    use HasFactory;

    protected $table = 'mencoes';

    protected $fillable = [
        'titulo',
        'autor',
        'descricao',
        'data_reconhecimento',
        'icone',
    ];
}