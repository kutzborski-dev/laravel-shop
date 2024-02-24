<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Product\ProductRepositoryInterface;

class SearchController extends Controller
{
    public function __construct(public ProductRepositoryInterface $productRepository) {
    }

    public function search() {
        $products = $this->productRepository->search();
        return view('products.search', ['products' => $products]);
    }
}
