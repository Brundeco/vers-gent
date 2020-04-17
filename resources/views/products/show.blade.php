@extends('layout')

@section('content')

<div class="fixed-product-detail-image">
    <div class="header-overlay"></div>
    <img src="{{ $product->image }}" alt="">
</div>

<section class="product-detail-section">
    <div class="main-wrapper">
      <h2> {{ $product->slug }} </h2>
      <p> {{ $product->body }} </p>
    </div>
</section>

@yield('content')

@endsection