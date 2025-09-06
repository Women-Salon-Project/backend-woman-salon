<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeAdvance extends Model
{
      protected $fillable = [
        'salon_id',
        'employee_id',
        'amount',
        'reason',
        'advance_date',
        'status'
    ];

    public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
