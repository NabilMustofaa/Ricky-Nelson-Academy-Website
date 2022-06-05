@extends('layouts.admin')

@section('content')
@include('partials.sidebar')
    <div class="container-fluid d-flex flex-column mside ">
      <div class="d-flex justify-content-between">
        <p class="h2 ms-4 mt-3">Peserta</p>
        <div class="d-flex me-4 mt-3 justify-content-between">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
      </div>
        
        
      @if (session()->has('success'))
      <div class="alert alert-success mt-2" role="alert">
          {{ session('success') }}
      </div>
      @endif
      
        <table class="table table-secondary table-hover w-auto mt-2 border rounded overflow-hidden">
            <thead>
              <tr>
                <th scope="col">Nama Pemain</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $peserta as $item)
              <tr>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->tempatLahir }}</td>
                <td>{{ $item->tanggalLahir }}</td>
                <td>
                    <div>
                        <form action="/dashboard/pendaftar/{{ $item->id }}" method="post">
                            @method('put')
                            @csrf
                            <select id="status" name="statusPembayaran" class="form-control custom-select w-50">
                                @if ( $item->statusPembayaran == 0)
                                <option value="0" selected>Belum Dibayar</option>
                                @else
                                <option value="0" >Belum Dibayar</option>
                                @endif
                                @if ($item->statusPembayaran == 1)
                                <option value="1" selected>Telah Dibayar</option>
                                @else
                                <option value="1">Telah Dibayar</option>
                                @endif
                            </select>
                    </div>
                </td>
                <td>
                    <div>
                        <button class="btn btn-warning"> Update </button>
                    </div>

                </td>
            </form>
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