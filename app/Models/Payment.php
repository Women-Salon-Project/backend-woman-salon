<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transaction_id','amount','payment_method','reference_number','gateway_transaction_id',
        'payment_date','status','gateway_response','processing_fee'
    ];

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }
}
