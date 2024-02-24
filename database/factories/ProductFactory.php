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
        $name = fake()->words(rand(2, 4));
        // Generate first letters to use for SKU based on product name
        // Using array_map rather than turning into a Laravel collection as it would be over-kill for this use case alone
        $firstLetters = implode('', array_map(fn($part) => $part[0], $name));

        return [
            'name' => ucfirst(implode(' ', $name)),
            'slug' => strtolower(implode('-', $name)),
            'model' => 'm-'. strtolower(fake()->swiftBicNumber()), // swiftBicNumber is used as it is the simplest way to generate a random string of 8-11 numbers and letters with FakerPHP
            'sku' => $firstLetters . fake()->randomNumber(rand(4, 6), true), // Create a somewhat realistic looking SKU
            'price' => fake()->randomFloat(2, 15, 200),
            'description' => fake()->paragraphs(4, true),
            'short_description' => fake()->paragraph(5),
            'is_active' => fake()->boolean()
        ];
    }
}
