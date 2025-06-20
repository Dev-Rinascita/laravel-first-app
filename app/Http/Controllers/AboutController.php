<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Qui puoi aggiungere la logica per recuperare i dati necessari per la pagina "About"
        // Ad esempio, potresti voler passare alcune informazioni alla vista

        $user = [
            'nome' => 'Pino',
            'cognome' => 'Silvestre',
            'email' => 'pino.silvestre@example.com'
        ];

        return view('about.index', [
            'user' => $user // Passa l'array $user alla vista
        ]); // Assicurati che il file about/index.blade.php esista nella cartella resources/views/about/
    }
}
