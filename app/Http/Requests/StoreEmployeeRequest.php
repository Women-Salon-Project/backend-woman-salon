<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'user_id'          => 'required|exists:users,id',
            'salon_id'         => 'required|exists:salons,id',
            'branch_id'        => 'required|exists:salon_branches,id',
            'employee_code'    => 'required|string|max:50|unique:employees,employee_code',
            'position'         => 'required|in:manager,service_employee,cashier',
            'base_salary'      => 'required|numeric|min:0',
            'employment_type'  => 'required|in:part_time,full_time',
            'hired_at'         => 'required|date',
            'terminated_at'    => 'nullable|date|after_or_equal:hired_at',
            'termination_reason' => 'nullable|string|max:255',
            'documents'        => 'nullable|array',
            'is_active'        => 'boolean',
        ];
    }
}
