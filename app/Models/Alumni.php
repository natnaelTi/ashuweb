<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'organisation',
        'year',
        'location'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
