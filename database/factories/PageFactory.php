<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_uz' => $this->faker->numerify . ' raqamli page',
            'title_ru' => 'Page number of ' . $this->faker->numerify,
            'title_en' => 'Page number of ' . $this->faker->numerify,
            'slug' => $this->faker->slug,
            'view' => $this->faker->numerify,
            'content_uz' => $this->faker->text(1230),
            'content_ru' => $this->faker->text(1230),
            'content_en' => $this->faker->text(1230),
            'img' => 'resources/images/default_image_pages.jpeg',
            'created_by' => fake()->randomElement([1,2]),
            'updated_by' => fake()->randomElement([1,2])        ];
    }
}
