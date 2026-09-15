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
        // Lista com os 6 livros científicos exatos, sem repetições
        $livrosCientificos = [
            ['titulo' => 'Uma Breve História do Tempo', 'autor' => 'Stephen Hawking', 'categoria' => 'Física'],
            ['titulo' => 'Cosmos', 'autor' => 'Carl Sagan', 'categoria' => 'Astronomia'],
            ['titulo' => 'O Gene Egoísta', 'autor' => 'Richard Dawkins', 'categoria' => 'Biologia'],
            ['titulo' => 'Sapiens', 'autor' => 'Yuval Noah Harari', 'categoria' => 'Ciências'],
            ['titulo' => 'O Universo Numa Casca de Noz', 'autor' => 'Stephen Hawking', 'categoria' => 'Astronomia'],
            ['titulo' => 'A Origem das Espécies', 'autor' => 'Charles Darwin', 'categoria' => 'Biologia'],
        ];

        // Percorre a lista e insere cada um no banco com um status aleatório
        foreach ($livrosCientificos as $livro) {
            LivroModel::create([
                'titulo'    => $livro['titulo'],
                'autor'     => $livro['autor'],
                'categoria' => $livro['categoria'],
                'status'    => collect(['livre', 'emprestado', 'reservado'])->random(), // Sorteia o status para o teste
            ]);
        }
    }
}
