<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_page_is_reachable_and_has_data()
    {
        $product = \App\Models\Product::factory()->create();

        $response = $this->get("/");
        $response->assertStatus(200);

        $response->assertSee(e($product->name));
    }
}
