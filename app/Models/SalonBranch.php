<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalonBranch extends Model
{
     protected $fillable = [
        'salon_id',
        'manager_id',
        'name',
        'name_ar',
        'street',
        'city',
        'state',
        'phone',
        'phone_verified_at',
        'branch_cr_number',
        'business_hours',
        'is_main_branch',
        'is_active',
    ];

     public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function manager() {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function employees() {
        return $this->hasMany(Employee::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }

    public function inventory() {
        return $this->hasOne(BranchInventory::class);
    }

    public function purchaseOrders() {
        return $this->hasMany(PurchaseOrder::class);
    }

    public function waitingList() {
        return $this->hasMany(WaitingList::class);
    }
}