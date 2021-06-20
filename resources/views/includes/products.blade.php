 <div class=" product__item">
     <div class="product__img"><img src="{{$product->image}}" alt=""></div>
     <div class="product__title">{{$product->name}}</div>
     <div class="product__price">{{$product->price}} тг</div>
     <div class="prodect__links">
         <a href="/cart" class="product__link product__cart">
             <i class="product__icon fas fa-shopping-cart"></i>
         </a>
         <a href="/heart" class="product__link product__like">
             <i class="product__icon far fa-heart"></i>
         </a>
         <a href="/{{$product->getCotegory()->code}}/{{$product->code}}" class="product__link product__info">
             <i class="product__icon fas fa-info"></i>
         </a>
{{--         {{$product->getCotegory()->name}}--}}
     </div>
 </div>


