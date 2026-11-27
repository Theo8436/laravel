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
        LivroModel::factory()->count(6)->create();
    }
}
