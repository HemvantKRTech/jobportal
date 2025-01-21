<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'candidate';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'gender',
        'eligibility',
    ];
}
