<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|unique:categories|max:255',
            'slug' => 'required|string|unique:categories|max:255',
            'parent' => 'nullable|integer|exists:categories,id',
        ];
    }
}
