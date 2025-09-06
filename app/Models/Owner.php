<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
     protected $fillable = ['user_id','documents'];

       public function user() {
        return $this->belongsTo(User::class);
    }

     public function salons() {
        return $this->hasMany(Salon::class);
    }
}