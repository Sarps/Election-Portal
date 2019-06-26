<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Vote;

class NomineesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nominees = array(
            array(
                'name' => 'Ibrahim Mallam Quagraine',
                'pos'  => 'Academic Excellence Chair',
                'sex'  => 'M',
                'img'  => 'academic.jpeg'
            ),
            array(
                'name' => 'Mariama Alidu',
                'pos'  => 'President',
                'sex'  => 'F',
                'img'  => 'president.jpeg'
            ),
            array(
                'name' => 'Julius Owusu',
                'pos'  => 'Retention Chair',
                'sex'  => 'M',
                'img'  => 'retention.jpeg'
            ),
            array(
                'name' => 'Nelson Goli',
                'pos'  => 'Organizer',
                'sex'  => 'M',
                'img'  => 'organizer.jpeg'
            ),
            array(
                'name' => 'Dickson Oduro Kwame',
                'pos'  => 'Membership Chair',
                'sex'  => 'M',
                'img'  => 'membership.jpeg'
            ),
            array(
                'name' => 'Mariam Hanson',
                'pos'  => 'General Secretary',
                'sex'  => 'F',
                'img'  => 'secretary.jpeg'
            ),
            array(
                'name' => 'Daniel Ofori',
                'pos'  => 'Publicity Chair',
                'sex'  => 'M',
                'img'  => 'publicity.jpeg'
            )
        );

        foreach ($nominees as $nominee) {
            
            $post = Post::create([
                'title' => $nominee['pos']
            ]);

            $post->nominee()->create([
                'name' => $nominee['name'],
                'gender' => $nominee['sex'],
                'photo' => $nominee['img']
            ]);
        }
    }
}
