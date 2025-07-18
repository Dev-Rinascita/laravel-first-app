<?php

namespace App\View\Components\Director;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DirectorCard extends Component
{

    public $regista;

    /**
     * Create a new component instance.
     */
    public function __construct($regista)
    {
        $this->regista = $regista;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.director.director-card');
    }
}
