<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostComments>
 */
class PostCommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message' => fake()->text(60),
            'like' => fake()->numerify(),
            'dislike' => fake()->numerify(),
            'client_id' => fake()->randomElement([1,2]),
            'post_id' => fake()->randomElement([1,2,3,4,5])
        ];
    }
}
