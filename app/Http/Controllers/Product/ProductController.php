<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct(public ProductRepositoryInterface $productRepository) {
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductRequest $request)
    {
        $productId = (int) $request->productId;
        if(!$productId) abort(404);

        $product = $this->productRepository->find($request->productId);
        return view('products.show', ['product' => $product]);
    }
}
