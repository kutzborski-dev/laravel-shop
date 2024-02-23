<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryName = fake()->words(rand(2, 3), true);

        return [
            'name' => $categoryName,
            'slug' => strtolower(str_ireplace(' ', '-', $categoryName)),
            'is_active' => fake()->boolean()
        ];
    }
}
