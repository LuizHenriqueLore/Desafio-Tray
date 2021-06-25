<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    public function getProducts(){
        return Product::query()
                ->orderBy('name')
                ->get();
    }

    public function createProduct(array $data){

        Product::create([
            'name' => $data['name'], 
            'price' => $data['price'],
            'quantity' => $data['quantity']
        ]);

    }

    public function getProduct(int $id){
        return Product::find(['id' => $id])->first();
    }

    public function validateProductPrice(float $price){
        if($price < 300){
            return false;
        }
        return true;
    }
}