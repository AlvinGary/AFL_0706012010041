<?php

namespace Database\Seeders;

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
        DB::table('songs')->insert([
            'song_name' => 'Shukumei',
            'released' => '2019',
            'song_genre' => 'J-Pop',
            'singer' => 'Official Hige Dandism',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('songs')->insert([
            'song_name' => 'Loser',
            'released' => '2016',
            'song_genre' => 'J-Pop',
            'singer' => 'Kenshi Yonezu',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('songs')->insert([
            'song_name' => 'Is There Still Anything That Love Can Do?',
            'released' => '2019',
            'song_genre' => 'J-Pop',
            'singer' => 'RadWimps',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('songs')->insert([
            'song_name' => 'Gurenge',
            'released' => '2019',
            'song_genre' => 'J-Pop, Anime',
            'singer' => 'LiSA',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
