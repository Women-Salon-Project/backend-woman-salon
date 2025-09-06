<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $fillable = [
        'transaction_number',
        'salon_id',
        'branch_id',
        'customer_id',
        'employee_id',
        'appointment_id',
        'transaction_type',
        'transaction_date',
        'subtotal',
        'service_total',
        'product_total',
        'discount_amount',
        'tax_amount',
        'tip_amount',
        'total_amount',
        'payment_status',
        'notes',
        'is_refunded',
        'refunded_amount',
        'refunded_at',
        'refunded_by',
        'refund_reason'
    ];
       public function products() {
        return $this->hasMany(TransactionProducts::class);
    }
}