<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('publicacoes', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('autor');
        $table->string('categoria');
        $table->date('data');
        $table->string('status')->default('Pendente'); // Adicionado conforme o padrão visual do seu card
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacoes');
    }
};
