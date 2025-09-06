<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
     protected $fillable = [
        'salon_id',
        'name',
        'contact_person',
        'phone',
        'email',
        'address',
        'tax_number',
        'credit_limit',
        'payment_terms',
        'is_active',
    ];
}