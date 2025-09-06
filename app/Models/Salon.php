<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = [  'owner_id',
        'name',
        'name_ar',
        'email',
        'email_verified_at',
        'street',
        'city',
        'state',
        'tax_number',
        'vat_number',
        'logo_url',
        'tax_certificate_url',
        'vat_number_url',
        'status',
        'trial_ends_at'];

           public function owner() {
        return $this->belongsTo(Owner::class);
    }

    public function subscriptionPlan() {
        return $this->belongsTo(SubscriptionPlan::class);
    }

    public function branches() {
        return $this->hasMany(SalonBranch::class);
    }

    public function subscriptions() {
        return $this->hasMany(Subscription::class);
    }

    public function employees() {
        return $this->hasMany(Employee::class);
    }

    public function customers() {
        return $this->hasMany(CustomerSalonProfile::class);
    }

    public function servicesCategories() {
        return $this->hasMany(ServiceCategory::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function discountCodes() {
        return $this->hasMany(DiscountCode::class);
    }

    public function discountCoupons() {
        return $this->hasMany(DiscountCoupon::class);
    }

    public function productsCategories() {
        return $this->hasMany(ProductCategories::class);
    }

    public function suppliers() {
        return $this->hasMany(Supplier::class);
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }


}
