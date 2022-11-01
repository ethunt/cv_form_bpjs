<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Reliese\Database\Eloquent\Model as Eloquent;

class User extends Authenticatable
{
    // use Eloquent;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'expired_password' => 'datetime',
        'last_login' => 'datetime',
    ];

    protected $hidden = [
        'id','password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
