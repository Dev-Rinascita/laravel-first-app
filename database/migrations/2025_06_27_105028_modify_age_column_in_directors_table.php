<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // prima di eseguire la migration posso conformare i dati della colonna age a NOT NULL per esempio stabilendo che dove ho un null devo mettere 0
        DB::table('directors')->whereNull('age')->update(['age' => 0]); // Imposta age a 0 dove è NULL

        Schema::table('directors', function (Blueprint $table) {
            //Ad esempio qui voglio rendere NOT NULL il campo age e quindi uso la seguente migration
            $table->integer('age')->unsigned()->nullable(false)->change(); // Modifica la colonna 'age' per renderla NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('directors', function (Blueprint $table) {
            $table->integer('age')->unsigned()->nullable()->change(); // Ripristina la colonna 'age' come nullable
        });
    }
};
