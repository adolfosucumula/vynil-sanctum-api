<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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

            'avatar.*' => 'bail|nullable|file|mimes:png,jpg,jpeg|max:5000'
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
        'avatar.file' => 'Required file types: PNG, JPG, JPEG.',
        'avatar.mimes' => 'Required file types: PNG, JPG, JPEG.',
        ];
    }
}
