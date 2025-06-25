<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [ // quali sono i campi che possono essere riempiti in modo massivo
        'title',
        'cover',
        'director',
        'description',
        'year'
    ];
}
