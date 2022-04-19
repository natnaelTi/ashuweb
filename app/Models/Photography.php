<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
    use HasFactory;

    protected  $fillable = [
        'title',
        'year',
        'ar_width',
        'ar_height',
        'camera',
        'iso',
        'sh_speed',
        'filepath'
    ];
}
