<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Birhanu Manaye',
            'email' => 'admin@birhanumanaye.com',
            'password' => Hash::make('birhanu.manaye.2023.secret'),
            'dob' => Carbon::createFromFormat('Y-m-d', '1997-01-23'),
            'bio' => 'Birhanu Manaye is a visual artist (B. 1998) in Addis Ababa, Ethiopia. His journey as an artist started when his  older brother gave  the inspiration to draw during his teenage years, which led him enrolling in <a href="https://www.facebook.com/profile.php?id=100064190523268">Abyssinia Fine Arts and Modeling</a> in 2015. He began painting and drawing there, where he also obtained his certificate. After enrolling in <a href="http://www.aau.edu.et/cpva/academics/ale-school-of-fine-arts-and-design/overview/">Ale School of Fine Arts and Design (ASFAD)</a> in 2018 via the department of Printmaking, he furthered his skills and received his Bachelor\'s Degree in Fine Arts (BFA) with the highest honors in 2022. He works across a variety of media; including, <i><u>painting</u></i>, <i><u>drawing</u></i>, <i><u>printmaking</u></i> and <i><u>photography</u></i>. His surroundings have infused his works in both a spiritual and artistic sense. He claims that the unseen forces and ideas that motivate and surround us — forces that are invisible but always at work on our bodies and minds — are his sources of inspiration. The works of art serve as a testimony to how nature expresses itself and as investigations of the private moments shared only by the elements of earth, clouds, roots and veins are few to mention. In his art, he attempts to explore issues like the subconscious, the dreamy essence of the universe, and the complexity of the Universe.',
            'statement' => 'As a visual artist, he like experimenting with a variety of media, such as painting, woodcut, linocut, drypoint print, and, most frequently, silkscreen printing. he look for and investigate new methods as he go along in his practice at all times.He resemble colors and vein forms as the world that he exist in on the canvas. The colors and vein forms are binders that he constantly sees in every living creature that exists in the real world as well as the illusionary world, which we cannot see directly but in which we all exist. Consequently, these colors and vein forms are poignant to my expression of the universe, which is both evidently seen and at the same time mysterious or hidden.The way one electrical stimulation system works is similar to how people interact with one another and with the rest of the universe.',
            'exhibitions' => 'NONE',
            'prs' => 'none',
            'filepath' => 'me.jpg',
            'bg' => 'bg.png',
            'mobile_bg' => 'mobile_bg.png'
        ]);
    }
}