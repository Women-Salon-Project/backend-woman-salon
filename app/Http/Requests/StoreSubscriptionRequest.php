<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriptionRequest extends FormRequest
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
            'plan_id'        => 'required|exists:subscription_plans,id',
            'starts_at'      => 'required|date|before_or_equal:ends_at',
            'ends_at'        => 'required|date|after_or_equal:starts_at',
            'status'         => 'required|in:active,canceled,expired',
            'billing_cycle'  => 'required|string|max:50',
            'payment_details'=> 'nullable|json',
        ];
    }
}