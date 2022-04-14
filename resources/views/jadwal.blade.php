@extends('layouts.main')
@include('partials.nav')
@section('content')
<section class="container py-5">

    <h1 class="text-center"> Jadwal Academy</h1>
    <div class="select-container mb-2">
        <h4>Select by:</h4>
        <a href ="/jadwal" class="btn btn-success">Semua</a>
        <a href ="/jadwal/Latihan" class="btn btn-success">Latihan</a>
        <a href ="/jadwal/Tanding" class="btn btn-success">Tanding</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Jadwal</th>
                <th>Tanggal</th>
                <th>Level</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($jadwal as $item)
            <tr>
                <td>{{ $item->namaJadwal }}</td>
                <td>{{ $item->tanggalWaktu }}</td>
                <td>{{ $item->levelJadwal }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
