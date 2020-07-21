<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    use Notifiable;

    protected $guard = 'candidates';
    protected $fillable = [
        'firstname', 'lastname', 'promotions', 'email', 'password', 'unpass'
    ];
    protected $hidden = ['password', 'remember_token'];
}
