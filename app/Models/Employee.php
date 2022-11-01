<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Employee extends Eloquent
{

    protected $table = 'employee';
    protected $fillable = [
        'profileCode',
        'wantedJobTitle',
        'firstName',
        'lastName',
        'email',
        'phone',
        'country',
        'city',
        'address',
        'postalCode',
        'drivingLicense',
        'nationality',
        'placeOfBirth',
        'dateOfBirth',
    ];

    protected $casts = [
        'dateOfBirth' => 'date:d-m-Y',
    ];
}
