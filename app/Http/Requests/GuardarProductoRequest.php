<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarProductoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'brand' => 'required',
            'color' => 'required',
            'price' => 'required'
        ];
    }

    public function mensajes()
    {
        return [
            'name.required' => 'El producto necesita un nombre',
            'brand.required' => 'El producto necesita una marca',
            'color.required' => 'El producto necesita un color',
            'price.required' => 'El producto necesita un precio'
        ];
    }
}
