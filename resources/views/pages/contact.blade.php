@extends('layout')

@section('content')

<div id="animatedLayer">
    <div id="animatedLayerChild"></div>
    <div id="animatedLayerChildTwo">
        <h1>Wij staan klaar voor jullie</h1>
    </div>
</div>

<section class="contact-section">
    <div class="contact-left">
        <form class="contact-form-wrapper" action="{{ route('contact.post') }}" method="post">
            @csrf
            <h1>Contacteer ons</h1>
            <div class="contact-input-box">
                <h3>Naam</h3>
                <input type="text" placeholder="Voer hier je naam in" name="name">
            </div>
            <div class="contact-input-box">
                <h3>Email</h3>
                <input type="text" placeholder="Voer hier je emailadres in" name="email">
            </div>
            <div class="contact-input-box">
                <h3>Onderwerp</h3>
                <input type="text" placeholder="Waarover gaat je vraag?" name="subject">
            </div>
            <div class="contact-input-box">
                <h3>Bericht</h3>
                <textarea name="" id="" cols="30" rows="3" placeholder="Stel je vraag hier" name="message"></textarea>
            </div>
            <div class="contact-input-box">
                <input type="submit" value="Verzend">
            </div>
        </form>
    </div>

    <div class="contact-right">
        <img src="{{ url('/images/contact-page.jpg') }}" alt="">
        <div class="white-overlay">
        <h2>Openingsuren</h2>
            <div class="hours-open">
                <div class="center-hours">
                    <div>
                        <p>Dinsdag tot vrijdag</p>
                        <p>09u00 - 13u30 & 15u00 - 19u00</p>
                    </div>
                    <div>
                        <p>Zaterdag</p>
                        <p>09u00 - 13u30 & 15u00 - 18u00</p>
                    </div>
                    <div>
                        <p>Zondag & maandag</p>
                        <p>Gesloten</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
