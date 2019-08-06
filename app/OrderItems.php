<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable=[
        'name','price','order_id','quantity','product_id',
    ];
}
