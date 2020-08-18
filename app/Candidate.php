<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    use Notifiable;

    protected $guard = 'candidates';
    protected $fillable = [
        'firstname', 'lastname', 'promotions', 'email', 'password', 'unpass', 'nohp', 'alamat', 'warga_negara', 'identitas', 'notif_lowongan', 'notif_peluang', 'notif_promosi', 'notif_profil', 'no_identitas'
    ];
    protected $hidden = ['password', 'remember_token'];
}
