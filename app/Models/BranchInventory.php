<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchInventory extends Model
{
        protected $fillable = [
        'product_id',
        //'branch_id',
        'current_stock',
        'reserved_stock',
        'minimum_stock',
        'average_cost',
        'last_counted_at',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
     public function branch() {
        return $this->belongsTo(SalonBranch::class);
    }
}
