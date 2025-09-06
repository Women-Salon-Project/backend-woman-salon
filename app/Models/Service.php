<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
       protected $fillable = [
        'salon_id','category_id','name','name_ar','description','description_ar',
        'price','duration_minutes','commission_rate',
        'image_url','images','is_active'
    ];

     public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function category() {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function appointmentServices() {
        return $this->hasMany(AppointmentService::class);
    }

    public function favorites() {
        return $this->hasMany(CustomerFavourite::class);
    }
}
