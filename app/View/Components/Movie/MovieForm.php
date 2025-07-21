<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieForm extends Component
{
    public $film;
    public $categorie;
    public $registi;
    /**
     * Create a new component instance.
     */
    public function __construct($film, $categorie, $registi)
    {
        $this->film = $film;
        $this->categorie = $categorie;
        $this->registi = $registi;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie.movie-form');
    }
}
