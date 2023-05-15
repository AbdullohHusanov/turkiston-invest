<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'client_id' => $this->for(User::factory()->create()),
            'post_id' => $this->for(Post::factory()->create())
        ];
    }
}
