<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieForm extends Component
{
    public $film;
    /**
     * Create a new component instance.
     */
    public function __construct($film)
    {
        $this->film = $film; // assegna il film passato al costruttore alla proprietà $movie
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie.movie-form');
    }
}
