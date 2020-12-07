@extends('layout')

@section('content')

<div class="fixed-bg-image">
    <div class="header-overlay"></div>
    <img src="{{url('/images/header-home.jpg')}}" class="move-image" alt="">
    <h2 class="header-caption">Ons verhaal</h2>
</div>

<div id="animatedLayer">
    <div id="animatedLayerChild"></div>
    <div id="animatedLayerChildTwo">
        <h1>Welkom bij Vers Gent</h1>
    </div>
</div>

<section class="home-section">
    <div class="main-wrapper">
        <div class="about-section">
            <div class="about-image-block">
                <div class="about-bg-color-layer"></div>
                <img src="{{url('/images/about-vers-shop.jpg')}}" alt="">
                <div class="child-box-except"></div>
            </div>
            <div class="about-text-block">
                <h2>Het verhaal van Vers Gent</h2>
                <p>Eysden - September 1936 - Opening ‘Versmarkt Schreurs – Haumont’ op de Pauwengraaf, zie Foto, eerste huis rechts. Mijn bompa, Hubert Schreurs, opent zijn kruidenierszaak met vooral verse groenten en fruit van de ouderlijke boerderij. Na de oorlog wordt het meer een echte kruidenierszaak met algemene voeding. Mijn wieg stond op het eerste verdiep omdat mijn mama de klanten bediende. Als kind heb ik er veel gesnoept en als jonge puber mocht ik enkele keren met bompa naar de vroegmarkt in Mechelen. Vermoedelijk ligt hier de kiem van VERS Gent … </p>
                {{-- <a href="">Lees meer</a> --}}
            </div>
        </div>
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