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
            'name' => 'Ashenafe Mestika',
            'email' => 'admin@ashenafemestika.com',
            'password' => Hash::make('secret'),
            'dob' => Carbon::createFromFormat('Y-m-d', '1990-01-23'),
            'bio' => 'Ashenafe Mestika was born and raised in Addis Ababa Ethiopia, graduated from Entoto Technical and Vocational Education Training College where he received a 10+3 Diploma in fine art, specialized in painting and Alle School of Fine Art & Designin Addis Ababa University in Bachelor of Fine Arts in Painting in 2020.',
            'statement' => 'In my artwork, I like to depict the Portrait of Inner Emotion and the result from it. The reason I want to interpret this Inner Emotion to a visual perception is because emotion is often defined as a complex state of feeling that results in physical and psychological changes that influence thought and behavior; and this complex state of feeling gives me the insight for my artwork to see things in deferent angel and unlimited visual interpretation. From what I realize life is a composition of complementary ideas and realities affected by the arrangement of nature. In nature, we find diverse compositions that range from extreme opposites to complimentary formations. However, the recognition of the other side or in other words, opposing contrasting elements, can add great value to the meaning of life. Emotions are one such example. To truly feel or speak about happiness we have to know about sadness. Likewise in nature, we can appreciate and understand the meaning of light from the experience of the dark. This familiar and simple comparison of light and dark in the context of life and existence helped to shape my perception and creation of art while allowing me to accept my very own existence. My art is a reflection of this quest to understand life and existence. In this complimentary arrangement which is IN and OUT, there is Emotion and Expression inner emotions have a powerful impact on our environment as well as our living environment also has an equal impact on the inner emotion. The Portrait of our Inner Emotion becomes visualize on our expression; so that I inspired to compose these two deferent but related ideas to a visual language. I consider in life things that happened mostly comes from our deeper emotion; emotions can cause as to take actions we might not normally perform so that I like to concentrate on the Inner Emotion to demonstrate. I used complementary colors for the artwork to show the idea of IN & OUT. My artwork is the Portrait of my deeper Emotion and I depict my visualization to an art form.',
            'exhibitions' => 'NONE',
            'prs' => ['none'],
            'filepath' => 'ashenafe.profile.jpg'
        ]);
    }
}
