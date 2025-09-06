<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'user_id',
        'salon_id',
        'branch_id',
        'employee_code',
        'position',
        'base_salary',
        'employment_type',
        'hired_at',
        'terminated_at',
        'termination_reason',
        'documents',
        'is_active',
    ];

      public function user() {
        return $this->belongsTo(User::class);
    }

    public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function branch() {
        return $this->belongsTo(SalonBranch::class);
    }

    public function salaries() {
        return $this->hasOne(EmployeeSalary::class);
    }

    public function advances() {
        return $this->hasMany(EmployeeAdvance::class);
    }

    public function commissions() {
        return $this->hasMany(Commission::class);
    }

    public function appointmentServices() {
        return $this->hasMany(AppointmentService::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function soldProducts() {
        return $this->hasMany(TransactionProducts::class);
    }

    public function favorites() {
        return $this->hasMany(CustomerFavourite::class);
    }

    public function reports() {
        return $this->hasMany(Report::class, 'generated_by');
    }
}