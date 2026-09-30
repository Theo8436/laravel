<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solicitacoes_emprestimo', function (Blueprint $table) {
            $table->id();

            $table->foreignId('aluno_id')
                ->constrained('alunos')
                ->cascadeOnDelete();

            $table->foreignId('livro_id')
                ->constrained('livro')
                ->cascadeOnDelete();

            $table->string('nome_aluno');
            $table->string('email_aluno');
            $table->string('titulo_livro');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitacoes_emprestimo');
    }
};