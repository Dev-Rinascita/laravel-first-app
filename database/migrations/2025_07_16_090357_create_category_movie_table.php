<?php

use App\Models\Category;
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
        Schema::create('category_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // uso la forma contratta per scrivere la foreign key
                                                                                 // uso la notazione con il model al singolare_campo_id
                                                                                 // ad esempio per category_id laravel capisce che si tratta della tabella categories
                                                                                 // con riferimento alla colonna id
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_movie');
    }
};
