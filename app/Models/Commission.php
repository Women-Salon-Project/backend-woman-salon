<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
     protected $fillable = [
        'salon_id',
        'employee_id',
        'transaction_id',
        'service_id',
        'amount',
        'percentage',
        'calculated_at'
    ];

      public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
