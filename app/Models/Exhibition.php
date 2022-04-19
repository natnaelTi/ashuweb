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
        'year',
        'type',
        'description',
        'installation_views'
    ];

    /**
     * Get the artworks for the exhibition
     */
    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
