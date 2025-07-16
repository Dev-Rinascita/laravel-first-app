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
        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedBigInteger('director_id')->nullable()->after('id'); // Aggiunge la colonna director_id come chiave esterna
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('set null'); // Imposta la relazione
                                                                                                     // con la tabella directors e
                                                                                                     // gestisce la cancellazione impostando a null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign(['director_id']); // Rimuove la chiave esterna
            $table->dropColumn('director_id'); // Rimuove la colonna director_id
        });
    }
};
