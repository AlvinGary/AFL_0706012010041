<?php

namespace Database\Factories;

use App\Models\Singer;
use Illuminate\Database\Eloquent\Factories\Factory;

class SingerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Singer::class;
    public function definition()
    {
        return [
            //
            'singer_code' => $this->faker->word(),
            'singer_name' => $this->faker->firstName(),
            'debut_on' => $this->faker->year(),
            'origin' => $this->faker->country(),
            'genre' => $this->faker->word(),
            'record_label' => $this->faker->words(2, true)
        ];
    }
}
