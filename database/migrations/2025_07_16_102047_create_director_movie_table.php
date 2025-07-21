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
        Schema::create('director_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('director_id') ->constrained('directors') ->onDelete('cascade'); // se il regista viene eliminato, anche le associazioni vengono eliminate
            $table->foreignId('movie_id') ->constrained('movies') ->onDelete('cascade'); // se il film viene eliminato, anche le associazioni vengono eliminate
            $table->unique(['director_id', 'movie_id']); // impedisce duplicati
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('director_movie');
    }
};
