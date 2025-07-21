<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MigrateDirectorMovieData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-director-movie-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Inizio migrazione dati director_movie...');

        // Ottieni tutti i film che hanno un director_id
        $movies = DB::table('movies')
            ->whereNotNull('director_id')
            ->select('id as movie_id', 'director_id')
            ->get();

        if ($movies->isEmpty()) {
            $this->warn('Nessun film trovato con director_id.');
            return;
        }

        $insertedCount = 0;
        $skippedCount = 0;

        foreach ($movies as $movie) {
            // Controlla se la relazione esiste già
            $exists = DB::table('director_movie')
                ->where('director_id', $movie->director_id)
                ->where('movie_id', $movie->movie_id)
                ->exists();

            if (!$exists) {
                DB::table('director_movie')->insert([
                    'director_id' => $movie->director_id,
                    'movie_id' => $movie->movie_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                $insertedCount++;
            } else {
                $skippedCount++;
            }
        }

        $this->info("Migrazione completata!");
        $this->info("Record inseriti: {$insertedCount}");
        $this->info("Record saltati (già esistenti): {$skippedCount}");
    }
}
