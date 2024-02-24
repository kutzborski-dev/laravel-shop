<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    public function __construct(public CategoryRepositoryInterface $categoryRepository) {
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryRequest $request)
    {
        $categoryPath = $request->categoryPath;
        $categorySlug = str_contains('/', $categoryPath) ? end(explode('/', $categoryPath)) : $categoryPath;

        $category = $this->categoryRepository->findBySlug($categorySlug);

        if(!$category) abort(404);

        $products = $this->categoryRepository->getNestedProducts($category);
        $subCategories = $this->categoryRepository->getSubCategories($category);

        return view('products.category', ['products' => $products]);
    }
}
