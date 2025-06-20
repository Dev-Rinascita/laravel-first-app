<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = 'Mario Rossi';
        // In questo caso stiamo passando una variabile alla vista,
        // che sarà accessibile come $user

        $usersData = [ // questo è un array di utenti che vogliamo mostrare nella vista ma potrebbero essere presi dal database
            [
                'nome' => 'Mario',
                'cognome' => 'Rossi',
                'email' => 'mario.rossi@example.com'
            ],
            [
                'nome' => 'Luigi',
                'cognome' => 'Bianchi',
                'email' => 'luigi.bianchi@example.com'
            ],
            [
                'nome' => 'Anna',
                'cognome' => 'Verdi',
                'email' => 'anna.verdi@example.com'
            ],
            [
                'nome' => 'Giovanni',
                'cognome' => 'Neri',
                'email' => 'giovanni.neri@example.com'
            ]
        ];

        return view('users.index', [ // qui sto passando alla vista i dati
            'user' => $user,
            'users' => $usersData // la chiave 'users' sarà accessibile nella vista come $users
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
