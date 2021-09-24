<?php

namespace App\Filters;

class MovieFiltr extends QueryFilter{

    public function query($search_string = ''){
        return $this->builder
            ->where('title', 'LIKE', '%'.$search_string.'%');
    }

    public function sort($query){
        $sort = explode('_', $query);
        return $this->builder->when($query, function($q) use($query,$sort){
            $q->orderBy($sort[0], $sort[1]);
        });
    }

    public function price_from($price_from = 0){
        return $this->builder->when($price_from, function($q) {
            $q->whereBetween('price', array($_GET['price_from'], $_GET['price_to']));
    });
    }
}
