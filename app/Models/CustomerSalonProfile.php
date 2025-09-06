<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerSalonProfile extends Model
{
    protected $fillable = [
        'customer_id',
        'salon_id',
        'preferences',
        'last_visit_at',
        'total_spent',
        'total_visits',
    ];
     public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function salon() {
        return $this->belongsTo(Salon::class);
    }
}
