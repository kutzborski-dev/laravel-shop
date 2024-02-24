<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;

class HomeController extends Controller
{
    public function __construct(public ProductRepositoryInterface $productRepository) {
    }

    public function index() {
        $products = $this->productRepository->paginate(5);
        return view('home', ['products' => $products]);
    }
}
