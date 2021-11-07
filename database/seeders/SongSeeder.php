<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Song::factory()->count(20)->create();

        // DB::table('songs')->insert([
        //     'song_name' => 'Shukumei',
        //     'released' => '2019',
        //     'song_genre' => 'J-Pop',
        //     'singer' => 'HigeDan',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now()
        // ]);
        // DB::table('songs')->insert([
        //     'song_name' => 'Loser',
        //     'released' => '2016',
        //     'song_genre' => 'J-Pop',
        //     'singer' => 'HACHI',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now()
        // ]);
        // DB::table('songs')->insert([
        //     'song_name' => 'Is There Still Anything That Love Can Do?',
        //     'released' => '2019',
        //     'song_genre' => 'J-Pop',
        //     'singer' => 'RADWIMPS',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now()
        // ]);
        // DB::table('songs')->insert([
        //     'song_name' => 'Gurenge',
        //     'released' => '2019',
        //     'song_genre' => 'J-Pop, Anime',
        //     'singer' => 'LiSA',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now()
        // ]);
    }
}
