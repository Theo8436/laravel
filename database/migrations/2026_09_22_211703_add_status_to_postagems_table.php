<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('postagems', function (Blueprint $table) {
            $table->enum('status', [
                'pendente',
                'aprovada',
                'rejeitada'
            ])->default('pendente')->after('user_id');
        });
    }

    public function down(): void
    {
        Schema::table('postagems', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};