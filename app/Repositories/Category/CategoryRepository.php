<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\Product\ProductRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface {
    public function __construct(public ProductRepositoryInterface $productRepository) {
    }

    protected function collectCategoryIds($categories, &$ids = [])
    {
        foreach ($categories as $category) {
            $ids[] = $category->id;

            if ($category->allSubCategories && $category->allSubCategories->isNotEmpty()) {
                $this->collectCategoryIds($category->allSubCategories, $ids);
            }
        }

        return $ids;
    }

    public function findBySlug($categorySlug) {
        return Category::where('slug', $categorySlug)->first();
    }

    public function getProducts($category) {
        if(is_int($category)) {
            return Category::find($category)->subCategories;
        }

        return $category->subCategories;
    }

    public function getSubCategories($category) {
        if(is_int($category)) {
            return Category::find($category)->subCategories;
        }

        return $category->subCategories;
    }

    public function getNestedProducts($category, $paginate = 5, $limit = 5) {
        if(is_int($category)) {
            $category = Category::find($category);
        }

        $categoryIds = $this->collectCategoryIds([$category]);

        if($paginate) {
            $products = $this->productRepository->whereInPaginate('category_id', $categoryIds, $paginate);
        } else {
            $products = $this->productRepository->whereIn('category_id', $categoryIds, $limit);
        }

        return $products;
    }
}