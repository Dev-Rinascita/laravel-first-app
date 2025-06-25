<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {

    return view('homepage.welcome'); // questa funzione prende il file partendo dalla cartella resources/views/
        // e restituisce il file welcome.blade.php, qui non è necessario specificare l'estensione .blade.php
})->name('homepage'); // aggiungi il nome della rotta per poterla usare in redirect

//usa UserController al metodo index per occuparti di questa rotta
Route::get('/users', [UserController::class, 'index'])->name('users.index'); // aggiungi il nome della rotta per poterla usare in redirect


Route::get('/about', [AboutController::class, 'index'])->name('about.index'); // aggiungi il nome della rotta per poterla usare in redirect

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index'); // aggiungi il nome della rotta per poterla usare in redirect

Route::get('/movies/create', [MovieController::class, 'create']);

Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');

Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show'); // aggiungi il nome della rotta per poterla usare in redirect

Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit'); // aggiungi il nome della rotta per poterla usare in redirect

Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update'); // aggiungi il nome della rotta per poterla usare in redirect

Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy'); // aggiungi il nome della rotta per poterla usare in redirect
