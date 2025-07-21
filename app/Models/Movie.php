<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [ // quali sono i campi che possono essere riempiti in modo massivo
        'title',
        'cover',
        'description',
        'year'
    ];

    // un film può appartenere a un solo director
    public function directors()
    {
        return $this->belongsToMany(Director::class); // qui sto dicendo che un film può appartenere a più registi
    }

    // un film può appartenere a più categorie
    public function categories()
    {
        return $this->belongsToMany(Category::class); // qui sto dicendo che un film può appartenere a più categorie
    }
}
