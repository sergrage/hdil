<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class FillProfileRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname'  => 'nullable|string|alpha|max:255|min:2',
            'lastname' => 'nullable|string|alpha|max:255|min:2',
            'bio' => 'min:50|nullable',
            'facebook' => 'url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i|nullable',
            'twitter' => 'url|regex:/http(?:s):\/\/(?:www\.)twitter\.com\/.+/i|nullable',
            'instagram' => 'url|regex:/http(?:s):\/\/(?:www\.)instagram\.com\/.+/i|nullable',
            'linkedin' => 'url|regex:/http(?:s):\/\/(?:www\.)linkedin\.com\/.+/i|nullable',
            'avatar' => 'image|nullable',
            'policy' => 'required',
         ];
    }
}
