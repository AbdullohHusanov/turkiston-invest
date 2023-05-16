<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_question' => fake()->text(30),
            'description_question' => fake()->text(190),
            'slug' => fake()->slug,
            'view' => fake()->numerify(),
            'client_id' => fake()->randomElement([1,2])
        ];
    }
}
