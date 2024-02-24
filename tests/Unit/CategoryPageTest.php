<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Product;

class CategoryPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_page_is_reachable_and_has_data()
    {
        $category = Category::factory()->
            has(Product::factory(1))->
            has(Category::factory(1), 'subCategories')->create();

        $response = $this->get("/{$category->slug}");
        $response->assertStatus(200);

        $response->assertSee(e($category->name));
        
        $category->subCategories->each(function($subCategory) use ($response){
            $response->assertSee(e($subCategory->name));
        });

        $category->products->each(function($product) use ($response){
            $response->assertSee(e($product->name));
        });
    }
}
