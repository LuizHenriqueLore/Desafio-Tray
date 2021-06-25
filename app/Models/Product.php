<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'quantity'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'product_id');
    }

}