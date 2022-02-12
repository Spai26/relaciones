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
            'name' => $this->faker->sentence(),
            'body' => $this->faker->text(),
            'user_id' => rand(1,5),
            'category_id' => rand(1,4),
        ];
    }
}
