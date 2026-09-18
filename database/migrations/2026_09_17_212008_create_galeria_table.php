<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeria', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('imagem'); // Salva o caminho do arquivo (Ex: galeria/foto.jpg)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeria');
    }
};
