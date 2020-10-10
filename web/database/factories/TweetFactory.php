<?php

namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'body' => $this->faker->sentence,
        ];
    }
}


/*
 * 'title' => $this->faker->title,
            'description' => $this->faker->text,
 */
