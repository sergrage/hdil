<?php

namespace App\Http\Requests\Cabinet;

use Illuminate\Foundation\Http\FormRequest;

class CreateCardRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'  =>  'required|max:255|min:1',
            'content' =>  'required|min:255',
            'category_id' =>  'required|not_in:0',
        ];
    }
}
