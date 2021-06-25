<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    public function run(){
        $product = Product::first();
        Order::create([
            'buyer' => 'Luiz Henrique Lourencao',
            'address' => 'Barra Bonita',
            'product_id' => $product->id
        ]);
    }
}