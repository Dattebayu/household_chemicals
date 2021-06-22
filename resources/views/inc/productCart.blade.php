<div class="all-product">
  @foreach($product as $key)
    <div class="all-product__inner">
      <img class="all-product__image" src="images/products/{{ $key->image }}">
      <h3 class="all-product__title">{{ $key->code }}</h3>
      <p class="all-product__price">{{ $key->price }}р</p>
      <a href="{{ route('buy-product-cart', $key->id) }}" class="all-product__more-details-link">
        <button class="all-product__basket-button" type="submit">Купить</button>
      </a>
      <a href="{{ route('delete-product-cart', $key->id) }}" class="all-product__more-details-link">
        <button class="all-product__more-details-button" type="submit">
          Удалить из корзины
        </button>
      </a>
    </div>
  @endforeach
</div>
