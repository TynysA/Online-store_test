@extends('layouts.app')
@section('title')
    Главная
@endsection
@section('content')

<div class="container">
    <div class="all__products">Все товары</div>
    <div class="products__inner">
        @foreach($products as $product)
            @include('includes.products' , compact('product'))
        @endforeach
    </div>
</div>

@endsection
