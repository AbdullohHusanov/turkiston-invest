<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'value' => fake()->slug(),
            'class' => 'Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType',
            'target' => '_self',
            'parent_id' => null,
            'order' => fake()->boolean(),
            'enabled' => fake()->boolean(),
            'data' => null,
            'locale' => fake()->randomElement(['en','uz','ru'])
        ];
    }
}
