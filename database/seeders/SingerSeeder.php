<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('singers')->insert([
            'singer_code' => 'HigeDan',
            'singer_name' => 'Official Hige Dandism',
            'debut_on' => '2012',
            'origin' => 'Shimane, Japan',
            'genre' => 'Pop, Pop Rock',
            'record_label' => 'Pony Canyon, IRORI Records',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('singers')->insert([
            'singer_code' => 'HACHI',
            'singer_name' => 'Kenshi Yonezu',
            'debut_on' => '2013',
            'origin' => 'Tokushima, Japan',
            'genre' => 'J-Pop, Rock',
            'record_label' => 'Universal Sigma, Sony Music Records, SME Records',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('singers')->insert([
            'singer_code' => 'RADWIMPS',
            'singer_name' => 'RADWIMPS',
            'debut_on' => '2003',
            'origin' => 'Kanagawa, Japan',
            'genre' => 'Rock, Alternative rock, Emo, Indie rock, Pop rock, Post-punk, Rap rock, Post-hardcore, Melodic hardcore, Funk rock, Rapcore',
            'record_label' => 'EMI Music Japan, Virgin Records, EMI Records, EMI Records Japan, UNIVERSAL MUSIC LLC., NEWTRAXX Inc.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('singers')->insert([
            'singer_code' => 'LiSA',
            'singer_name' => 'Oribe Risa',
            'debut_on' => '2011',
            'origin' => 'Seki, Gifu, Japan',
            'genre' => 'J-Pop, Anison, Rock, Pop Punk',
            'record_label' => 'Aniplex, SACRA MUSIC',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
