<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequests extends FormRequest
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

    public function rules()
    {
        return [
            'phone' => 'required|unique:clients,phone'
                .$this->route('client')->id.'max:10',
            'name' => 'required|unique:categories,name'
                .$this->route('client')->id.'max:15',

        ];
    }
    public  function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permiten hasta 15 caracteres',
        ];
    }
}
