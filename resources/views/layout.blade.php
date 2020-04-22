<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vers Gent</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
        integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/tgs4bgm.css">
    <link rel="stylesheet" href="https://use.typekit.net/tgs4bgm.css">
    {{-- <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
    <header>
        <div class="menu-parent">
            <div class="menu-child">
                <div class="pagelinks">
                    <a class="{{'opacity-link strike-through'}}" href="/">Home</a>
                    <a class="{{'opacity-link strike-through'}}" href="/products">Producten</a>
                    <a class="{{'opacity-link strike-through'}}" href="/">Contact</a>
                </div>
                <div class="sociallinks">
                    <a class="{{'opacity-link strike-through'}}" href="">Facebook</a>
                    <a class="{{'opacity-link strike-through'}}" href="">Instagram</a>
                </div>
            </div>
        </div>
        <a class="toggle-menu-out">
            <div class="close-bar close-bar-top"></div>
            <div class="close-bar close-bar-bottom"></div>
        </a>
        <nav>
            <div class="{{ isset($header) ? 'detail-nav-bg' : 'detail-nav-no-bg' }}">
                <div class="nav-wrapper">
                    <a class="toggle-menu-in">
                        <div class="toggle-menu-in-el change-on-scroll">
                            @if(isset($header))
                            <i class="fas fa-bars header-black change-on-scroll"></i>
                            <p class="header-black change-on-scroll">Menu</p>
                            @else
                            <i class="fas fa-bars change-on-scroll"></i>
                            <p>Menu</p>
                            @endif
                        </div>
                    </a>
                    <div class="logo">
                        @if (isset($header))
                        <a href="/" class="header-black">VERS</a>
                        @else
                        <a href="/" class="change-on-scroll">VERS</a>
                        @endif
                    </div>
                    <div class="socials">
                        @if (isset($header))
                        <a href="">
                            <i class="social-link fab fa-facebook-f change-on-scroll header-black"></i>
                        </a>
                        <a href="">
                            <i class="social-link fab fa-instagram change-on-scroll header-black"></i>
                        </a>
                        @else
                        <a href="">
                            <i class="social-link fab fa-facebook-f change-on-scroll"></i>
                        </a>
                        <a href="">
                            <i class="social-link fab fa-instagram change-on-scroll"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

        </nav>
        <div class="scroll-down">
            <p>Scroll voor meer</p>
            <div class="loading"></div>
        </div>
    </header>

    @yield('content')

    <input type="hidden" id="pageMeta" value="<?php if(!empty($hide)) { echo $hide;} ?>">

    <svg class="cursor" width="280" height="280" viewBox="0 0 280 280">
        <defs>
            <filter id="filter-1" x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
                <feTurbulence type="fractalNoise" baseFrequency="0.02 0.15" numOctaves="3" result="warp" />
                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="0" in="SourceGraphic" in2="warp" />
            </filter>
        </defs>
        <circle class="cursor__inner" cx="140" cy="140" r="50" />
    </svg>

    <footer>
        <div class="footer-wrapper">
            <p>© 2020 Vers - Gezonde Commerce</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>