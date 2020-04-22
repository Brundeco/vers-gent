@extends('layout')

@section('content')

<div class="fixed-bg-image">
    <div class="header-overlay"></div>
    <img src="{{url('/images/header-products.jpg')}}" alt="">
    <h2 class="header-caption">Ons assortiment aan producten</h2>
</div>


{{-- {{ dump(Request::segment(1) ) }} --}}
<section class="home-section">
    <div class="main-wrapper">
        @foreach ($data as $item)
        @if($loop->iteration % 2 == 0)
        <a href="{{'/products/'.$item->id.'/show'}}">
            <div class="product-card">
                <div class="product-image pi-left">
                    <img src=" {{ $item->image }} " alt="">
                    {{-- <div class="product-overlay"></div> --}}
                </div>
                <div class="product-slug ps-right">
                    <div class="color-layer"></div>
                    <h2> {{ $item->slug }} </h2>
                </div>
            </div>
        </a>
        @else
        <a href="{{'/products/'.$item->id.'/show'}}">
            <div class="product-card">
                <div class="product-image pi-right">
                    <img src=" {{ $item->image }} " alt="">
                    {{-- <div class="product-overlay"></div> --}}
                </div>
                <div class="product-slug ps-left">
                    <div class="color-layer"></div>
                    <h2> {{ $item->slug }} </h2>
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
</section>

@yield('content')

@endsection