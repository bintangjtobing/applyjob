<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employers extends Authenticatable
{
    use Notifiable;
    protected $guard = 'employers';
    protected $fillable = [
        'firstname', 'lastname', 'promotions', 'email', 'password', 'unpass'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
