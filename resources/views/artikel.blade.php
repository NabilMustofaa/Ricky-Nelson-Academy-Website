@extends('layouts.main')
@include('partials.nav')
@section('content')
<section class="container py-5">
    <div class="row mb-4">
        <div class="card p-4">
            <h2>Anak Anjing hilang di lapangan</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere doloremque aut fugit, obcaecati ipsa
                est consequuntur quos! Temporibus placeat, necessitatibus mollitia eveniet modi dicta dolor natus,
                assumenda repellendus, vitae impedit?</p>
            <p class="mb-0">
                <a href="" class="btn btn-success">Lihat Selengkapnya</a>
            </p>
        </div>
    </div>
    <div class="row mb-4">
        <div class="card p-4">
            <h2>Anak Babi hilang di pinggir tiang</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere doloremque aut fugit, obcaecati ipsa
                est consequuntur quos! Temporibus placeat, necessitatibus mollitia eveniet modi dicta dolor natus,
                assumenda repellendus, vitae impedit?</p>
            <p class="mb-0">
                <a href="" class="btn btn-success">Lihat Selengkapnya</a>
            </p>
        </div>
    </div>
    @foreach ($artikel as $item)
    <div class="row mb-4">
        <div class="card p-4">
            <h2>{{ $item->judul_artikel }}</h2>
            <p>{{ $item->highlight_artikel }}</p>
            <p class="mb-0">
                <a href="" class="btn btn-success">Lihat Selengkapnya</a>
            </p>
        </div>
    </div>
    @endforeach
</section>

@endsection
