<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'code' => 'required|string|unique:products,code'
                .$this->route('product')->id.'|max:10',
            'name' => 'required|string|unique:products,name'
                .$this->route('product')->id.'|max:15',

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
