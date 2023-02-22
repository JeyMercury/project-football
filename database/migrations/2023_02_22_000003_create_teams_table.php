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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('diminutive')->unique();
            $table->string('coach');
            $table->foreignId('country_id')->constrained();
            $table->foreignId('competition_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign('posts_country_id_foreign');
        $table->dropForeign('posts_competition_id_foreign');
        Schema::dropIfExists('failed_jobs');
    }
};
