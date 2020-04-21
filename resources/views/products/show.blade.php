@extends('layout')

@section('content')

<div class="fixed-product-detail-image">
  <div class="header-overlay"></div>
  <img src="{{ $product->image }}" alt="">
  <h2 class="header-caption"> {{ $product->slug }} </h2>
</div>

<section class="product-detail-section">
  <div class="main-wrapper">
    <div class="product-wrapper">
      <h2> {{ $product->slug }} </h2>
      <p> {{ nl2br(e($product->body)) }} </p>
    </div>
  </div>
</section>

@yield('content')

@endsection