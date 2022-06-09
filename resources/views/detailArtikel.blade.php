@extends('layouts.main')
@include('partials.nav')
@section('content')
        
    <div class="container">
        @if ($artikel->image)
        <img class="img-fluid mx-auto d-flex mt-5 w-75"  src="{{ asset('storage/' . $artikel->image) }}">
        @else
        <img class="img-fluid img-preview col-sm-4 my-2">
        @endif
        <h1 class="my-4">{{ $artikel->judul_artikel }}</h1>
        <p >{!! $artikel->isi_artikel !!}</p>
    </div>
    @include('partials.footer')
@endsection