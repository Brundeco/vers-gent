@extends('layout')

@section('content')

<div class="fixed-bg-image">
    <img src="{{url('/images/header-products.jpg')}}" alt="">
</div>

{{-- {{ dump(Request::segment(1) ) }} --}}
<section>
    <div class="main-wrapper">
        @foreach ($data as $item)
        <a href="">
            <div class="product-card">
                <div class="product-image">
                    <img src=" {{ $item->image }} " alt="">
                </div>
                <div class="product-slug">
                    <div class="color-layer"></div>
                    <h2> {{ $item->slug }} </h2>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>

@yield('content')

@endsection