<?php

namespace App\Repositories\Category;

interface CategoryRepositoryInterface {
    public function findBySlug($categorySlug);

    public function getNestedProducts($category);

    public function getProducts($category);

    public function getSubCategories($category);
}