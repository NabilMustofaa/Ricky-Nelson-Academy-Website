<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>{{ $title }}</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @yield('content')
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>OUR SOCIAL MEDIA</h3>
                <div class="share">
                    <a href="https://www.facebook.com/Ricky-Nelson-Academy-589447584854154/" target="_blank" class="fab fa-facebook-f"></a>
                    <a href="https://www.youtube.com/channel/UCLE40J2I-TmcH4xCjT9hYUQ" target="_blank" class="fab fa-youtube"></a>
                    <a href="https://www.instagram.com/rickynelsonacademy/?hl=en" target="_blank" class="fab fa-instagram"></a>
                </div>
            </div>

        </div>

        <h1 class="credit"> Created by <a href="https://www.linkedin.com/in/rakyankrisna/" target="_blank"> 100temankalian </a> all rights reserved! </h1>

    </section>
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e3c5fb8671.js" crossorigin="anonymous"></script>
</body>
</html>
