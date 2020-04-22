@extends('layout')

@section('content')

<div class="fixed-bg-image">
    <div class="header-overlay"></div>
    <img src="{{url('/images/header-home.jpg')}}" class="move-image" alt="">
    <h2 class="header-caption">Ons verhaal</h2>
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
    {{-- <div id="container"></div> --}}
    <div id="grid">
        <div class="gallery-fx g-row-1">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[6]->getFilename()) }}">
                <img class="top-image-fx" src="{{ url('images/collage/' . $images[6]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
        <div class="gallery-fx g-row-2">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[7]->getFilename()) }}">
                <img class="top-image-fx" src="{{ url('images/collage/' . $images[7]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
        <div class="gallery-fx g-row-3">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[2]->getFilename()) }}">
                <img class="top-image-fx" src="{{ url('images/collage/' . $images[2]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
        <div class="gallery-fx g-row-4">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[3]->getFilename()) }}">
                <img class="top-image-fx" src="{{ url('images/collage/' . $images[3]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
        <div class="gallery-fx g-row-5">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[8]->getFilename()) }}">
                <img class="top-image-fx" src="{{ url('images/collage/' . $images[8]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection


{{-- @foreach ($images as $item)
<div class="box">
    <img src="{{ url('images/collage/' . $item->getFilename()) }}">
<div class="child-box"></div>
</div>
@endforeach --}}