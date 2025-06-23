<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Permette a tutti gli utenti di fare questa richiesta
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|min:2',
            'cover' => 'required|url',
            'director' => 'required|string|max:255',
            'description' => 'required|string|max:1000|min:10',
            'year' => 'required|integer|min:1888|max:' . date('Y'), // Il primo film è stato girato nel 1888
        ];
    }
}
