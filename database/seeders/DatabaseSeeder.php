<?php

namespace Database\Seeders;

use App\Models\LivroModel;
use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    /**
     * Executa as sementes do banco de dados.
     */
    public function run(): void
    {
        // Chama a factory e diz para criar exatamente 6 livros no banco
        LivroModel::factory()->count(6)->create();
    }
}
