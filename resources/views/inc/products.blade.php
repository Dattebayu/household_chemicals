<div class="all-product">
  @foreach($product as $key)
    <div class="all-product__inner">
        <img class="all-product__image" src="images/products/{{ $key->image }}">
        <h3 class="all-product__title">{{ $key->code }}</h3>
        <p class="all-product__price">{{ $key->price }}р</p>
        <a href="{{ route('Add-In-Cart', $key->id) }}" class="all-product__more-details-link">
            <button class="all-product__basket-button" type="submit">Корзина</button>
        </a>
        <a href="{{ route('more-details', $key->id) }}" class="all-product__more-details-link">
            <button class="all-product__more-details-button" type="submit">
            Подробнее
            </button>
        </a>
    </div>
  @endforeach
</div>
