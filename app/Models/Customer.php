<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_code',
        'allergy_type',
        'skin_type',
        'hair_type',
        'referral_source',
        'referred_by',
        'marketing_consent',
        'medical_notes',
    ];
        public function user() {
        return $this->belongsTo(User::class);
    }

    public function salonProfiles() {
        return $this->hasMany(CustomerSalonProfile::class);
    }

    public function favorites() {
        return $this->hasMany(CustomerFavourite::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }

    public function waitingLists() {
        return $this->hasMany(WaitingList::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
