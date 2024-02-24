<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\ActiveScope;

class Category extends Model
{
    use HasFactory;

    protected static function booted() {
        static::addGlobalScope(new ActiveScope);
    }

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