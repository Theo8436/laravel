<?php

namespace Database\Factories;

use App\Models\LivroModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroModelFactory extends Factory
{
    // Define qual model essa factory representa
    protected $model = LivroModel::class;

    /**
     * Define o estado padrão dos atributos do modelo.
     */
    public function definition(): array
    {
        // Lista de livros reais para o seu acervo científico
        $livrosCientificos = [
            ['titulo' => 'Uma Breve História do Tempo', 'autor' => 'Stephen Hawking', 'categoria' => 'Física'],
            ['titulo' => 'Cosmos', 'autor' => 'Carl Sagan', 'categoria' => 'Astronomia'],
            ['titulo' => 'O Gene Egoísta', 'autor' => 'Richard Dawkins', 'categoria' => 'Biologia'],
            ['titulo' => 'Sapiens', 'autor' => 'Yuval Noah Harari', 'categoria' => 'Ciências'],
            ['titulo' => 'O Universo Numa Casca de Noz', 'autor' => 'Stephen Hawking', 'categoria' => 'Astronomia'],
            ['titulo' => 'A Origem das Espécies', 'autor' => 'Charles Darwin', 'categoria' => 'Biologia'],
            ['titulo' => 'Pálido Ponto Azul', 'autor' => 'Carl Sagan', 'categoria' => 'Astronomia'],
            ['titulo' => 'Bilionários por Acaso', 'autor' => 'Ben Mezrich', 'categoria' => 'Ciências'],
        ];

        // Sorteia um dos livros da lista acima
        $livroAleatorio = $this->faker->randomElement($livrosCientificos);

        return [
            'titulo'    => $livroAleatorio['titulo'],
            'autor'     => $livroAleatorio['autor'],
            'categoria' => $livroAleatorio['categoria'],
            'status'    => $this->faker->randomElement(['livre', 'emprestado', 'reservado']), // Sorteia um status
        ];
    }
}
