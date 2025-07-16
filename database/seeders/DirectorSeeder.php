<?php

namespace Database\Seeders;

use App\Models\Director;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directors = [
            ['name' => 'Steven Spielberg', 'age' => 67],
            ['name' => 'Martin Scorsese', 'age' => 80],
            ['name' => 'Christopher Nolan', 'age' => 53],
            ['name' => 'Quentin Tarantino', 'age' => 60],
            ['name' => 'James Cameron', 'age' => 69],
            ['name' => 'Ridley Scott', 'age' => 85],
            ['name' => 'Tim Burton', 'age' => 65],
            ['name' => 'Peter Jackson', 'age' => 61],
            ['name' => 'David Fincher', 'age' => 61],
            ['name' => 'Greta Gerwig', 'age' => 40],
            ['name' => 'Bong Joon-ho', 'age' => 53],
            ['name' => 'Hayao Miyazaki', 'age' => 82],
            ['name' => 'Guillermo del Toro', 'age' => 59],
            ['name' => 'Sofia Coppola', 'age' => 52],
            ['name' => 'Spike Lee', 'age' => 66],
            ['name' => 'Francis Ford Coppola', 'age' => 84],
            ['name' => 'Woody Allen', 'age' => 87],
            ['name' => 'David Lynch', 'age' => 77],
            ['name' => 'Paul Thomas Anderson', 'age' => 53],
            ['name' => 'James Gunn', 'age' => 57],
            ['name' => 'J.J. Abrams', 'age' => 57],
            ['name' => 'Ron Howard', 'age' => 69],
            ['name' => 'M. Night Shyamalan', 'age' => 53],
            ['name' => 'Barry Jenkins', 'age' => 43],
            ['name' => 'Denis Villeneuve', 'age' => 56],
            ['name' => 'Lars von Trier', 'age' => 67],
        ];

        foreach ($directors as $director) {
            Director::create($director);
        }
    }
}
