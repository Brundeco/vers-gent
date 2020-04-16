@extends('layout')

@section('content')

<h1>Products page</h1>

@foreach ($data as $item)
    <p> {{ $item->slug }} </p>
    <p> {{ $item->title }} </p>
    <p> {{ $item->body }} </p>
    <img src=" {{ $item->image }} " alt="">
@endforeach

@yield('content')

@endsection