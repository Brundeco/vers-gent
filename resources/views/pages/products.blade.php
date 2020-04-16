@extends('layout')

@section('content')

<h1>Products page</h1>

@foreach ($data as $item)
<p> {{ $item->body }} </p>

@endforeach


@endsection