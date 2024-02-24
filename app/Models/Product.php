<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Models\Scopes\ActiveScope;
use App\Models\Scopes\SortableScope;
use App\Traits\Searchable;

class Product extends Model
{
    use HasFactory, Sortable, Searchable;

    public $sortable = [
        'name',
        'price'
    ];

    public $searchable = [
        'name',
        'price',
        'description',
        'short_description',
        'sku',
        'model'
    ];

    protected static function booted() {
        static::addGlobalScope(new ActiveScope);
        static::addGlobalScope(new SortableScope);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}