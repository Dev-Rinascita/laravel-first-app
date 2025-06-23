<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // prendere i dati dei film dal database (in questo caso, li stiamo simulando con un array)
        $movies = [
            [
                'title' => 'Inception',
                'cover' => 'https://m.media-amazon.com/images/I/81OF+X3jx0L._UF1000,1000_QL80_.jpg',
                'director' => 'Christopher Nolan',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
                'year' => 2010
            ],
            [
                'title' => 'The Matrix',
                'cover' => 'https://m.media-amazon.com/images/I/81iXYexXtsL._AC_UF1000,1000_QL80_.jpg',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'year' => 1999
            ],
            [
                'title' => 'Interstellar',
                'cover' => 'https://pad.mymovies.it/filmclub/2014/01/001/locandina.jpg',
                'director' => 'Christopher Nolan',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'year' => 2014
            ],
            [
                'title' => 'The Godfather',
                'cover' => 'https://m.media-amazon.com/images/M/MV5BNGEwYjgwOGQtYjg5ZS00Njc1LTk2ZGEtM2QwZWQ2NjdhZTE5XkEyXkFqcGc@._V1_QL75_UY281_CR4,0,190,281_.jpg',
                'director' => 'Francis Ford Coppola',
                'description' => 'An organized crime dynasty\'s aging patriarch transfers control of his clandestine empire to his reluctant son.',
                'year' => 1972
            ]
        ];

        // e passarli alla vista
        // return view('movies.index', [
        //     'movies' => $movies // la chiave 'movies' sarà accessibile nella vista come $movies
        // ]);

        return view('movies.index', compact('movies')); // un altro modo per passare i dati alla vista
        // in questo caso, la variabile $movies sarà accessibile nella vista con lo stesso nome
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create'); // restituisce la vista per creare un nuovo film
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMovieRequest $request)
    {
        // dd($request->all()); // per ora, mostriamo i dati inviati dal form

        $title = $request->input('title');
        $cover = $request->input('cover');
        $director = $request->input('director');
        $description = $request->input('description');
        $year = $request->input('year');

        dd($title, $cover, $director, $description, $year); // mostra i dati del film inviati dal form
        // qui potresti salvare i dati nel database, ad esempio usando un modello Movie
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
