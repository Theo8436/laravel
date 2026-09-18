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
        Schema::table('postagems', function (Blueprint $table) {
            // Altera a coluna 'imagem' de VARCHAR para TEXT para aceitar JSON longo
            $table->text('imagem')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('postagems', function (Blueprint $table) {
            // Volta para VARCHAR (string) caso precise fazer rollback
            $table->string('imagem')->change();
        });
    }
};