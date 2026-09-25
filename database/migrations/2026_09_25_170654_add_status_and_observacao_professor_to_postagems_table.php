<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('postagems', function (Blueprint $table) {
            $table->string('status')
                ->default('pendente')
                ->after('imagem');

            $table->text('observacao_professor')
                ->nullable()
                ->after('status');
        });
    }

    public function down(): void
    {
        Schema::table('postagems', function (Blueprint $table) {
            $table->dropColumn([
                'status',
                'observacao_professor',
            ]);
        });
    }
};