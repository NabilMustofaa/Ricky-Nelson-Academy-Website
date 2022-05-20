@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column mside">
    <p class="h2 ms-4 mt-3">Buat Jadwal</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>


    <form method="post" action="/dashboard/jadwal">
       
        
        @csrf
        <div class="form-group">
            <label class="h6" for="namaJadwal">Nama Jadwal</label>
            
            <input type="text" class="form-control @error('namaJadwal') is-invalid @enderror" id="namaJadwal" name="namaJadwal"placeholder="" autofocus value="{{ old('namaJadwal') }}">
            @error('namaJadwal')
                <div class="invalid-feedback">
                    Masukkan Nama Jadwal
                </div>
            @enderror
        </div>
        <div class="row justify-content-between">
        <div class="form-group col-md-6">
            <label class="h6" for="tanggalJadwal">Pilih tanggal</label>
            <input placeholder="Select date" type="date" id="tanggalJadwal" name="tanggalJadwal" class="form-control @error('tanggalJadwal') is-invalid @enderror" value="{{ old('tanggalJadwal') }}">
            @error('tanggalJadwal')
                <div class="invalid-feedback">
                    Pilih Tanggal
                </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label class="h6" for="waktuJadwal">Pilih waktu</label>
            <input placeholder="Select date" type="time" id="waktuJadwal" name="waktuJadwal" class="form-control @error('waktuJadwal') is-invalid @enderror" value="{{ old('waktuJadwal') }}" >
            @error('waktuJadwal')
            <div class="invalid-feedback">
                Pilih Tanggal
            </div>
            @enderror
        </div>
        </div>
        <div class="row justify-content-between">
            <div class="form-group col-md-6">
                <label class="h6" for="levelJadwal">Tingkat</label>
                <select id="levelJadwal" name="levelJadwal" class="form-control custom-select">
                  <option value="Pemula">Pemula</option>
                  <option value="Menengah">Menengah</option>
                  <option value="Profesional">Profesional</option>
                </select>
        </div>
            <div class="form-group col-md-6">
                <label class="h6" for="typeJadwal">Type</label>
                <select class="form-control custom-select" id="typeJadwal" name="typeJadwal">
                  <option value="Latihan">Latihan</option>
                  <option value="Tanding">Tanding</option>
            </select>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit form</button>
    </form>
</div>
@endsection
