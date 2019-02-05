<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

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
            'facebook' => ['regex:/((?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*))/', 'nullable'],
            'twitter' => ['regex:/((?:(?:http|https):\/\/)?(?:www.)?twitter.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*))/', 'nullable'],
            'instagram' => ['regex:/((?:(?:http|https):\/\/)?(?:www.)?instagram.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*))/', 'nullable'],
            'linkedin' => ['regex:/((?:(?:http|https):\/\/)?(?:www.)?linkedin.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*))/', 'nullable'],
            'policy' => 'required',
         ];
    }
}
