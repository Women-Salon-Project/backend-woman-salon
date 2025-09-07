<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStockMovementRequest extends FormRequest
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
            'salon_id'            => 'required|exists:salons,id',
            'branch_inventory_id' => 'required|exists:branch_inventories,id',
            'movement_type'       => 'required|in:in,out,adjustment',
            'quantity'            => 'required|integer|min:1',
            'reason'              => 'nullable|string|max:255',
            'reference_id'        => 'nullable|integer|min:1',
            'created_by'          => 'nullable|exists:users,id',
        ];
    }
}
