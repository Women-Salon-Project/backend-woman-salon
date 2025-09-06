<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
       'first_name',
       'last_name',
       'email',
       'phone',
       'password_hash',
        'role_id',
        'avatar_url',
        'cover_image_url',
        'status',
        'city',
        'nationality',
        'birth_date',
        'gender'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

     public function role() {
        return $this->belongsTo(Role::class);
    }

    public function ownerProfile() {
        return $this->hasOne(Owner::class);
    }

    public function employeeProfile() {
        return $this->hasOne(Employee::class);
    }

    public function customerProfile() {
        return $this->hasOne(Customer::class);
    }
}
