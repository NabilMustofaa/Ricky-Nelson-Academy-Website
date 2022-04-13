@extends('layouts.admin')

@section('content')
@include('partials.sidebar')

    <div class="container-fluid d-flex flex-column m-0 ">
        <p class="h2 ms-4 mt-3">Dashboard</p>
        <div class="container d-flex flex-column m-0 ">
            <div class="blur"></div>
            <div class="container d-flex flex-row m-0">
                <div class="card text-center m-2 p-5 d-flex flex-col align-items-center bg-white bg-opacity-50" style="width: 25%;">
                    <img src="{{ asset('img/nabil.jpg') }}" class="rounded float-start mx-auto d-block" width="200px">
                    <button type="button" class="btn btn-success mt-4">Edit Profile</button>
                </div>
                <div class="card m-2 py-2 px-2 bg-white bg-opacity-50" style="width: 80%;">
                    <p class="h5 m-2">Nama</p>
                    <p class="card p-2 bg-white bg-opacity-10">Muhammad Nabil Mustofa</p>
                    <p class="h5 m-2">Jabatan</p>
                    <p class="card p-2">Kepala Pelatih</p>
                    <p class="h5 m-2">Nomor Telephone</p>
                    <p class="card p-2">082011633046</p>
                    <p class="h5 m-2">Alamat</p>
                    <p class="card p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse veniam vitae illum exercitationem veritatis repellat iure, quod voluptas, quos consectetur laborum est libero architecto nisi provident enim iste, ullam voluptatem!</p>
                    
                </div>
            </div>
            <p class="h3 ms-4 mt-3">Jadwal Mendatang</p>
            <table class="table table-secondary table-hover w-auto mt-2 ms-4 me-4 border rounded overflow-hidden">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Jadwal</th>
                    <th scope="col">Level</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2022-03-01</td>
                    <td>Latihan Rutin 1</td>
                    <td>Pemula</td>
                  </tr>
                  <tr>
                    <td>2022-03-05</td>
                    <td>Latihan Rutin 2</td>
                    <td>Pemula</td>
                  </tr>
                  <tr>
                    <td>2022-03-06</td>
                    <td>Latihan Tanding 1</td>
                    <td>Pemula</td>
                  </tr>
                </tbody>
              </table>
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
    </div>
    
@endsection