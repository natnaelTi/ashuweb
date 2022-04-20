<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Ashenafe Mestika',
            'email' => 'admin@ashenafemestika.com',
            'password' => Hash::make('secret'),
            'bio' => 'Ashenafe Mestika is a visual artist.',
            'statement' => 'No up-to-date artist statement has been found for Ashenafe Mestika.',
        ]);
    }
}
