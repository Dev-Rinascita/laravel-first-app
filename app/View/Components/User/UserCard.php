<?php

namespace App\View\Components\User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserCard extends Component
{

    public $utente;

    /**
     * Create a new component instance.
     */
    public function __construct($utente)
    {
        $this->utente = $utente;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.user-card');
    }
}
