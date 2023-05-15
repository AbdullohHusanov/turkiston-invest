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
            'question_id' => $this->for(Forum::factory(), 'question'),
            'client_id' => $this->has(User::factory()),
            'parent_id' => null
        ];
    }
}
