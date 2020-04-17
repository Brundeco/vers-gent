@extends('layout')

@section('content')

<div class="fixed-bg-image">
    <img src="{{url('/images/header-home.jpg')}}" alt="">
</div>

<section>
    <div class="main-wrapper">
        @foreach ($images as $item)
        <div class="box">
            <img src="{{ url('images/collage/' . $item->getFilename()) }}">
            <div class="child-box"></div>
        </div>
        @endforeach
    </div>
</section>
@endsection