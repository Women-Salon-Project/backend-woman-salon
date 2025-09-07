<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
               return [
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email|unique:users' ,
            'phone'        => 'required|string|max:20|unique:users' ,
            'password'     => 'required|string|min:8|confirmed' ,
            'avatar_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cover_image'  => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
            'gender'       => 'required|in:male,female,other',
            'birthday'     => 'required|date|before:today',
            'street'       => 'required|string|max:255',
            'city'         => 'required|string|max:255',
            'state'        => 'required|string|max:255',
            'nationality'  => 'required|string|max:100',
            'status'       => 'required|in:pending,active,suspended',
        ];
    }
}
