<?php

namespace Database\Seeders;

use App\Models\Alumni;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Alumni::create([
            'organisation' => 'Ale School of Fine Arts | AAU',
            'year' => 2016,
            'location' => 'Addis Ababa, Ethiopia',
            'user_id' => 1
        ]);
    }
}
