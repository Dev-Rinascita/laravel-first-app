<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [ // quali sono i campi che possono essere riempiti in modo massivo
        'director_id', // foreign key per il regista
        'title',
        'cover',
        'description',
        'year'
    ];

    // un film può appartenere a un solo director
    public function director()
    {
        return $this->belongsTo(Director::class); // qui sto dicendo che un film appartiene a un regista
    }

    // un film può appartenere a più categorie
    public function categories()
    {
        return $this->belongsToMany(Category::class); // qui sto dicendo che un film può appartenere a più categorie
    }
}
