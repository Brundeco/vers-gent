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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
    <header>
        <div class="menu-parent">
            <div class="menu-child"></div>
        </div>
        <nav>
            <div class="nav-wrapper">
                <div class="socials">
                    <a href="https://www.facebook.com/aft.tennis/">
                        <i class="social-link fab fa-facebook-f change-on-scroll"></i>
                    </a>
                    <a href="https://twitter.com/aftofficiel">
                        <i class="social-link fab fa-twitter change-on-scroll"></i>
                    </a>
                    <a href="http://www.aftnet.be/">
                        <i class="social-link fab fa-instagram change-on-scroll"></i>
                    </a>
                </div>
                <div class="logo">
                    <a href="/" class="change-on-scroll">VERS</a>
                </div>
                <div class="menu">
                    <a href="#" class="change-on-scroll">
                        <i class="fas fa-bars change-on-scroll"></i>
                        menu
                    </a>
                </div>
            </div>
        </nav>
        <div class="scroll-down">
            <p>Scroll voor meer</p>
            <div class="loading"></div>
        </div>
    </header>

    @yield('content')

    <svg class="cursor" width="280" height="280" viewBox="0 0 280 280">
        <defs>
            <filter id="filter-1" x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
                <feTurbulence type="fractalNoise" baseFrequency="0.02 0.15" numOctaves="3" result="warp" />
                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="0" in="SourceGraphic" in2="warp" />
            </filter>
        </defs>
        <circle class="cursor__inner" cx="140" cy="140" r="50" />
    </svg>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>