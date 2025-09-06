<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCoupon extends Model
{
    protected $fillable = [
        'salon_id',
        'code',
        'name',
        'name_ar',
        'discount_type',
        'discount_value',
        'minimum_amount',
        'maximum_discount',
        'applicable_services',
        'applicable_products',
        'valid_from',
        'valid_to',
        'usage_limit_per_customer',
        'total_usage_limit',
        'times_used',
        'is_active',
    ];
         public function user()
     {
         return $this->belongsTo(Salon::class);
     }

}
