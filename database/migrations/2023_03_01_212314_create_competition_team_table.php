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
        Schema::create('competition_team', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('team_id')
                ->references('id')
                ->on('competitions')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->unsignedBigInteger('competition_id')
                ->references('id')
                ->on('teams')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competition_team');
    }
};
