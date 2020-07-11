<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    protected $table = 'candidates';
    protected $fillable = [
        'firstname', 'lastname', 'promotions', 'email', 'password', 'unpass'
    ];
}
