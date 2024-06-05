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
        Schema::create('system_team_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('system_id')->constrained('system_teams')->cascadeOnDelete();
            $table->string('dateDay');
            $table->string('timeDay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_team_dates');
    }
};
