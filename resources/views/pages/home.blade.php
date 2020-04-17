@extends('layout')

@section('content')

<div class="fixed-bg-image">
    <div class="header-overlay"></div>
    <img src="{{url('/images/header-home.jpg')}}" alt="">
</div>

<section class="home-section">
    <div class="main-wrapper">
        {{-- <div class="dynamic-grid">
            @foreach ($images as $item)
            <div class="box">
                <img src="{{ url('images/collage/' . $item->getFilename()) }}">
                <div class="child-box"></div>
            </div>
            @endforeach
        </div> --}}
        <div id="container"></div>
    </div>
</section>
@endsection


{{-- @foreach ($images as $item)
<div class="box">
    <img src="{{ url('images/collage/' . $item->getFilename()) }}">
<div class="child-box"></div>
</div>
@endforeach --}}