<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 parent categories with 20 products each
        Category::factory(5)->has(Product::factory(20))->has(
            // Create 10 subcategories with 10 products each
            Category::factory(10)->has(Product::factory(10))->has(
                // Create 5 further subcategories of the 10 previous subcategories, with 5 products each
                Category::factory(5)->has(Product::factory(5))
            , 'subCategories')
        , 'subCategories')->create();
    }
}
