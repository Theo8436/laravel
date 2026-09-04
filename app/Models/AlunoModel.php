<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AlunoModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'alunos';
    protected $fillable = ['nome', 'email', 'senha']; 

    public function getAuthPassword()
    {
        return $this->senha;
    }
}