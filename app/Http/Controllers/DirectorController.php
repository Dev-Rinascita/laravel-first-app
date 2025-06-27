<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDirectorRequest;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // dd($request->all()); // qui puoi vedere i dati inviati dalla richiesta
        $search = $request->input('search'); // recupera il parametro di ricerca dalla richiesta
        $age = $request->input('age'); // recupera il parametro di età dalla richiesta

        $directorData = Director::query()
            ->when($search, function ($query, $search) { // il when è un metodo che permette di eseguire una query condizionale
                // se il parametro di ricerca è presente, filtra i registi per nome
                return $query->where('name', 'like', '%' . $search . '%'); // filtra i registi per nome
            })
            ->when($request->input('age'), function ($query, $age) { // filtra per età se il parametro è presente
                return $query->where('age', '>', $age); // filtra i registi per età
            })
            ->orderBy('name', 'asc') // ordina i registi per nome in ordine ascendente
            ->get(); // recupera tutti i registi filtrati

        return view('directors.index', [ // qui sto passando alla vista i dati
            'directors' => $directorData // la chiave 'users' sarà accessibile nella vista come $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDirectorRequest $request)
    {
        // dd($request->all()); // qui puoi vedere i dati inviati dal form

        $name = $request->input('name');
        $age = $request->input('age');

        // qui potresti salvare i dati nel database, ad esempio usando un modello Director
        Director::create([
            'name' => $name,
            'age' => $age
        ]);

        return redirect()->route('directors.index')->with('success', 'Regista creato con successo!');
        // reindirizza alla lista dei registi con un messaggio di successo
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
