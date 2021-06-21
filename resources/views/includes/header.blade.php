@section('header')
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="{{route('index')}}" class="header__logo index"><i class="fas fa-store-alt"> Интернет магазин</i></a>
            <div class="header__links">
                <a href="/cart" class="header__item" role="shop-cart">
                    Корзина <i class="fas fa-shopping-cart"></i></a>
                <a href="{{route('heart')}}" class="header__item" role="heart">
                    Желания <i class="far fa-heart"></i></a>
                <a href="{{route('categories')}}" class="header__item" role="categories">
                    Категории <i class="fas fa-bars"></i></a>
            </div>

        </div>
    </div>
</header>
