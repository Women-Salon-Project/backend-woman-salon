<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
protected $fillable = [
        'name',
        'name_ar',
        'monthly_price',
        'yearly_price',
        'allows_sales',
        'max_branches',
        'is_active',
    ];

     public function subscription() {
        return $this->belongsTo(Subscription::class);
    }
}
