<?php

namespace Database\Seeders;

use App\Models\GaleriaModel;
use Illuminate\Database\Seeder;

class GaleriaSeeder extends Seeder
{
    public function run(): void
    {
        $fotosIniciais = [
            [
                'titulo' => 'Atividades do Grupo',
                'descricao' => 'Momentos de aprendizado e interação entre os clubistas durante a palestra.',
                'imagem' => 'imagem1.png'
            ],
            [
                'titulo' => 'Experimentos',
                'descricao' => 'Experimentos científicos detalhados realizados no laboratório principal.',
                'imagem' => 'imagem2.png'
            ],
            [
                'titulo' => 'Aula Especial',
                'descricao' => 'Aulas dinâmicas e apresentações realizadas com os clubistas em sala.',
                'imagem' => 'imagem3.png'
            ],
            [
                'titulo' => 'Encontro dos Clubistas',
                'descricao' => 'Momento de integração, estudo em grupo e troca contínua de conhecimentos.',
                'imagem' => 'imagem4.png'
            ]
        ];

        foreach ($fotosIniciais as $foto) {
            GaleriaModel::create($foto);
        }
    }
}
