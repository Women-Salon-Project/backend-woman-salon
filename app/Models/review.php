<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'customer_id',
        'salon_id',
        'appointment_id',
        'staff_id',
        'overall_rating',
        'service_rating',
        'cleanliness_rating',
        'value_rating',
        'comment',
        'staff_response',
        'status',
    ];

    public function salon() {
        return $this->belongsTo(Salon::class);
    }
}
