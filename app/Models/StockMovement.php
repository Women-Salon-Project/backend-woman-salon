<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
     protected $fillable = [
        'salon_id',
        'branch_inventory_id',
        'movement_type',
        'quantity',
        'reason',
        'reference_id',
        'created_by'
    ];
     public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function branchInventory() {
        return $this->belongsTo(BranchInventory::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
