<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //LUEGO REVISAR ACA POR ROLES Y PERMISOS
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
            'name' => 'required|string|max:15|unique:products',
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
            'price.max' => 'Solo se permiten 15 caracteres',

            'stock.required' => 'El campo stock es requerido',
            'stock.string' => 'El valor no es correcto',
            'stock.max' => 'Solo se permiten 15 caracteres',

            'category_id.required' => 'El campo categoria es requerido',
            'category_id.string' => 'El valor no es correcto',
            'category_id.max' => 'Solo se permiten 15 caracteres'
        ];
    }
}
