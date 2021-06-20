@extends('layouts.app')
@section('title')
    {{$itemName}}
@endsection
@section('content')
    @foreach($products as $product)
        @if($itemName==$product->code)
            <div class="item">
                <div class="container">
                    <div class="item__inner">
                        <div class="item__text">
                            <!-- <div class="item__title">Ipone 12 Pro Max</div> -->
                            <div class="item__title">{{$product->name}}</div>
                            <div class="item__price">{{$product->price}} тг</div>
                        </div>
                        <div class="item__img"><img src="{{$product->image}}" alt=""></div>
                        <ul class="item__info">
                            {{$product->description}}
                        </ul>
                        <a href="{{route('cart')}}"><button type="submit" class="item__cart">Добывить в карзину</button></a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
