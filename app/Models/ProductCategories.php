<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
     protected $fillable = [
        'salon_id',
        'name',
        'name_ar',
        'description',
        'description_ar',
        'image_url',
        'sort_order',
        'is_active',
    ];
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }

}