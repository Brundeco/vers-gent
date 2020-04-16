@extends('layout')

@section('content')

<form action="/products" method="POST" enctype="multipart/form-data">
    @csrf
    Slug: <textarea type="text" name="slug" rows="4" cols="50" value=""></textarea>
    Title: <textarea type="text" name="title" rows="4" cols="50" value=""></textarea>
    Body: <textarea type="text" name="body" rows="4" cols="50" value=""></textarea>
    Alt: <textarea type="text" name="alt" rows="4" cols="50" value=""></textarea>
    Image: <input class="" type="file" name="image" placeholder="project title" id="" required>
    <button type="submit">Submit</button>
</form>

@endsection