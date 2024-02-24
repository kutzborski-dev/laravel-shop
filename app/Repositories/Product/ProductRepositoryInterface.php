<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface {
    public function paginate($limit);

    public function search($limit);

    public function whereInPaginate($column, $values, $limit);

    public function whereIn($column, $values, $limit);

    public function find($productId);
}