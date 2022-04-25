<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Artwork;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('guest.index');
    }

    public function dashboard()
    {
        $artist = new User([
            'name' => "Ashenafe Mestika",
            'email' => "ashenafemestikaart@gmail.com",
            'dob' => Carbon::createFromFormat('Y-m-d', '1990-01-23'),
            'bio' => 'Ashenafe Mestika was born and raised in Addis Ababa Ethiopia, graduated from Entoto Technical and Vocational Education Training College where he received a 10+3 Diploma in fine art, specialized in painting and Alle School of Fine Art & Designin Addis Ababa University in Bachelor of Fine Arts in Painting in 2020.',
            'statement' => 'In my artwork, I like to depict the Portrait of Inner Emotion and the result from it. The reason I want to interpret this Inner Emotion to a visual perception is because emotion is often defined as a complex state of feeling that results in physical and psychological changes that influence thought and behavior; and this complex state of feeling gives me the insight for my artwork to see things in deferent angel and unlimited visual interpretation. From what I realize life is a composition of complementary ideas and realities affected by the arrangement of nature. In nature, we find diverse compositions that range from extreme opposites to complimentary formations. However, the recognition of the other side or in other words, opposing contrasting elements, can add great value to the meaning of life. Emotions are one such example. To truly feel or speak about happiness we have to know about sadness. Likewise in nature, we can appreciate and understand the meaning of light from the experience of the dark. This familiar and simple comparison of light and dark in the context of life and existence helped to shape my perception and creation of art while allowing me to accept my very own existence. My art is a reflection of this quest to understand life and existence. In this complimentary arrangement which is IN and OUT, there is Emotion and Expression inner emotions have a powerful impact on our environment as well as our living environment also has an equal impact on the inner emotion. The Portrait of our Inner Emotion becomes visualize on our expression; so that I inspired to compose these two deferent but related ideas to a visual language. I consider in life things that happened mostly comes from our deeper emotion; emotions can cause as to take actions we might not normally perform so that I like to concentrate on the Inner Emotion to demonstrate. I used complementary colors for the artwork to show the idea of IN & OUT. My artwork is the Portrait of my deeper Emotion and I depict my visualization to an art form.',
            'profile_pic_path' => 'img/temp/profile/profile.jpg'
        ]);
        $total_artworks = 0;
        $total_photos = 0;
        $total_exhibitions = 0;
        $profile_pic_path = asset($artist->profile_pic_path);
        $age = Carbon::parse($artist->dob)->age;
        $alumni = ['Ale School of Fine Arts | AAU', 'Hamburg Fine Arts Fellowship'];
        $exhibitions  = [];

        return view('cms.dashboard', [
            'total_artworks' => $total_artworks,
            'total_photos' => $total_photos,
            'total_exhibitions' => $total_exhibitions,
            'profile_pic_path' => $profile_pic_path,
            'artist' => $artist,
            'alumni' => $alumni,
            'age' => $age,
            'exhibitions' => $exhibitions
        ]);
    }

    public function profile()
    {
        $artist = new User([
            'name' => "Ashenafe Mestika",
            'email' => "ashenafemestikaart@gmail.com",
            'dob' => Carbon::createFromFormat('Y-m-d', '1990-01-23'),
            'bio' => 'Ashenafe Mestika was born and raised in Addis Ababa Ethiopia, graduated from Entoto Technical and Vocational Education Training College where he received a 10+3 Diploma in fine art, specialized in painting and Alle School of Fine Art & Designin Addis Ababa University in Bachelor of Fine Arts in Painting in 2020.',
            'statement' => 'In my artwork, I like to depict the Portrait of Inner Emotion and the result from it. The reason I want to interpret this Inner Emotion to a visual perception is because emotion is often defined as a complex state of feeling that results in physical and psychological changes that influence thought and behavior; and this complex state of feeling gives me the insight for my artwork to see things in deferent angel and unlimited visual interpretation. From what I realize life is a composition of complementary ideas and realities affected by the arrangement of nature. In nature, we find diverse compositions that range from extreme opposites to complimentary formations. However, the recognition of the other side or in other words, opposing contrasting elements, can add great value to the meaning of life. Emotions are one such example. To truly feel or speak about happiness we have to know about sadness. Likewise in nature, we can appreciate and understand the meaning of light from the experience of the dark. This familiar and simple comparison of light and dark in the context of life and existence helped to shape my perception and creation of art while allowing me to accept my very own existence. My art is a reflection of this quest to understand life and existence. In this complimentary arrangement which is IN and OUT, there is Emotion and Expression inner emotions have a powerful impact on our environment as well as our living environment also has an equal impact on the inner emotion. The Portrait of our Inner Emotion becomes visualize on our expression; so that I inspired to compose these two deferent but related ideas to a visual language. I consider in life things that happened mostly comes from our deeper emotion; emotions can cause as to take actions we might not normally perform so that I like to concentrate on the Inner Emotion to demonstrate. I used complementary colors for the artwork to show the idea of IN & OUT. My artwork is the Portrait of my deeper Emotion and I depict my visualization to an art form.',
            'profile_pic_path' => 'img/temp/profile/profile.jpg'
        ]);
        $year = Carbon::now()->format('Y');
        $age = Carbon::parse($artist->dob)->age;
        $profile_pic_path = asset($artist->profile_pic_path);

        $alumni1 = new Alumni([
            'organisation' => 'Ale School of Fine Arts | AAU',
            'year' => 2020,
            'location' => 'Addis Ababa, Ethiopia'
        ]);
        $alumni2 = new Alumni([
            'organisation' => 'Abyssinia Art Academy',
            'year' => 2015,
            'location' => 'Addis Ababa, Ethiopia'
        ]);
        $alumni3 = new Alumni([
            'organisation' => 'Guthenberg Fine Arts Institute',
            'year' => 2018,
            'location' => 'Luxumberg, Germany'
        ]);
        $alumnis = [$alumni1, $alumni2, $alumni3];

        $exhibition1 = new Exhibition([
            'title' => 'Tis and Tas',
            'statement' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis. Nullam felis tortor, ultrices eget cursus vitae, accumsan nec nisi. Aenean mollis nulla sed finibus consectetur. Donec et condimentum purus. Sed ac consequat tortor. Quisque imperdiet urna sed nibh tincidunt, id volutpat est pretium. Nulla porta tortor quis suscipit consectetur. In velit nulla, vehicula in imperdiet ac, imperdiet at est. Phasellus facilisis ultricies nulla, a viverra ante sollicitudin vitae. Cras in enim ante. Phasellus venenatis felis libero, auctor aliquam leo mollis in. Nunc semper tellus vitae dolor pellentesque, id auctor leo elementum. Aenean gravida nisl id mauris luctus varius. Maecenas elementum sagittis ornare. Praesent ultricies maximus ex at efficitur. Morbi at ligula nisl. Donec iaculis risus lacus, a elementum eros volutpat eget. Nunc sapien nulla, eleifend ut est a, aliquet venenatis lorem. Suspendisse eget velit tincidunt, dignissim odio et, aliquet massa. Nullam ac egestas lorem. Phasellus luctus et orci eu scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum tempor leo, at fringilla odio ultrices semper. Aenean cursus arcu dolor, nec aliquet tortor consectetur at. Morbi id eros ornare, ultrices felis sit amet, iaculis nisl. Suspendisse diam augue, lobortis id ipsum vel, aliquam cursus mauris. Aliquam urna tortor, ornare sit amet convallis non, ornare vel metus. Nullam aliquam ac libero sed egestas. Duis at ante facilisis, maximus enim eu, faucibus dui. Nulla facilisi.',
            'start_date' => '2015-01-13',
            'end_date' => '2015-03-12',
            'location' => 'Addis Ababa Museum, Addis Ababa, Ethiopia',
            'type' => 'group',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'installation_views' => 'none.zip'
        ]);
        $exhibition2 = new Exhibition([
            'title' => 'Running',
            'statement' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis. Nullam felis tortor, ultrices eget cursus vitae, accumsan nec nisi. Aenean mollis nulla sed finibus consectetur. Donec et condimentum purus. Sed ac consequat tortor. Quisque imperdiet urna sed nibh tincidunt, id volutpat est pretium. Nulla porta tortor quis suscipit consectetur. In velit nulla, vehicula in imperdiet ac, imperdiet at est. Phasellus facilisis ultricies nulla, a viverra ante sollicitudin vitae. Cras in enim ante. Phasellus venenatis felis libero, auctor aliquam leo mollis in. Nunc semper tellus vitae dolor pellentesque, id auctor leo elementum. Aenean gravida nisl id mauris luctus varius. Maecenas elementum sagittis ornare. Praesent ultricies maximus ex at efficitur. Morbi at ligula nisl. Donec iaculis risus lacus, a elementum eros volutpat eget. Nunc sapien nulla, eleifend ut est a, aliquet venenatis lorem. Suspendisse eget velit tincidunt, dignissim odio et, aliquet massa. Nullam ac egestas lorem. Phasellus luctus et orci eu scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum tempor leo, at fringilla odio ultrices semper. Aenean cursus arcu dolor, nec aliquet tortor consectetur at. Morbi id eros ornare, ultrices felis sit amet, iaculis nisl. Suspendisse diam augue, lobortis id ipsum vel, aliquam cursus mauris. Aliquam urna tortor, ornare sit amet convallis non, ornare vel metus. Nullam aliquam ac libero sed egestas. Duis at ante facilisis, maximus enim eu, faucibus dui. Nulla facilisi.',
            'start_date' => '2017-07-13',
            'end_date' => '2017-08-12',
            'type' => 'solo',
            'location' => 'Ale School of Fine Arts, Addis Ababa, Ethiopia',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'installation_views' => 'running_ivs.zip'
        ]);
        $exhibition3 = new Exhibition([
            'title' => 'Traces of a Moment',
            'statement' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis. Nullam felis tortor, ultrices eget cursus vitae, accumsan nec nisi. Aenean mollis nulla sed finibus consectetur. Donec et condimentum purus. Sed ac consequat tortor. Quisque imperdiet urna sed nibh tincidunt, id volutpat est pretium. Nulla porta tortor quis suscipit consectetur. In velit nulla, vehicula in imperdiet ac, imperdiet at est. Phasellus facilisis ultricies nulla, a viverra ante sollicitudin vitae. Cras in enim ante. Phasellus venenatis felis libero, auctor aliquam leo mollis in. Nunc semper tellus vitae dolor pellentesque, id auctor leo elementum. Aenean gravida nisl id mauris luctus varius. Maecenas elementum sagittis ornare. Praesent ultricies maximus ex at efficitur. Morbi at ligula nisl. Donec iaculis risus lacus, a elementum eros volutpat eget. Nunc sapien nulla, eleifend ut est a, aliquet venenatis lorem. Suspendisse eget velit tincidunt, dignissim odio et, aliquet massa. Nullam ac egestas lorem. Phasellus luctus et orci eu scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum tempor leo, at fringilla odio ultrices semper. Aenean cursus arcu dolor, nec aliquet tortor consectetur at. Morbi id eros ornare, ultrices felis sit amet, iaculis nisl. Suspendisse diam augue, lobortis id ipsum vel, aliquam cursus mauris. Aliquam urna tortor, ornare sit amet convallis non, ornare vel metus. Nullam aliquam ac libero sed egestas. Duis at ante facilisis, maximus enim eu, faucibus dui. Nulla facilisi.',
            'start_date' => '2022-03-13',
            'end_date' => '2022-04-16',
            'location' => 'Guramayne Art Center, Addis Ababa, Ethiopia',
            'type' => 'solo',
            'description' => 'Phasellus facilisis turpis non magna tempor egestas. Nam vulputate lobortis tincidunt. Duis convallis, mauris sed interdum convallis, elit elit maximus quam, sit amet venenatis augue diam at lectus. Vestibulum augue ex, interdum non leo nec, convallis volutpat nulla. Suspendisse varius lacinia venenatis.',
            'installation_views' => 'traces_of_a_moment_ivs.zip'
        ]);
        $exhibitions = [$exhibition1, $exhibition2, $exhibition3];

        return view('cms.profile.view', [
            'artist' => $artist,
            'age' => $age,
            'profile_pic_path' => $profile_pic_path,
            'alumnis' => $alumnis,
            'year' => $year,
            'exhibitions' => $exhibitions
        ]);
    }

    public function artwork()
    {
        $artwork1 = new Artwork([
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
        $artwork2 = new Artwork([
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
        $artworks = [$artwork1, $artwork2];

        return view('cms.artwork.list', [
            'artworks' => $artworks
        ]);
    }

    public function photography()
    {
        return view('cms.photography.list');
    }

    public function videoart()
    {
        return view('cms.videoart.list');
    }
}
