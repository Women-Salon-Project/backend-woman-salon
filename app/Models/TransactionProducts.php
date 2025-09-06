<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionProducts extends Model
{
      protected $fillable = [
        'transaction_id',
        'product_id',
        'employee_id',
        'quantity',
        'unit_price',
        'total_price',
        'commission_amount',
    ];

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }
}