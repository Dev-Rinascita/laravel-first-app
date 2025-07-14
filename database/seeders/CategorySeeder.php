<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory()->count(100)->create(); // Creates 10 categories using the factory

        // crea un array e poi fai la create di quell'array
        $categories = [
            ['name' => 'Action'],
            ['name' => 'Comedy'],
            ['name' => 'Drama'],
            ['name' => 'Horror'],
            ['name' => 'Sci-Fi'],
            ['name' => 'Romance'],
            ['name' => 'Thriller'],
            ['name' => 'Documentary'],
            ['name' => 'Animation'],
            ['name' => 'Adventure'],
        ];

        foreach ($categories as $category) {
            Category::create($category); // Crea ogni categoria nel database
        }
    }
}
