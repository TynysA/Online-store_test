<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function cartPlace()
    {
        return view('order');
    }
    public function cartAdd($productId)
    {
        $orderId=session('orderId');
        if (is_null($orderId)){
            $orderId=Order::create()->id;
            session(['orderId'=> $orderId]);
        }
        else{
            $order=Order::find($orderId);
        }
//        $order->products()->add($productId);
       // dump($order->products());
       // dump($orderId);

         return view('order');
    }

}
