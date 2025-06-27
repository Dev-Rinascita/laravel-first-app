<?php

namespace App\View\Components\Director;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DirectorForm extends Component
{
    public $regista;
    /**
     * Create a new component instance.
     */
    public function __construct($regista)
    {
        $this->regista = $regista; // assegna il film passato al costruttore alla proprietà $movie
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.director.director-form');
    }
}
