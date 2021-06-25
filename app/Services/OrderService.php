<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderService
{

    public function getOrders(){
        return Order::query()
                ->orderBy('buyer')
                ->get();
    }

    public function createOrder(array $data){

        Order::create([
            'buyer' => $data['buyer'], 
            'address' => $data['address'],
            'product_id' => $data['productId']
        ]);

    }

    public function getOrder(int $id){
        return Order::find(['id' => $id])->first();
    }
}