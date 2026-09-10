<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LivroModel;

class LivrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livro::create([
            'titulo' => 'O Avesso da Pele',
            'autor' => 'Jeferson',
            'categoria'
        ]);
    }
}
