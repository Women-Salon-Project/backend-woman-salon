<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriptionPlanRequest extends FormRequest
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
            'name'           => 'required|string|max:255',
            'name_ar'        => 'required|string|max:255',
            'monthly_price'  => 'required|numeric|min:0',
            'yearly_price'   => 'required|numeric|min:0',
            'allows_sales'   => 'boolean',
            'max_branches'   => 'required|integer|min:1',
            'is_active'      => 'boolean',
        ];
    }
}