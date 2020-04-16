@extends('layout')

@section('content')

<div class="fixed-bg-image">
    <img src="{{url('/images/header-home.jpg')}}" alt="">
</div>
{{-- {{ dump(Request::segment(1) ) }} --}}
<section>
    <div class="main-wrapper">
        <div class="box">
            <div class="child-box"></div>
        </div>
        <div class="spacer" style="height:100vw"></div>
        <div class="box">
            <div class="child-box"></div>
        </div>
    </div>

</section>
@endsection