<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBukuRequest extends FormRequest
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
            'judul' => 'required',
            'tahun_terbit' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'stok' => 'nullable',
            'cover.*' => 'nullable',
            'cover' => 'nullable|array|min:1',
            'deskripsi' => 'required',
        ];
        // if ($this->input('judul') != $this->buku->judul) {
        //     $rules['judul'] = "required|unique:bukus";
        // }

        return $rules;
    }
}
