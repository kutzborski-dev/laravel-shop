<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductPageTest extends TestCase
{
    use RefreshDatabase;

    public function the_page_is_reachable_and_has_data()
    {
        $product = \App\Models\Product::factory()->create();

        $response = $this->get("/product/{$product->slug}-{$product->id}");
        $response->assertStatus(200);

        $response->assertSee(e($product->name));
    }
}
