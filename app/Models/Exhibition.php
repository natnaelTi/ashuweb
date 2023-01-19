<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'statement',
        'start_date',
        'end_date',
        'location',
        'type',
        'description',
        'installation_views',
        'filepath'
    ];

    /**
     * Get the artworks for the exhibition
     */
    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
