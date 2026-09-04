<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProfessorModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'professores';
    protected $fillable = ['nome', 'email', 'senha', 'code']; 

    public function getAuthPassword()
    {
        return $this->senha;
    }
}