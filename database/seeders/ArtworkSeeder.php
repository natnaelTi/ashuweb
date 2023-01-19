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
            'title' => 'Internal Conflict #04',
            'width' => 30,
            'height' => 45,
            'medium' => 'Dryprint and Woodcut',
            'year' => 2022,
            'type' => 'woodcut',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Internal Conflict 4.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #18',
            'width' => 57,
            'height' => 80,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 18.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #16',
            'width' => 57,
            'height' => 80,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 16.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #14',
            'width' => 57,
            'height' => 80,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 14.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #13',
            'width' => 57,
            'height' => 80,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 13.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #12',
            'width' => 57,
            'height' => 80,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 12.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #11',
            'width' => 57,
            'height' => 80,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 11.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #09',
            'width' => 57,
            'height' => 80,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 9.jpg'
        ]);

        Artwork::create([
            'title' => 'Internal Conflict #03',
            'width' => 42,
            'height' => 59,
            'medium' => 'Woodcut',
            'year' => 2022,
            'type' => 'woodcut',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Internal Conflict 3.jpg'
        ]);

        Artwork::create([
            'title' => 'Internal Conflict #02',
            'width' => 42,
            'height' => 59,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Internal Conflict 2.jpg'
        ]);

        Artwork::create([
            'title' => 'Internal Conflict #01',
            'width' => 97,
            'height' => 145,
            'medium' => 'Screenprint on Paper',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Internal Conflict 1.jpg'
        ]);

        Artwork::create([
            'title' => 'Hidden Interaction #02',
            'width' => 110,
            'height' => 130,
            'medium' => 'Screenprint on Canvas',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Hidden Interaction 2.jpg'
        ]);

        Artwork::create([
            'title' => 'Simple Interaction #8',
            'width' => 110,
            'height' => 130,
            'medium' => 'Screenprint on Canvas',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Simple Interaction 8.jpg'
        ]);

        Artwork::create([
            'title' => 'Hidden Interaction #01',
            'width' => 110,
            'height' => 130,
            'medium' => 'Screenprint on Canvas',
            'year' => 2022,
            'type' => 'screenprint',
            'price' => 0,
            'description' => 'none',
            'filepath' => 'Hidden Interaction 1.jpg'
        ]);
    }
}
