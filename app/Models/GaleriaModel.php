<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaModel extends Model
{
    use HasFactory;

    protected $table = 'galeria';
    protected $fillable = ['titulo', 'descricao', 'imagem'];
}
