<?php

namespace Database\Seeders;

use App\Models\Mencao;
use Illuminate\Database\Seeder;

class MencaoHonrosaSeeder extends Seeder
{
    public function run(): void
    {
        $mencoesIniciais = [
            [
                'titulo' => 'Destaque em Ciências',
                'autor' => 'Maria Silva',
                'data_reconhecimento' => '2025-03-15',
                'icone' => 'bi-trophy-fill',
                'descricao' => 'Reconhecimento pelo excelente desempenho nas atividades e experimentos científicos realizados no clube.',
            ],
            [
                'titulo' => 'Participação de Destaque',
                'autor' => 'João Santos',
                'data_reconhecimento' => '2025-05-20',
                'icone' => 'bi-award-fill',
                'descricao' => 'Menção honrosa pela participação ativa nas atividades, projetos e apresentações do clube.',
            ],
            [
                'titulo' => 'Projeto Científico',
                'autor' => 'Ana Oliveira',
                'data_reconhecimento' => '2025-08-10',
                'icone' => 'bi-lightbulb-fill',
                'descricao' => 'Reconhecimento pela criatividade e dedicação na elaboração de um projeto científico.',
            ],
            [
                'titulo' => 'Dedicação aos Estudos',
                'autor' => 'Lucas Pereira',
                'data_reconhecimento' => '2025-10-05',
                'icone' => 'bi-star-fill',
                'descricao' => 'Menção honrosa pelo comprometimento, dedicação e evolução durante as atividades do clube.',
            ],
        ];

        foreach ($mencoesIniciais as $mencao) {
            Mencao::create($mencao);
        }
    }
}