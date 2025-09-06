<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailLog extends Model
{
    protected $fillable = [
        'salon_id',
        'email_address',
        'subject',
        'message',
        'attachments',
        'status',
        'gateway_provider',
        'sent_at',
        'delivered_at',
        'opened_at',
        'failure_reason',
        'created_at',
    ];

      public function salon() {
        return $this->belongsTo(Salon::class);
    }
}
