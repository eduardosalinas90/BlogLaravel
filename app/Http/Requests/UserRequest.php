<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'min:4|max:120|required',
            'email'=>'min:4|max:120|required|unique:users',
            'password'=>'min:4|max:250|required',
        ];
    }

//     public function messages()
// {
//     return [
//         'name.min' => 'Campo Nombre debe ser minimo a 4 caracteres',
//         'name.max' => 'Campo Nombre debe ser Maximo a 120 caracteres',
//         'email.min' => 'Campo email debe ser Minimo a 4 caracteres',
//         'email.max' => 'Campo email debe ser Maximo a 120 caracteres',
//         'email.unique' => 'Este email ya es unsado por un usuario',
//         'password.min' => 'Campo Password debe ser minimo a 4 caracteres',
//         'password.max' => 'Campo Password  debe ser Maximo a 120 caracteres',


//     ];
// }
}
