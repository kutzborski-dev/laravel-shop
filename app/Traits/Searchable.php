<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Builder;

trait Searchable {
    public function scopeSearchable(Builder $query) {
        $searchTerm = request()->input('q');

        if(!$searchTerm || empty($searchTerm)) return $query;
        
        if(isset($this->searchable)) {
            for($i = 0; $i < count($this->searchable); $i++) {
                $field = $this->searchable[$i];

                if($i === 0) {
                    $query = $query->where($field, 'LIKE', "%{$searchTerm}%");
                } else {
                    $query = $query->orWhere($field, 'LIKE', "%{$searchTerm}%");
                }
            }
        }
    }
}