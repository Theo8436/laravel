<?php

namespace Database\Seeders;

use App\Models\Postagem;
use Illuminate\Database\Seeder;

class PostagemSeeder extends Seeder
{
    public function run(): void
    {
        $postagensIniciais = [
            [
                'titulo' => 'Experimento de Ciências',
                'categoria' => 'Beth Anatomy',
                'comentario' => 'Hoje realizamos um experimento muito interessante durante uma das atividades do clube.',
                'imagem' => null,
                'user_id' => 1,
            ],
            [
                'titulo' => 'Descobrindo o Universo',
                'categoria' => 'Beth nas Estrelas',
                'comentario' => 'Aprendemos várias curiosidades sobre o universo, os planetas e as estrelas.',
                'imagem' => null,
                'user_id' => 1,
            ],
            [
                'titulo' => 'Dica de Conteúdo Científico',
                'categoria' => 'Beth Indica',
                'comentario' => 'Uma indicação de conteúdo para quem gosta de aprender mais sobre ciência e tecnologia.',
                'imagem' => null,
                'user_id' => 1,
            ],
        ];

        foreach ($postagensIniciais as $postagem) {
            Postagem::create($postagem);
        }
    }
}