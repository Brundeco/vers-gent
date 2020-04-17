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
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <div class="menu">
                <a href="#" class="change-on-scroll">
                    <i class="fas fa-bars change-on-scroll"></i>
                    menu
                </a>
            </div>
            <div class="logo">
                <a href="/" class="change-on-scroll">VERS</a>
            </div>
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
        </div>
    </nav>

    {{-- <img src="{{ url('storage/uploads/none.jpg')}}" alt="" class="fixed-bg-image"> --}}


    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>