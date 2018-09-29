<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatiable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatiable
{
    use Notifiable;

    protected $fillable = [
        'name', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
