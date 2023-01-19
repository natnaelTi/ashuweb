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
            'organisation' => 'Alle School of Fine Arts and Design | AAU',
            'year' => 2022,
            'location' => 'Addis Ababa, Ethiopia',
            'user_id' => 1
        ]);
    }
}
