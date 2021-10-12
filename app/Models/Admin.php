<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id', 'name', 'username', 'password', 'role'
    ];
}
