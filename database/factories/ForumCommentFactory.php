<?php

namespace Database\Factories;

use \App\Models\Forum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForumComment>
 */
class ForumCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message' => fake()->text(70),
            'question_id' => fake()->randomElement([1,2,3,4,5]),
            'like' => fake()->numerify(),
            'dislike' => fake()->numerify(),
            'client_id' => fake()->randomElement([1,2]),
            'parent_id' => fake()->randomElement([null, fake()->numberBetween(1,15)])
        ];
    }
}
