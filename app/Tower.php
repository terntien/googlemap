<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    protected $fillable = [
        'tower_img',
        'tower_sending',
        'tower_typeleaf',
        'tower_parish',
        'tower_district',
        'tower_pravince',
        'tower_code',
        'LATDEG',
        'LONGDEG',
        'tower_customer',
        'tower_network',
        'tower_license_code',
        'tower_license_date'

    ];
}
