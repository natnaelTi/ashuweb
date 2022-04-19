<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'width',
        'height',
        'meduim',
        'year',
        'type',
        'price',
        'description',
        'filepath'
    ];

    /**
     * Get the artwork in an exhibition
     */
    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }
}
