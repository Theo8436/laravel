<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos_calendario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professor_id');
            $table->unsignedBigInteger('aluno_id')->nullable();
            $table->string('categoria');
            $table->text('descricao')->nullable();
            $table->date('data_evento');
            $table->timestamps();
            $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos_calendario');
    }
};
