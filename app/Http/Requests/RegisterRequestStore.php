<?php

namespace App\Http\Requests;

// use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequestStore extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|email|max:255|unique:users',
            'phone' => 'bail|required|string',
            'password' => ['bail','required','string','confirmed',Password::min(6)->mixedCase()],
            // 'password_confirmation' =>'required|same:password'
        ];
    }
}
