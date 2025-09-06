<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsLog extends Model
{
     protected $fillable = [
        'salon_id',
        'phone_number',
        'message',
        'status',
        'gateway_provider',
        'gateway_message_id',
        'cost',
        'sent_at',
        'delivered_at',
        'failure_reason',
        'created_at',
    ];
}