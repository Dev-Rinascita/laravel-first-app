<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $director = 'Mario Rossi';


        $directorData = [ 
            [
                'nome' => 'Mario',
                'age' => '50'
            ],
            [
                'nome' => 'Luigi',
                'age' => '45'
            ],
            [
                'nome' => 'Peach',
                'age' => '40'
            ]
        ];

        return view('directors.index', [ // qui sto passando alla vista i dati
            'director' => $director,
            'directors' => $directorData // la chiave 'users' sarà accessibile nella vista come $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
