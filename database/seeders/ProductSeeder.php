<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(){
        Product::create([
            'name' => 'Produto Tray',
            'price' => 500,
            'quantity' => 10
        ]);
    }
}