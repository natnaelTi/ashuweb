<?php

namespace Database\Seeders;

use App\Models\Exhibition;
use Illuminate\Database\Seeder;

class ExhibitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Exhibition::create([
            'title' => 'Tis and Tas',
            'statement' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis. Nullam felis tortor, ultrices eget cursus vitae, accumsan nec nisi. Aenean mollis nulla sed finibus consectetur. Donec et condimentum purus. Sed ac consequat tortor. Quisque imperdiet urna sed nibh tincidunt, id volutpat est pretium. Nulla porta tortor quis suscipit consectetur. In velit nulla, vehicula in imperdiet ac, imperdiet at est. Phasellus facilisis ultricies nulla, a viverra ante sollicitudin vitae. Cras in enim ante. Phasellus venenatis felis libero, auctor aliquam leo mollis in. Nunc semper tellus vitae dolor pellentesque, id auctor leo elementum. Aenean gravida nisl id mauris luctus varius. Maecenas elementum sagittis ornare. Praesent ultricies maximus ex at efficitur. Morbi at ligula nisl. Donec iaculis risus lacus, a elementum eros volutpat eget. Nunc sapien nulla, eleifend ut est a, aliquet venenatis lorem. Suspendisse eget velit tincidunt, dignissim odio et, aliquet massa. Nullam ac egestas lorem. Phasellus luctus et orci eu scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum tempor leo, at fringilla odio ultrices semper. Aenean cursus arcu dolor, nec aliquet tortor consectetur at. Morbi id eros ornare, ultrices felis sit amet, iaculis nisl. Suspendisse diam augue, lobortis id ipsum vel, aliquam cursus mauris. Aliquam urna tortor, ornare sit amet convallis non, ornare vel metus. Nullam aliquam ac libero sed egestas. Duis at ante facilisis, maximus enim eu, faucibus dui. Nulla facilisi.',
            'start_date' => '2015-01-13',
            'end_date' => '2015-03-12',
            'location' => 'Addis Ababa Museum, Addis Ababa, Ethiopia',
            'type' => 'group',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'installation_views' => 'none.zip',
            'filepath' => 'tis.and.tas.cover.2015.jpg'
        ]);

        Exhibition::create([
            'title' => 'Traces of Life',
            'statement' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis. Nullam felis tortor, ultrices eget cursus vitae, accumsan nec nisi. Aenean mollis nulla sed finibus consectetur. Donec et condimentum purus. Sed ac consequat tortor. Quisque imperdiet urna sed nibh tincidunt, id volutpat est pretium. Nulla porta tortor quis suscipit consectetur. In velit nulla, vehicula in imperdiet ac, imperdiet at est. Phasellus facilisis ultricies nulla, a viverra ante sollicitudin vitae. Cras in enim ante. Phasellus venenatis felis libero, auctor aliquam leo mollis in. Nunc semper tellus vitae dolor pellentesque, id auctor leo elementum. Aenean gravida nisl id mauris luctus varius. Maecenas elementum sagittis ornare. Praesent ultricies maximus ex at efficitur. Morbi at ligula nisl. Donec iaculis risus lacus, a elementum eros volutpat eget. Nunc sapien nulla, eleifend ut est a, aliquet venenatis lorem. Suspendisse eget velit tincidunt, dignissim odio et, aliquet massa. Nullam ac egestas lorem. Phasellus luctus et orci eu scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum tempor leo, at fringilla odio ultrices semper. Aenean cursus arcu dolor, nec aliquet tortor consectetur at. Morbi id eros ornare, ultrices felis sit amet, iaculis nisl. Suspendisse diam augue, lobortis id ipsum vel, aliquam cursus mauris. Aliquam urna tortor, ornare sit amet convallis non, ornare vel metus. Nullam aliquam ac libero sed egestas. Duis at ante facilisis, maximus enim eu, faucibus dui. Nulla facilisi.',
            'start_date' => '2023-01-13',
            'end_date' => '2023-03-12',
            'location' => 'High View Tower, London, UK',
            'type' => 'solo',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'installation_views' => 'none.zip',
            'filepath' => 'traces.of.life.2023.jpg'
        ]);
    }
}
