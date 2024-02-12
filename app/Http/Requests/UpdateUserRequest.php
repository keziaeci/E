<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $rules = [
            'nama' => 'required|string',
            'username' => 'required|string|alpha_dash',
            'email' => 'required|email',
            'password' => 'required'
        ];

        if ($this->input('username') != $this->user->username) {
            $rules['username'] = 'required|unique:users|string|alpha_dash';
        }

        if ($this->input('email') != $this->user->email) {
            $rules['email'] = 'required|unique:users|email';
        }

        return $rules;
    }
}
