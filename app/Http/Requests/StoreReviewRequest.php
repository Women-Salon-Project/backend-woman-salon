<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
              'customer_id'        => 'required|exists:customers,id',
            'salon_id'           => 'required|exists:salons,id',
            'appointment_id'     => 'required|exists:appointments,id',
            'staff_id'           => 'required|exists:employees,id',

            'overall_rating'     => 'required|integer|min:1|max:5',
            'service_rating'     => 'required|integer|min:1|max:5',
            'cleanliness_rating' => 'required|integer|min:1|max:5',
            'value_rating'       => 'required|integer|min:1|max:5',

            'comment'            => 'nullable|string|max:1000',
            'staff_response'     => 'nullable|string|max:1000',

            'status'             => 'required|in:pending,approved,rejected',
        ];
    }
}