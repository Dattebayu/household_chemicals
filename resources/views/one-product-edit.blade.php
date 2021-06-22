@extends('layouts/header')

@section('title', 'Admin panel')

@section('content')
  <section class="add-product">
    <form class="add-product__form" action="{{ route('edit-product-complite', $product->id) }}" method="post">
      @csrf
      <h2>Change product</h2>
      <input
        class="add-product__input"
        type="text"
        name="categories_id"
        id="categories_id"
        placeholder="Categories enter"
        value="{{ $product->categories_id }}">
      <input
        class="add-product__input"
        type="text"
        name="name"
        id="name"
        placeholder="Name enter"
        value="{{ $product->name }}">
      <input
        class="add-product__input"
        type="text"
        name="code"
        id="code"
        placeholder="Code enter"
        value="{{ $product->code }}">
      <input
        class="add-product__input"
        type="text"
        name="description"
        id="description"
        placeholder="Description enter"
        value="{{ $product->description }}">
      <input
        class="add-product__input"
        type="text"
        name="image"
        id="image"
        placeholder="Link enter on image"
        value="{{ $product->image }}">
      <input
        class="add-product__input"
        type="text"
        name="price"
        id="price"
        placeholder="Price enter"
        value="{{ $product->price }}">
      <input
        class="add-product__button"
        type="submit"
        value="Execute">
    </form>
  </section>
@endsection
