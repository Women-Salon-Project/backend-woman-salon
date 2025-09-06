<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
      protected $fillable = [
        'salon_id',
        'plan_name',
        'price',
        'currency',
        'start_date',
        'end_date',
        'status',
        'features'
    ];

    public function salon() {
        return $this->belongsTo(Salon::class);
    }
}