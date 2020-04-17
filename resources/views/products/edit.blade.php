@extends('layout')

@section('content')

<div class="form-wrapper">
    <h2>Update article</h2>
    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-wrapper">
            <textarea type="text" name="slug" rows="2" cols="50" value="" placeholder="Article slug"></textarea>
        </div>
        <div class="input-wrapper">
            <textarea type="text" name="title" rows="2" cols="50" value="" placeholder="Article title"></textarea>
        </div>
        <div class="input-wrapper">
            <textarea type="text" name="body" rows="4" cols="50" value="" placeholder="Article body text"></textarea>
        </div>
        <div class="input-wrapper">
            <textarea type="text" name="alt" rows="1" cols="50" value="" placeholder="Alt for image"></textarea>
        </div>
        <div class="input-wrapper">
            <input class="" type="file" name="image" placeholder="project title" id="" required>
        </div>
        <button type="submit" id="submitButton">Submit</button>
    </form>
</div>

@endsection