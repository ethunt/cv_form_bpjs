<?php
namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Countries extends Eloquent
{
    protected $table = 'countries';
    protected $fillable = ['country','district','province','subDustrict'];

    protected $hidden = [
        'id',
    ];
}
