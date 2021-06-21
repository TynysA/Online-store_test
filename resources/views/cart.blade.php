@extends('layouts.app')
@section('title')
    Корзина
@endsection

@section('content')
    <h1 class="text-center fz-3_l">Корзина</h1>
    <p class="text-center fz-2">Оформление заказа</p>

    <div class="empty">
        <div class="container flex">
            <div class="empty__text">
                Ваша Корзина ПУста!

            </div>
            <a href="{{route('index')}}" class="empty__gr">
                Заполните её чем то <span>&#x1f609</span>
            </a>
        </div>

    </div>
@endsection
