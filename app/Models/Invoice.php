<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
        protected $fillable = [
        'transaction_id',
        'salon_id',
        'branch_id',
        'invoice_number',
        'qr_code',
        'invoice_date',
        'subtotal',
        'discount_id',
        'tax_amount',
        'total_amount',
        'payment_id',
        'zatca_data',
        'pdf_url',
    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function branch()
    {
        return $this->belongsTo(SalonBranch::class, 'branch_id');
    }

    public function discount()
    {
        return $this->belongsTo(DiscountCode::class, 'discount_id');
    }


    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }


}
