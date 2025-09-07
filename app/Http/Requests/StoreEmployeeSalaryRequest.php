<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeSalaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'employee_id'      => 'required|exists:employees,id',
        'month'            => 'required|integer|between:1,12',
        'year'             => 'required|integer|min:2000',
        'base_salary'      => 'required|numeric|min:0',
        'commission_earned'=> 'nullable|numeric|min:0',
        'advances'         => 'nullable|numeric|min:0',
        'deductions'       => 'nullable|numeric|min:0',
        'net_salary'       => 'required|numeric|min:0',
        'status'           => 'required|in:pending,approved,paid,canceled',
        'paid_at'          => 'nullable|date',
        'notes'            => 'nullable|string|max:1000',
        ];
    }
}
