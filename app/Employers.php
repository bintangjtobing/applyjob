<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employers extends Authenticatable
{
    protected $table = 'employers';
    protected $fillable = [
        'firstname', 'lastname', 'promotions', 'email', 'password', 'unpass'
    ];
}
