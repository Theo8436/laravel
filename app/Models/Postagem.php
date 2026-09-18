<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'categoria',
        'comentario',
        'imagem',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}