<?php

namespace App\Http\Controllers;

use App\Models\Cotegory;
use App\Models\Product;
use Illuminate\Http\Request;

class MainContr extends Controller
{
    public function index()
    {
        $products=Product::get();
        return view('index' ,compact('products'));
    }
    public function cart()
    {
        return view('cart');
    }

    public function heart()
    {
        return view('heart');
    }
    public function item($category ,$itemName)
    {
        $products=Product::get();
        return view('item', ['itemName' => $itemName,] ,compact('products')) ;
    }
    public function categories()
    {
        $products=Product::get();
        $categories=Cotegory::get();
        return view('categories',compact('categories', 'products'));
    }

    public function category($code)
    {
        $category=Cotegory::where('code',$code)->first();
        $products=Product::where('category_id', $category->id)->get();
        return view('category', compact('category', 'products'));
    }

}
