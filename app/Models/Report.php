<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
        protected $fillable = [
        'salon_id',
        'name',
        'report_type',
        'category',
        'parameters',
        'data',
        'file_path',
        'file_format',
        'generated_by',
        'generated_at',
        'expires_at',
        'created_at',
    ];
     public function user()
    {
        return $this->belongsTo(User::class, 'generated_by');
    }
    public function salon() {
        return $this->belongsTo(Salon::class);
    }
}