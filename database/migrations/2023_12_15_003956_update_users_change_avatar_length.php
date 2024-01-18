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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar', 255)->default('assets/img/auth/default-avatar.png')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->string('avatar', 191)->default('assets/img/auth/default-avatar.png')->change();
    }
};
