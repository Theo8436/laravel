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
        // Usa table em vez de create para apenas alterar a tabela existente
        Schema::table('alunos', function (Blueprint $table) {
            if (!Schema::hasColumn('alunos', 'nivel_acesso')) {
                $table->enum('nivel_acesso', ['Clubista', 'Monitor'])->default('Clubista')->after('email');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            if (Schema::hasColumn('alunos', 'nivel_acesso')) {
                $table->dropColumn('nivel_acesso');
            }
        });
    }
};