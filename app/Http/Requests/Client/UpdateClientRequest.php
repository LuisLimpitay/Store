<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'phone' => 'required|unique:clients,phone'
                .$this->route('client')->id.'|max:10',
            'email' => 'required|unique:clients|max:209'
                .$this->route('email')->id.'|max:20',
            'password' => 'required|min:8|max:16',


        ];
    }
    public  function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permiten hasta 20 caracteres',

            'last_name.required' => 'El campo apellido es requerido',
            'last_name.string' => 'El valor no es correcto',
            'last_name.max' => 'Solo se permiten hasta 20 caracteres',

            'phone.required' => 'El campo telefono celular es requerido',
            'phone.string' => 'El valor no es correcto',
            'phone.max' => 'Solo se permiten 10 caracteres',
            'phone.unique' => 'Ya se encuentra en uso',

            'email.required' => 'El campo email es requerido',
            'email.string' => 'El valor no es correcto',
            'email.max' => 'Solo se permiten hasta 20 caracteres',
            'email.unique' => 'Ya se encuentra en uso',

            'password.required' => 'El campo telefono celular es requerido',
            'password.min' => 'Debe ingresar mas de 8 caracteres',
            'password.max' => 'Debe ingresar hasta 8 caracteresa',

        ];
    }
}
