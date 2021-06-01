<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => Str::random(10),
            'director' => Str::random(10),
            'imageUrl' => Str::random(15),
             'duration' => rand(1,100),
            'releaseDate'=> $this->faker->dateTimeThisMonth(),
            'genre'=>Str::random(10)
        ];
    }
}