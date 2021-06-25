<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\OrderService;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct(ProductService $productService, OrderService $orderService){
        $this->productService = $productService;
        $this->orderService = $orderService;
    }

    public function list(){
        $orders = $this->orderService->getOrders();
        return view('Order.list', compact('orders'));
    }

    public function create(Request $request){
        $data = $request->all();
        $order = $this->orderService->createOrder($data);
        return redirect()->route('list_orders');
    }

    public function detail(int $id){
        $order = $this->orderService->getOrder($id);
        return view('Order.detail', compact('order'));
    }

    public function new(Request $request){
        $data = $request->all();
        $product = $this->productService->getProduct($data['productId']);
        if(!$this->productService->validateProductPrice($product->price)){
            throw new \Exception("Não é possível realizar pedidos menores do que 300 reais.");
        }
        return view('Order.new', [
            'productId' => $data['productId'],
        ]);
    }
}