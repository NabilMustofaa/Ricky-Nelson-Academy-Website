

@extends('layouts.main')
@section('content')
    <h1>HALAMAN Dashboard</h1>
    <img src="{{ asset('img/nabil.jpg') }}" alt="" width="200px">
    <h3>{{ $user["name"] }}</h3>
    <div class="table">
        <div class="row-container">
            <div class="table-headers">tanggal</div>
            <div class="table-headers">status</div>
        </div>
    
        @foreach ($statistik as $item)
        <div class="row-container">
            <div class="table-content">{{ $item['tanggal'] }}</div>
            <div class="table-content"> 
            @if ($item['status']==0)
            {{ 'tidak hadir' }}
            @else
            {{ 'hadir' }}
            @endif 
        </div>
        </div>
        @endforeach
</div>
@endsection