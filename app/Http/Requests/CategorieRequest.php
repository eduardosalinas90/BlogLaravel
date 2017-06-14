<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;



class CategorieRequest extends Request
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
            'name'=>'min:3|max:100|unique:categories|required'
        ];
    }

    public function messages()
        {
            return [
                'name.unique' => 'El Nombre de esta categoria ya esta registrada',
                'name.min' => 'El Nombre de la categoria debe se mayor o igual a 3 caracteres',
                'name.max' => 'El Nombre de la categoria debe se maximo a 100 caracteres'
            ];
    }


}
