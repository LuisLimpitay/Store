<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
           
            'name' => 'required|string|unique:products,name',

            'stock' => 'required',
            'price' => 'required',
            'image' => 'nullable',

            'category_id' => 'required|exists:App\Models\Product,id'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permiten 15 caracteres',
            'name.unique' => 'Ya se encuentra el nombre ',

            'price.required' => 'El campo precio es requerido',
            'price.string' => 'El valor no es correcto',
            'price.max' => 'Solo se permiten 15 caracteres'
        ];
    }
}
