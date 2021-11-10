<?php

namespace App\Filters;

class MovieFiltr extends QueryFilter
{

    public function query($search_string = '')
    {
        return $this->builder
            ->where('title', 'LIKE', '%' . $search_string . '%');
    }

    public function sort($query)
    {
        $sort = explode('_', $query);
        return $this->builder->when($query, function ($q) use ($query, $sort) {
            $q->orderBy($sort[0], $sort[1]);
        });
    }

    public function price_from($price_from = 0)
    {
        return $this->builder->where('price','>=', $price_from);
    }

    public function price_to($price_to = 0)
    {
        return $this->builder->where('price','<=', $price_to);
    }

    public function rating_from($rating_from = 0)
    {
        return $this->builder->where('rating','>=', $rating_from);
    }

    public function rating_to($rating_to = 0)
    {
        return $this->builder->where('rating','<=', $rating_to);
    }




}
