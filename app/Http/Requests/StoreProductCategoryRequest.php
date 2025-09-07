<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductCategoryRequest extends FormRequest
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
            'salon_id'        => 'required|exists:salons,id',
            'name'            => 'required|string|max:255',
            'name_ar'         => 'nullable|string|max:255',
            'description'     => 'nullable|string',
            'description_ar'  => 'nullable|string',
            'image_url'       => 'nullable|string|max:255',
            'sort_order'      => 'nullable|integer|min:0',
            'is_active'       => 'boolean',
        ];
    }
}