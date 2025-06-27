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
        Schema::table('directors', function (Blueprint $table) {
            $table->string('img')->nullable()->after('age'); // qui aggiungo la colonna 'img' alla tabella 'directors', dopo la colonna 'age'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('directors', function (Blueprint $table) {
            $table->dropColumn('img'); // qui scrivo il comando per rimuovere la colonna 'img' dalla tabella 'directors'
        });
    }
};
