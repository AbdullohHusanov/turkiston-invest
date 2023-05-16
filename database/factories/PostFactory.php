<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_uz' => 'Post '.fake()->numerify().'- raqamli',
            'title_ru' => 'Post of '.fake()->numerify().' number',
            'title_en' => 'Post of '.fake()->numerify().' number',
            'slug' => fake()->slug(),
            'view' => fake()->numerify(),
            'content_uz' => fake()->text(260),
            'content_ru' => fake()->text(260),
            'content_en' => fake()->text(260),
            'description_uz' => fake()->text(40),
            'description_ru' => fake()->text(40),
            'description_en' => fake()->text(40),
            'img' => 'logo-social.png',
            'created_by' => fake()->randomElement([1,2]),
            'updated_by' => fake()->randomElement([1,2])
        ];
    }
}
