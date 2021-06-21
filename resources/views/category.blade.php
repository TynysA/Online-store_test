@extends('layouts.app')
@section('title')
Интерент Магазин: Категории
@endsection
@section('content')
<div class="container category">
    <h1 class="all__products text-center">
         {{$category->name}}
    </h1>
    <h3 class="sub--title text-center">
        Количество товара:
        {{$products->count()}}
    </h3>
    <div class="products__inner">
        @foreach($products as $product)
            @include('includes.products' , compact('product'))
        @endforeach
    </div>
</div>

@endsection
