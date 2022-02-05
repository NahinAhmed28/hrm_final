<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequestValidation extends FormRequest
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
        if (Request::isMethod('post')){
            return [
                'name' => 'required|max:255',
                'email' => 'required|unique:users,email',
                'role_id' => 'required|numeric',
                'image' => 'nullable|image|mimes:jpeg,jpg,png',

            ];
        }else{
            return [
                'name' => 'required|max:255',
                'email' => [
                    'required',
                ],
                'role_id' => 'required|numeric',
                'image' => 'nullable|image|mimes:jpeg,jpg,png',
                'status' => 'required|numeric',
            ];
        }
    }
}
