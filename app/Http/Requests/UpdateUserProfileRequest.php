<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules =  [
            'name' => 'string',
            'username' => 'string|alpha_dash',
            'email' => 'email'
        ];

        if ($this->input('username') != Auth::user()->username) {
            $rules['username'] = "required|unique:users|string|alpha_dash";
        }
        
        if ($this->input('email') != Auth::user()->email) {
            $rules['email'] = "required|unique:users|email";
        }

        return $rules;
    }
}
