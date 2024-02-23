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
        Category::factory(5)->has(
            // Create 20 Products for 5 categories
            Product::factory(20)
        )->has(
            // Create 10 subcategories with 10 products each
            Category::factory(10)->has(
                Product::factory(10)
            , 'parent_id')
        )->create();
    }
}
