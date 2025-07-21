<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\DirectorResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'cover' => $this->cover,
            'description' => $this->description,
            'year' => $this->year,
            'directors' => DirectorResource::collection($this->whenLoaded('directors')), // usa il resource DirectorResource per i registi
            'categories' => CategoryResource::collection($this->whenLoaded('categories')), // usa il resource CategoryResource per le categorie
        ];
    }
}
