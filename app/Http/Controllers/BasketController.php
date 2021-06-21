<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function cartPlace()
    {
        return view('order');
    }
    public function cartAdd($productId)
    {
        $products=Product::get();
        $orderId=session('orderId');
        if (is_null($orderId)){
            $orderId=Order::create()->id;
            session(['orderId'=> $orderId]);
        }
        else{
            $order=Order::find($orderId);
        }
//        $product = Product::find($productId);
        $products=Product::get();
//        if($productId==$products->id){
//            $order->
//        }


//        session()->flash('success', 'Добавлен товар ' . $product->name);
       // dump($order->products());
       // dump($orderId);

         return view('order',compact('products', 'orderId' ),['productId' => $productId,]);
    }

}
