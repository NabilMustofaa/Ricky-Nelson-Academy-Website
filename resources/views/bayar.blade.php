@extends('layouts.main')

@section('content')
@include('partials.nav')
<section style="min-height: 75vh">
    <div class="container">
        <div class="my-auto text-center">
            <H1 class="mt-5">Hello, {{ auth()->user()->name }}</H1>
            <p> Maaf anda belum menyelesaikan pembayaran tolong lakukan pembayaran melalui transfer pada rekening berikut:</p>
            <p>BCA : 357822011041241 a/n Nabil Mustofa</p>
        </div>
    </div>
</section>
@endsection