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
        <div class="g-row-1">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[0]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
        <div class="g-row-2">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[1]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
        <div class="g-row-3">
            <div class="box">
                <img src="{{ url('images/collage/' . $images[2]->getFilename()) }}">
                <div class="child-box"></div>
            </div>
        </div>
        {{--
            <div class="g-row-3">
                
            </div>
            <div class="g-row-4">
                
            </div>
            <div class="g-row-5">
                
            </div>
            <div class="g-row-6">
                
            </div> --}}
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