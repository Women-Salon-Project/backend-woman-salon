<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentService extends Model
{
    protected $fillable = [
        'appointment_id',
        'service_id',
        'employee_id',
        'transaction_id',
        'price',
        'commission_amount',
        'duration_minutes',
        'status',
        'notes',
        'started_at',
        'completed_at',
    ];

      public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
