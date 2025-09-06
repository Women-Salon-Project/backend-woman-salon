<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
     protected $fillable = [
        'order_number',
        'salon_id',
        'branch_id',
        'supplier_id',
        'order_date',
        'expected_delivery_date',
        'total_amount',
        'status',
        'payment_status',
        'notes',
        'created_by',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
     public function items()
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }

     public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function branch() {
        return $this->belongsTo(SalonBranch::class);
    }
}
