<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalonBranchRequest extends FormRequest
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
            'salon_id'         => 'required|exists:salons,id',
            'manager_id'       => 'nullable|exists:users,id',
            'name'             => 'required|string|max:150',
            'name_ar'          => 'required|string|max:150',
            'street'           => 'required|string|max:150',
            'city'             => 'required|string|max:100',
            'state'            => 'required|string|max:100',
            'phone'            => 'required|string|max:20|unique:salon_branches,phone',
            'phone_verified_at'=> 'nullable|date',
            'branch_cr_number' => 'required|string|max:50',
            'busines_hours'    => 'required|json',
            'is_main_branch'   => 'boolean',
            'is_active'        => 'boolean',
        ];
    }
}
