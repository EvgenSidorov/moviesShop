<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'movie_id',
        'price',
        'count',
    ];

    public $timestamps = false;

    public function movie() {
        return $this->hasOne(Movie::class, 'id', 'movie_id' );
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }



}
