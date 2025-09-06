<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'appointment_number',
        'salon_id',
        'branch_id',
        'customer_id',
        'assigned_employee_id',
        'appointment_date',
        'start_time',
        'end_time',
        'status',
        'final_total',
        'paid_amount',
        'payment_status',
        'notes',
        'cancellation_reason',
        'cancelled_at',
        'cancelled_by',
    ];

        public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function branch() {
        return $this->belongsTo(SalonBranch::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function assignedEmployee() {
        return $this->belongsTo(Employee::class, 'assigned_employee_id');
    }

    public function services() {
        return $this->hasMany(AppointmentService::class);
    }

    public function transaction() {
        return $this->hasOne(Transaction::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
