<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'salon_id',
        'category_id',
        'name',
        'name_ar',
        'sku',
        'barcode',
        'brand',
        'cost_price',
        'selling_price',
        'reorder_level',
        'reorder_quantity',
        'unit',
        'image_url',
        'images',
        'is_active',
    ];
    public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'category_id');
    }
}
