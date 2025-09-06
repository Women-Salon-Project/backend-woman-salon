<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaitingList extends Model
{
    protected $fillable = [
        'salon_id',
        'branch_id',
        'customer_id',
        'preferred_services',
        'preferred_date',
        'preferred_time',
        'priority',
        'status',
        'notes',
        'expires_at',
    ];
}
