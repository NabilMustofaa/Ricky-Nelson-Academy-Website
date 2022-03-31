

@extends('layouts.main')
@section('content')
    <h1>HALAMAN Dashboard</h1>
    <h3>{{ $user["nama"] }} / {{ $user["posisi"] }}</h3>
    <div class="table">
        <div class="row-container">
            <div class="table-headers">tanggal</div>
            <div class="table-headers">status</div>
        </div>
    
        @foreach ($statistik as $item)
        <div class="row-container">
            <div class="table-content">{{ $item['tanggal'] }}</div>
            <div class="table-content">{{ $item['status'] }}</div>
        </div>
        @endforeach
</div>
@endsection