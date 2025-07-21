<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = [
        'name',
        'age'
    ];

    // un director può avere molti film, cioè l'id del regista può essere presente
    // in diverse righe della tabella dei film
    public function movies()
    {
        return $this->belongsToMany(Movie::class); // qui sto dicendo che un regista può avere molti film
    }
}
