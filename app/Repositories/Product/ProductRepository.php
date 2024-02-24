<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface {
    public function paginate($limit) {
        return Product::paginate($limit);
    }

    public function find($productId) {
        return Product::find($productId);
    }
}