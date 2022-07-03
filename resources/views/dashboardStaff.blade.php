@extends('layouts.admin')

@section('content')
@include('partials.sidebar')
    <div class="container-fluid d-flex flex-column mside ">
        <p class="h2 ms-4 mt-3">Staff</p>
        <div class="d-flex me-4 mt-3 justify-content-between">
            <a href= "staff/create" class="btn btn-danger d-flex">Tambah Staff</a>
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
      
        <table class="table table-secondary table-hover w-auto mt-2 border rounded overflow-hidden">
            <thead>
              <tr>
                <th scope="col">Nama Staff</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $staff as $item)
              <tr>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->Jabatan }}</td>
                <td>{{ $item->NoHp }}</td>
                <td>{{ $item->user->email }}</td>
                <td>
                    <div>
                        <a href="/dashboard/staff/{{ $item->id }}" class="btn btn-warning">Detail</a>
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