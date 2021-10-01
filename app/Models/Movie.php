<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Movie extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'movies';

    protected $fillable = [
        'is_active',
        'title',
        'description',
        'genre',
        'price',
        'rating',
    ];

    public function scopeFilter(Builder $query, QueryFilter $filter){
        return $filter->apply($query);
    }

    public function scopeById(Builder $query, $id){
        return $query->where('id', $id);
    }
}
