@extends('layouts.main')
@include('partials.nav')
@section('content')
<section class="container py-5">

    <h1 class="text-center"> Jadwal Academy</h1>
    <div class="d-flex flex-row align-items-center mt-5">
        <h2 class="text-center me-4">Filter :</h2>
        <a href ="/jadwal" class="btn {{ Request::path() ==  'jadwal' ? 'btn-success' : 'btn-secondary' }} me-2">Semua</a>
        <a href ="/jadwal/Latihan" class="btn {{ Request::path() ==  'jadwal/Latihan' ? 'btn-success' : 'btn-secondary' }} me-2">Latihan</a>
        <a href ="/jadwal/Tanding" class="btn {{ Request::path() ==  'jadwal/Tanding' ? 'btn-success' : 'btn-secondary' }} me-2">Tanding</a>
    </div>
    <div class="select-container mt-0 mb-2">
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Jadwal</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Level</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($jadwal as $item)
            <tr>
                <td>{{ $item->namaJadwal }}</td>
                <td>{{ $item->tanggalJadwal }}</td>
                <td>{{ $item->waktuJadwal }}</td>
                <td>{{ $item->levelJadwal }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
