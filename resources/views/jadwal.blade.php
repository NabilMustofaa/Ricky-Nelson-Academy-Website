@extends('layouts.main')
@section('content')

<h1 style="margin: 5vh"> Jadwal Academy</h1>
<div class="select-container">
    <h4>Select by:</h4>
    <a href ="/jadwal" class="button-white">Semua</a>
    <a href ="/jadwal/Latihan" class="button-white">Latihan</a>
    <a href ="/jadwal/Tanding" class="button-white">Tanding</a>
</div>

<div class="table">
    <div class="row-container">
        <div class="table-headers">Nama Jadwal</div>
        <div class="table-headers">Tanggal</div>
        <div class="table-headers">Level</div>
    </div>

    @foreach ($jadwal as $item)
    <div class="row-container">
        <div class="table-content">{{ $item->namaJadwal }}</div>
        <div class="table-content">{{ $item->tanggalWaktu }}</div>
        <div class="table-content">{{ $item->levelJadwal }} </div>
    </div>  
    @endforeach
      

@endsection