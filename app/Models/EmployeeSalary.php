<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
 protected $fillable = [
        'employee_id',
        'month',
        'year',
        'base_salary',
        'commission_earned',
        'advances',
        'deductions',
        'net_salary',
        'status',
        'paid_at',
        'notes',
    ];
     public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function processedBy() {
        return $this->belongsTo(User::class, 'processed_by');
    }

}