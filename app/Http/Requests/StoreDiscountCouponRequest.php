<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscountCouponRequest extends FormRequest
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
            'salon_id'                  => 'required|exists:salons,id',
            'code'                      => 'required|string|max:50|unique:discount_coupons,code',
            'coupon_name'               => 'required|string|max:255',
            'coupon_name_ar'            => 'required|string|max:255',
            'type'                      => 'required|in:invoice_percentage,invoice_fixed,customer_percentage,customer_fixed,product_percentage,product_fixed',
            'discount_value'            => 'required|numeric|min:0',
            'minimum_amount'            => 'nullable|numeric|min:0',
            'maximum_discount'          => 'nullable|numeric|min:0',
            'applicable_services'       => 'nullable|array',
            'applicable_products'       => 'nullable|array',
            'valid_from'                => 'nullable|date',
            'valid_to'                  => 'nullable|date|after_or_equal:valid_from',
            'usage_limit_per_customer'  => 'nullable|integer|min:1',
            'total_usage_limit'         => 'nullable|integer|min:1',
            'times_used'                => 'integer|min:0',
            'is_active'                 => 'boolean',
        ];
    }
}
