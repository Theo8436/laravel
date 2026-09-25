<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            ALTER TABLE postagems
            MODIFY status ENUM(
                'pendente',
                'aprovada',
                'ajustes',
                'rejeitada'
            ) NOT NULL DEFAULT 'pendente'
        ");
    }

    public function down(): void
    {
        DB::statement("
            ALTER TABLE postagems
            MODIFY status ENUM(
                'pendente',
                'aprovada',
                'rejeitada'
            ) NOT NULL DEFAULT 'pendente'
        ");
    }
};