@extends('layouts.admin')

@section('content')
@include('partials.sidebarUser')
    <div class="container-fluid d-flex flex-column mside ">
        <p class="h2 ms-4 mt-3">Jadwal</p>
        <div class="d-flex me-4 mt-3 justify-content-between">
            <a href= "jadwal/create"class="btn btn-success d-flex">Buat Jadwal</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
        
      @if (session()->has('success'))
      <div class="alert alert-success mt-2" role="alert">
          {{ session('success') }}
      </div>
      @endif
      
      <table class="table table-active table-hover w-auto mt-2 border rounded overflow h-50">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Jadwal</th>
            <th scope="col">Level</th>
            <th scope="col" style="width: 25%">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $jadwal as $item)
          <tr>
            <td>{{ $item->jadwal->tanggalJadwal }} / {{ $item->jadwal->waktuJadwal }}</td>
            <td>{{ $item->jadwal->namaJadwal }}</td>
            <td>{{ $item->jadwal->levelJadwal }}</td>
            <td>
                <div>
                    <form action="/beranda/statistik/{{ $item->id }}" method="post">
                        @method('put')
                        @csrf
                        <select id="status" name="status" class="form-control custom-select w-50">
                            @if ( $item->status == 0)
                            <option value="0" selected>Tidak Hadir</option>
                            @else
                            <option value="0" >Tidak Hadir</option>
                            @endif
                            @if ($item->status == 1)
                            <option value="1" selected>Hadir</option>
                            @else
                            <option value="1">Hadir</option>
                            @endif
                        </select>
                        <button class="btn btn-warning"> Update </button>     
                    </form>
                </div>
            </td>
          </tr>
          @endforeach  
        </tbody>
      </table>
          <ul class="pagination mx-auto">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
    </div>

@endsection