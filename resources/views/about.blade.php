@extends('layouts.main')
@include('partials.nav')
@section('content')
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>About Us</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/about-hero.svg') }}" alt="About Hero">
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Our Contact</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h2 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2 class="h5 mt-4 text-center">Telepon</h2>
                <p class="text-center">0812345</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h2 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                <h2 class="h5 mt-4 text-center">Email</h2>
                <p class="text-center">rnacompany@mail.com</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h2 text-success text-center"><i class="fa fa-percent"></i></div>
                <h2 class="h5 mt-4 text-center">Address</h2>
                <p class="text-center">Jl. Abu Tolib</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h2 text-success text-center"><i class="fa fa-user"></i></div>
                <h2 class="h5 mt-4 text-center">Open Hour</h2>
                <p class="text-center">08.00 - 15.00</p>
            </div>
        </div>
    </div>
</section>

@endsection
