<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_profile';

    protected $fillable = [
        'name',
        'history',
        'visi',
        'misi',
        'logo',
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
