<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
       protected $fillable = [
        'code',
        'salon_id',
        'name',
        'type',
        'value',
        'max_discount_amount',
        'valid_from',
        'valid_to',
        'usage_limit',
        'times_used',
        'is_active',
    ];
      public function salon() {
        return $this->belongsTo(Salon::class);
    }
}
