<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Company extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'company';

    protected $fillable = [
        'name', 
        'company_name', 
        'email', 
        'password', 
        'mobile', 
        'website', 
        'location',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
