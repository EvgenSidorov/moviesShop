<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

//    const STATUSES = [
//        0 => 'новый',
//        0 => 'новый',
//    ];

    const STATUS_NEW = 0;
    const STATUS_ACCEPT = 1;
    const STATUS_CANCEL = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_FINISHED = 4;

    const DELIVERY_PICKUP = 1;
    const DELIVERY_SHIPPING = 2;

    protected $fillable = [
        'description',
    ];
}

//hasmany????
// order->products(order_products)->(movie)
