<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    // una categoria può avere molti film, cioè l'id della categoria può essere presente
    public function movies()
    {
        return $this->belongsToMany(Movie::class); // qui sto dicendo che una categoria può avere molti film
    }

}
