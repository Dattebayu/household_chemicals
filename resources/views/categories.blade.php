@extends('layouts/header')

@section('title', 'Categories')

@section('content')
<section class="categories">
  <div class="categories__inner">
    @foreach($categories as $key)
    <a class="categories__inner-link" href="{{ $key->id }}">
      <img class="categories__inner-image" src="images/categories/{{ $key->image }}" alt="{{ $key->code }}">
      <p class="categories__inner-text">{{ $key->description }}</p>
    </a>
  @endforeach
  </div>
</section>

@endsection
