<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(ProductService $productService){
        $this->productService = $productService;
    }

    public function list(){
        $products = $this->productService->getProducts();
        return view('Product.list', compact('products'));
    }

    public function create(Request $request){
        $data = $request->all();
        $this->productService->createProduct($data);
        return redirect()->route('list_products');
    }

    public function detail(int $id){
        $product = $this->productService->getProduct($id);
        return view('Product.detail', compact('product'));
    }

    public function new(){
        return view('Product.new');
    }
}