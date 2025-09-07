<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalonRequest extends FormRequest
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
             'owner_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'email' => 'required|email|unique:salons,email,' ,
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'tax_number' => 'required|string|max:50',
            'vat_number' => 'required|string|max:50',
            'logo_url' => 'nullable|string|max:255',
            'tax_certificate_url' => 'nullable|string|max:255',
            'vat_number_url' => 'nullable|string|max:255',
            'status' => 'in:pending,approved,subscriped,suspended',
            'trial_ends_at' => 'nullable|date',
        ];
    }
}