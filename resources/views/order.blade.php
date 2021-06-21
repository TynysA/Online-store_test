@extends('layouts.app')
@section('title')
    Корзина
@endsection
@section('content')
    <div class="block">
        <div class="container">
            <div class="blocks__inner">
                <div class="block__item first">ТОВАРЫ</div>
                <div class="block__item plus-mines">КОЛ - ВО</div>
                <div class="block__item last">ЦЕНА</div>
            </div>
        </div>
        {{dump($orderId)}}
        <div class="basket">
            <div class="container">
                <div class="baket__inner">
                    @foreach($products as $product)
                        @if($productId==$product->id)
                            <div class="basket__item">
                                <div class="basket__img">
                                    <img src="{{$product->image}}" alt="">
                                </div>
                                <div class="basket__count">
                                    <div class="count">1</div>
                                    <div class="icon icon__minos"><i class="fas fa-minus"></i></div>
                                    <div class="icon icon__plus"><i class="fas fa-plus"></i></div>
                                </div>
                                <div class="basket__price">{{$product->price}} тг</div>
                            </div>
                        @endif
                     @endforeach


                </div>
            </div>

        </div>

    </div>
@endsection
