<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // проверяется уникальность в таблице categories
        // проверяется наличие в таблице categories данного id
        return [
            'name' => 'required|string|unique:categories|max:255',
            'slug' => 'required|string|unique:categories|max:255',
            'parent' => 'nullable|integer|exists:categories,id',
        ];
    }
}
