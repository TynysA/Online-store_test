<div class="products">
    <div class="container">
        <div class="all__products">Все товары</div>
        <div class="cotegories__inner">
            <div class="cotegories">
                <div class="cotegories__item">
                    @foreach($categories as $category)
                        <a href="{{route('category', $category->code )}}" class="cotegories__filter"><i class="{{$category->image}}"></i>{{$category->name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="products__inner">
                @foreach($products as $product)
                    @include('includes.products' , compact('product'))
                @endforeach
            </div>
        </div>

    </div>
</div>
