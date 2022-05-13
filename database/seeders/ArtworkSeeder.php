<?php

namespace Database\Seeders;

use App\Models\Artwork;
use Illuminate\Database\Seeder;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Artwork::create([
            'title' => 'Lonliness',
            'width' => 145,
            'height' => 75,
            'medium' => 'acrylic',
            'year' => 2013,
            'type' => 'painting',
            'price' => 320,
            'description' => 'none',
            'filepath' => 'none.png'
        ]);

        Artwork::create([
            'title' => 'Wild Fire',
            'width' => 233,
            'height' => 98,
            'medium' => 'acrylic',
            'year' => 2013,
            'type' => 'painting',
            'price' => 1200,
            'description' => 'none',
            'filepath' => 'none.png'
        ]);

        Artwork::create([
            'title' => 'Trace of a Moment',
            'width' => 60,
            'height' => 60,
            'medium' => 'acrylic',
            'year' => 2017,
            'type' => 'drawing',
            'price' => 400,
            'description' => 'none',
            'filepath' => 'none.png'
        ]);
    }
}
