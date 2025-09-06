<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeDeduction extends Model
{
    protected $fillable = [
        'salon_id',
        'employee_id',
        'amount',
        'type',
        'reason',
        'deduction_date',
        'signed_by',
        'notes',
    ];

      public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
