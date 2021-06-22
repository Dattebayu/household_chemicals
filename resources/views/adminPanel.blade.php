@extends('layouts/header')

@section('title', 'Admin panel')

@section('content')
<section class="add-product">
  <form class="add-product__form" action="{{ route('addProduct') }}" method="post">
    @csrf
    <h2>Add product</h2>
    <input class="add-product__input" type="text" name="categories_id" id="categories_id" placeholder="Categories enter" >
    <input class="add-product__input" type="text" name="name" id="name" placeholder="Name enter" >
    <input class="add-product__input" type="text" name="code" id="code" placeholder="Code enter" >
    <input class="add-product__input" type="text" name="description" id="description" placeholder="Description enter" >
    <input class="add-product__input" type="text" name="image" id="image" placeholder="Link enter on image" >
    <input class="add-product__input" type="text" name="price" id="price" placeholder="Price enter" >
    <input class="add-product__button" type="submit" value="Execute" >
  </form>
</section>
@endsection
