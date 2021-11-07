<?php

namespace Database\Factories;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Song::class;
    public function definition()
    {
        return [
            //
            'song_name' => $this->faker->word(),
            'released' => $this->faker->year(),
            'song_genre' => $this->faker->word(),
            'singer' => function () {
                $singers = Singer::inRandomOrder()->first();
                return $singers->singer_code;
            }
        ];
    }
}
