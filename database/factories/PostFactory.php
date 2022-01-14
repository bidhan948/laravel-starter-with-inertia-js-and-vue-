<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post' => $this->faker->sentence(),
            // 'email' => $this->faker->unique()->safeEmail(),
            'user' => 1,
            'like' => random_int(0,1001),
        ];
    }
}
