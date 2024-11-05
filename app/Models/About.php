<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable =  [
        'highlight',
        'about_desc',
        'about_poin',
        'leader_pict',
        'leader_name',
        'phone',
        'history',
        'brand',
        'vision',
        'mission',
        'address',
        'wa_sumatera',
        'wa_jawa',
        'email',
        'operational',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
    ];
}
