<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show');
    }
}
