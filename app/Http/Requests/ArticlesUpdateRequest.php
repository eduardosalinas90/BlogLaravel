<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticlesUpdateRequest extends Request
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
            'title'=>'min:8|max:70|required',
            'category_id'=>'required',
            'content'=>'min:60|required',

        ];
    }
}