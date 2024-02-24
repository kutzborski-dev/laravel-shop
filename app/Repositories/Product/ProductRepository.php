<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface {
    public function paginate($limit = 5) {
        return Product::paginate($limit);
    }

    public function search($limit = 5) {
        return Product::searchable()->paginate($limit)->appends(request()->query());
    }

    public function whereInPaginate($column, $values, $limit) {
        return Product::whereIn($column, $values)->paginate($limit);
    }

    public function whereIn($column, $values, $limit = 0) {
        $products = Product::whereIn($column, $values);
        if($limit) return $products->limit($limit);
        return $products->get();
    }

    public function find($productId) {
        return Product::find($productId);
    }
}