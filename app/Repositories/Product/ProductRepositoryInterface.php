<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface {
    public function paginate($limit);

    public function find($productId);
}