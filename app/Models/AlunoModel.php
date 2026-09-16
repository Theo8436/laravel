<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AlunoModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'alunos';
    
    // PERMISSÃO: Adicionado 'nivel_acesso' na lista de gravação em massa
    protected $fillable = [
        'nome', 
        'email', 
        'senha', 
        'nivel_acesso'
    ]; 

    // Indica ao Laravel que o campo de senha no banco se chama 'senha' e não 'password'
    public function getAuthPassword()
    {
        return $this->senha;
    }
}
