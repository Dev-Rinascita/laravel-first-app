<?php

namespace App\View\Components\Director;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DirectorCard extends Component
{

    public $direttore;

    /**
     * Create a new component instance.
     */
    public function __construct($direttore)
    {
        $this->direttore = $direttore;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.director.director-card');
    }
}
