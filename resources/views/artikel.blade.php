@extends('layouts.main')
@include('partials.nav')
@section('content')
<section class="container py-5">
    @foreach ($artikel as $item)
    <div class="row mb-4">
        <div class="card p-4">
            <h2>{{ $item->judul_artikel }}</h2>
            <p>{{ $item->highlight_artikel }}</p>
            <p class="mb-0">
                <a href="/artikel/{{ $item->id }}" class="btn btn-success">Lihat Selengkapnya</a>
            </p>
        </div>
    </div>
    @endforeach
</section>
@endsection
