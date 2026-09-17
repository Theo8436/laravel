<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mencoes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->text('descricao');
            $table->string('data_reconhecimento');
            $table->string('icone')->default('bi-trophy-fill');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mencoes');
    }
};