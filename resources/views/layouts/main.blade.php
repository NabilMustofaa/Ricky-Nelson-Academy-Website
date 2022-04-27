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
                <h3>Tentang Kami</h3>
                <p>Swab-in Merupakan Website Untuk Melakukan Test COVID-19 Secara Mandiri. Hubungi Kami Guna Info Lebih
                    Lanjut.</p>
            </div>

            <div class="box">
                <h3>Lokasi</h3>
                <a href="#">Surabaya</a>
                <a href="#">Jakarta</a>
                <a href="#">Semarang</a>
                <a href="#">Bandung</a>
                <a href="#">Solo</a>
                <a href="#">Banten</a>
                <a href="#">Sidoarjo</a>
            </div>

            <div class="box">
                <h3>Kontak Informasi</h3>
                <p> <i class="fas fa-phone"></i> +62-8123-6905-920 </p>
                <p> <i class="fas fa-envelope"></i> rickynelson@gmail.com </p>
                <p> <i class="fas fa-map-marker-alt"></i> Jatim, Mojokerto </p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
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
</body>
</html>
