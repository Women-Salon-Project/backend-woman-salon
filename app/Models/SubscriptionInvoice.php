<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionInvoice extends Model
{
  protected $fillable = [
        'subscription_id',
        'invoice_number',
        'total_amount',
        'invoice_date',
        'due_date',
        'payment_method',
        'payment_details',
        'paid_at',
    ];
     public function subscription() {
        return $this->belongsTo(Subscription::class);
    }
}
