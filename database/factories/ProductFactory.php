<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(rand(2, 4), true),
            'model' => 'm-'. fake()->text(rand(2, 4)) . fake()->randomNumber(rand(4, 6), true),
            'sku' => fake()->text(rand(2, 4)) . fake()->randomNumber(rand(4, 6), true),
            'price' => fake()->randomFloat(2, 15, 200),
            'description' => fake()->paragraphs(4, true),
            'short_description' => fake()->paragraph(5),
            'is_active' => fake()->boolean()
        ];
    }
}
