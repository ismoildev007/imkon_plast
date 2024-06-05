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
        Schema::create('system_teams', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->unique();
            $table->string('position_uz', 191)->unique();
            $table->string('position_ru', 191)->unique();
            $table->string('position_en', 191)->unique();
            $table->string('email', 191)->unique();
            $table->string('image', 191)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_teams');
    }
};
