@extends('layouts/header')

@section('title', 'Admin panel')

@section('content')
  <div class="all-product">
    <div class="all-product__inner">
      <img class="all-product__image" src="../images/products/{{ $product->image }}">
      <h3 class="all-product__title">{{ $product->code }}</h3>
      <p class="all-product__price">{{ $product->price }}р</p>
      <a href="{{ route('edit-product', $product->id) }}" class="all-product__basket-link">
        <button class="all-product__basket-button" type="submit">Изменить</button>
      </a>
      <a href="{{ route('delete-product', $product->id) }}" class="all-product__more-details-link">
        <button class="all-product__more-details-button" type="submit">Удалить товар</button>
      </a>
    </div>33
  </div>
@endsection
