<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {

    return view('homepage.welcome'); // questa funzione prende il file partendo dalla cartella resources/views/
        // e restituisce il file welcome.blade.php, qui non è necessario specificare l'estensione .blade.php
});

//usa UserController al metodo index per occuparti di questa rotta
Route::get('/users', [UserController::class, 'index']);


Route::get('/about', [AboutController::class, 'index']);
