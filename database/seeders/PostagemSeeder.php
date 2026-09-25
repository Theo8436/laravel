<?php

namespace Database\Seeders;

use App\Models\Postagem;
use App\Models\AlunoModel;
use Illuminate\Database\Seeder;

class PostagemSeeder extends Seeder
{
    public function run(): void
    {
        $postagensIniciais = [
            [
                'titulo' => 'O Sistema Cardiovascular Humano',
                'categoria' => 'Beth Anatomy',
                'comentario' => 'Uma viagem pelos vasos sanguíneos e o coração, explorando como nosso corpo mantém a vida.',
                'imagem' => 'imagem6.png',
                'user_id' => 1,
                'status' => 'pendente',
            ],
            [
                'titulo' => 'A Física dos Buracos Negros',
                'categoria' => 'Beth nas Estrelas',
                'comentario' => 'Descubra os mistérios fascinantes dos buracos negros e como eles dobram o espaço-tempo.',
                'imagem' => 'imagem5.png',
                'user_id' => 1,
                'status' => 'pendente',
            ],
            [
                'titulo' => 'Documentário: Cosmos - Uma Odisseia do Espaço-Tempo',
                'categoria' => 'Beth Indica',
                'comentario' => 'Neil deGrasse Tyson nos guia através do universo nesta série imperdível.',
                'imagem' => 'imagem7.png',
                'user_id' => 1,
                'status' => 'pendente',
            ],
        ];

        foreach ($postagensIniciais as $postagem) {
            Postagem::create($postagem);
        }
    }
}