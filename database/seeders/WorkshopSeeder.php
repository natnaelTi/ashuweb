<?php

namespace Database\Seeders;

use App\Models\Workshop;
use Illuminate\Database\Seeder;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Workshop::create([
            'title' => 'Expanding Perspective Through Art',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'start_date' => '2022-01-13',
            'end_date' => '2022-03-12',
            'location' => 'Alliance Ethio-Francaise, Addis Ababa, Ethiopia',
            'link' => 'none'
        ]);

        Workshop::create([
            'title' => 'Creative In-Design Project',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'start_date' => '2019-01-13',
            'end_date' => '2019-03-12',
            'location' => 'Alle School of Fine Arts and Design, Addis Ababa, Ethiopia',
            'link' => 'none'
        ]);

        Workshop::create([
            'title' => 'Design Ethiopia',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'start_date' => '2019-01-13',
            'end_date' => '2019-03-12',
            'location' => 'FAB Lab Addis - Alle School of Fine Arts and Design, Addis Ababa, Ethiopia',
            'link' => 'none'
        ]);
    }
}
