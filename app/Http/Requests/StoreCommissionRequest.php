<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommissionRequest extends FormRequest
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
            'salon_id'       => 'required|exists:salons,id',
            'employee_id'    => 'required|exists:employees,id',
            'transaction_id' => 'required|exists:transactions,id',
            'service_id'     => 'nullable|exists:services,id',
            'amount'         => 'required|numeric|min:0',
            'percentage'     => 'nullable|numeric|min:0|max:100',
            'calculated_at'  => 'nullable|date',
        ];
    }
}
