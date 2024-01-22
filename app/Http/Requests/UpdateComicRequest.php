<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|max:200',
            'thumb' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'price' => 'required',
            'type' => 'required',
            'description' => 'nullable'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Inserisci il titolo',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'thumb.required' => 'Inserisci l\'immagine',
            'series.required' => 'Inserisci la serie',
            'sale_date.required' => 'Inserisci la data',
            'price.required' => 'Inserisci il prezzo',
            'type.required' => 'Inserisci la tipologia'
        ];
    }
}
