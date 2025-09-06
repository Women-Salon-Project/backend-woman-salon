<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerFavourite extends Model
{
    protected $fillable = [
        'customer_id',
        'salon_id',
        'favouritable_id',
        'favouritable_type'
    ];
    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function favouritable() {
        return $this->morphTo();
    }
}
