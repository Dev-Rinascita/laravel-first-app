<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $movies = Movie::with(['director', 'categories'])->orderBy('created_at', 'desc');
        $itemPerPage = $request->input('items', 5); // usa 5 come valore predefinito se 'items' è null
        $itemPerPage = $itemPerPage <= 5 ? $itemPerPage : 5; // limita a massimo 5

        return $this->handleFormatResponse($request, $movies, $itemPerPage, 'movies.index');
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
        $title = $request->input('title');
        $cover = $request->input('cover');
        $director = $request->input('director');
        $description = $request->input('description');
        $year = $request->input('year');

        // qui potresti salvare i dati nel database, ad esempio usando un modello Movie
        Movie::create([
            'title' => $title,
            'cover' => $cover,
            'director' => $director,
            'description' => $description,
            'year' => $year
        ]);

        return redirect()->route('movies.index')->with('success', 'Film creato con successo!');
        // reindirizza alla lista dei film con un messaggio di successo
        // -> redirect() è un metodo di Laravel che permette di reindirizzare l'utente a una rotta specifica
        // -> route('movies.index') indica la rotta 'movies.index' che mostra la lista dei film
        // -> with('success', 'Film creato con successo!') aggiunge un messaggio di sessione che può essere visualizzato nella vista
        // -> il messaggio di successo sarà accessibile nella vista tramite la variabile di sessione 'success'
        // // puoi visualizzarlo nella vista usando @if(session('success')) ... @endif
        // // ad esempio, puoi mostrare il messaggio di successo in un alert nella vista
        // // <div class="alert alert-success">{{ session('success') }}</div>
        // // questo messaggio sarà visibile solo per un breve periodo dopo il reindirizz
        // // e scomparirà alla prossima richiesta
        // // questo è utile per mostrare feedback all'utente dopo un'azione come la creazione di un film


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::with(['director', 'categories'])->where('id', $id);

        return $this->handleFormatResponse(request(), $movie, 1, 'movies.show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id); // recupera il film dal database usando l'ID

        return view('movies.show', compact('movie')); // restituisce la vista per modificare un film esistente
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateMovieRequest $request, string $id)
    {
        $movie = Movie::findOrFail($id); // recupera il film dal database usando l'ID

        $title = $request->input('title');
        $cover = $request->input('cover');
        $director = $request->input('director');
        $description = $request->input('description');
        $year = $request->input('year');

        // aggiorna i campi del film con i dati della richiesta
        $movie->update([
            'title' => $title,
            'cover' => $cover,
            'director' => $director,
            'description' => $description,
            'year' => $year
        ]);

        return redirect()->route('movies.index')->with('success', 'Film aggiornato con successo!');
        // reindirizza alla lista dei film con un messaggio di successo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id); // recupera il film dal database usando l'ID

        $movie->delete(); // elimina il film dal database

        return redirect()->route('movies.index')->with('success', 'Film eliminato con successo!');
    }

    /**
     * Gestisce la risposta in base al formato richiesto
     */
    private function handleFormatResponse(Request $request, $query, int $itemPerPage, string $viewName, $id = null)
    {
        switch ($request->input('format')) {
            case 'json':
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                return response()->json($id ? new MovieResource($data) : MovieResource::collection($data));

            case 'html':
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                $variableName = $id ? 'movie' : 'movies';
                return view($viewName, [$variableName => $data]);

            case 'csv':
                $data = $id ? collect([$query->firstOrFail()]) : $query->get();
                return $this->generateCsvResponse($data);

            default:
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                $variableName = $id ? 'movie' : 'movies';
                return view($viewName, [$variableName => $data]);
        }
    }

    /**
     * Genera la risposta CSV
     */
    private function generateCsvResponse($movies)
    {
        $csvContent = "Title,Cover,Director,Description,Year\n";
        foreach ($movies as $movie) {
            $director = $movie->director ? $movie->director->name : 'N/A';
            $csvContent .= "\"{$movie->title}\",\"{$movie->cover}\",\"{$director}\",\"{$movie->description}\",\"{$movie->year}\"\n";
        }

        return response($csvContent)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename="movies.csv"');
    }
}
