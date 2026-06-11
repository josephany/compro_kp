<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyLocation extends Model
{
    protected $table = 'company_location';

    protected $fillable = [
        'address',
        'phone',
        'email',
        'latitude',
        'longitude',
        'maps_embed'
    ];
}
