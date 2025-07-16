<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DirectorResource;
use App\Http\Requests\CreateDirectorRequest;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $age = $request->input('age');

        $directorData = Director::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->when($request->input('age'), function ($query, $age) {
                return $query->where('age', '>', $age);
            })
            ->orderBy('name', 'asc');

        return $this->handleFormatResponse($request, $directorData, 5, 'directors.index');
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
        $director = Director::with('movies.categories')->where('id', $id);

        return $this->handleFormatResponse(request(), $director, 1, 'directors.show', $id);
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

    /**
     * Gestisce la risposta in base al formato richiesto
     */
    private function handleFormatResponse(Request $request, $query, int $itemPerPage, string $viewName, $id = null)
    {
        switch ($request->input('format')) {
            case 'json':
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                return response()->json($id ? new DirectorResource($data) : DirectorResource::collection($data));

            case 'html':
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                $variableName = $id ? 'director' : 'directors';
                return view($viewName, [$variableName => $data]);

            case 'csv':
                $data = $id ? collect([$query->firstOrFail()]) : $query->get();
                return $this->generateCsvResponse($data);

            default:
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                $variableName = $id ? 'director' : 'directors';
                return view($viewName, [$variableName => $data]);
        }
    }

    /**
     * Genera la risposta CSV
     */
    private function generateCsvResponse($directors)
    {
        $csvContent = "Name,Age\n";
        foreach ($directors as $director) {
            $csvContent .= "\"{$director->name}\",\"{$director->age}\"\n";
        }

        return response($csvContent)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename="directors.csv"');
    }
}
