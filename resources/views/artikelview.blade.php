@extends('layouts.admin')

@section('content')
@include('partials.sidebar')

    <div class="container-fluid d-flex flex-column mside ">
        <p class="h2 ms-4 mt-3">Dashboard</p>
        
        <div class="d-flex flex-column m-0 ">
            <div class="d-flex flex-row m-0">
                <img class="img-fluid img-preview col-sm-4 my-2 d-flex" src="{{ asset('uploads/' . $artikel->image) }}">
                <h1>{{ $artikel->judul_artikel }}</h1>
                <p>{{ $artikel->isi_artikel }}</p>
            </div>
        </div>
    </div>
        {{-- <h3 >{{ $peserta->User->name }} /{{ $peserta->posisi }}</h3>
        <div class="table">
            <div class="row-container">
                <div class="table-headers">nama Jadwal</div>
                <div class="table-headers">tanggal</div>
                <div class="table-headers">status</div>
            </div>
        
            @foreach ($statistik as $item)
            <div class="row-container">
                <div class="table-content">{{ $item->Jadwal->namaJadwal }}</div>
                <div class="table-content">{{ $item->Jadwal->tanggalWaktu }}</div>
                <div class="table-content"> 
                @if ($item->status==0)
                {{ 'tidak hadir' }}
                @else
                {{ 'hadir' }}
                @endif 
                </div>
            </div>
            @endforeach
            </div> --}}

@endsection