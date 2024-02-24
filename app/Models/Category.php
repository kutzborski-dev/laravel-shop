<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function subCategories() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parentCategory() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function allSubCategories() {
        return $this->subCategories()->with('allSubCategories');
    }

    public function allParentCategories() {
        return $this->parentCategory()->with('allParentCategories');
    }
}