<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;

Route::get('/', function () {

    return view('homepage.welcome'); // questa funzione prende il file partendo dalla cartella resources/views/
        // e restituisce il file welcome.blade.php, qui non è necessario specificare l'estensione .blade.php
})->name('homepage'); // aggiungi il nome della rotta per poterla usare in redirect



//usa UserController al metodo index per occuparti di questa rotta
Route::get('/users', [UserController::class, 'index'])->name('users.index'); // aggiungi il nome della rotta per poterla usare in redirect

Route::get('/about', [AboutController::class, 'index'])->name('about.index'); // aggiungi il nome della rotta per poterla usare in redirect



// MOVIES
Route::controller(MovieController::class)->group(function () { // qui raggruppiamo le rotte per controller

    Route::get('/movies', 'index')->name('movies.index'); // aggiungi il nome della rotta per poterla usare in redirect

    Route::get('/movies/create', 'create')->name('movies.create');

    Route::post('/movies', 'store')->name('movies.store');

    Route::get('/movies/{id}', 'show')->name('movies.show'); // aggiungi il nome della rotta per poterla usare in redirect

    Route::get('/movies/{id}/edit', 'edit')->name('movies.edit'); // aggiungi il nome della rotta per poterla usare in redirect

    Route::put('/movies/{id}', 'update')->name('movies.update'); // aggiungi il nome della rotta per poterla usare in redirect

    Route::delete('/movies/{id}', 'destroy')->name('movies.destroy'); // aggiungi il nome della rotta per poterla usare in redirect

});



// DIRECTORS
Route::group(['prefix' => 'directors'], function () { // qui puoi definire le rotte che iniziano con /directors (uso il prefix per raggruppare le rotte)

    Route::get('/', [DirectorController::class, 'index'])->name('directors.index'); // aggiungi il nome della rotta per poterla usare in redirect

    Route::get('/create', [DirectorController::class, 'create'])->name('directors.create');

    Route::post('/', [DirectorController::class, 'store'])->name('directors.store');

    Route::get('/{id}/edit', [DirectorController::class, 'edit'])->name('directors.edit');

    Route::put('/{id}', [DirectorController::class, 'update'])->name('directors.update');

    Route::delete('/{id}', [DirectorController::class, 'destroy'])->name('directors.destroy');

});
