<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Models\Scopes\ActiveScope;
use App\Models\Scopes\SortableScope;

class Product extends Model
{
    use HasFactory, Sortable;

    public $sortable = [
        'name',
        'price'
    ];

    protected static function booted() {
        static::addGlobalScope(new ActiveScope);
        static::addGlobalScope(new SortableScope);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}