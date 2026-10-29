<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category',
        'width_m',
        'depth_m',
        'height_m',
        'creator',
        'license',
        'status',
    ];
}