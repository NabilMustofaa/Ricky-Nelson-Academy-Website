@extends('layouts.main')
@include('partials.nav')
@section('content')
<section class="container py-5">

    <h1 class="text-center"> Jadwal Academy</h1>
    <h2 class="text-center mt-5">Select By</h2>
    <div class="select-container mt-0 mb-2">
        <a href ="/jadwal" class="btn btn-success me-2">Semua</a>
        <a href ="/jadwal/Latihan" class="btn btn-success me-2">Latihan</a>
        <a href ="/jadwal/Tanding" class="btn btn-success me-2">Tanding</a>
    </div>

    <table class="table">
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
@include('partials.footer')
@endsection
