<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Qui puoi aggiungere la logica per recuperare i dati necessari per la pagina "About"
        // Ad esempio, potresti voler passare alcune informazioni alla vista

        $user = User::find(13); // Recupera l'utente con ID 1, puoi modificare questo in base alle tue necessità

        return view('about.index', [
            'user' => $user // Passa l'array $user alla vista
        ]); // Assicurati che il file about/index.blade.php esista nella cartella resources/views/about/
    }
}
