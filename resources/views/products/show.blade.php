@extends('layout')

@section('content')

<div class="product-parent">
  <div class="product-image-detail">
    <img src="{{ $product->image }}" alt="">
  </div>
  <div class="product-color-shape"></div>
  <h2 class="product-slug-detail"> {{ $product->slug }}</h2>
  <div class="product-body-detail">
    <h3>{{ $product->slug }}</h3>
    <p>{{ nl2br(e($product->body)) }}</p>
  </div>
  <a href="/products" class="back-to-products">
    <p>Keer terug</p>
    <div></div>
  </a>
</div>

@endsection