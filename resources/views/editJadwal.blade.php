@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column mside">
    <p class="h2 ms-4 mt-3">Edit Jadwal</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    <form method="post" action="/dashboard/jadwal/{{ $jadwal->id }}">
        @method('put')
        @csrf
        <div class="form-group">
            <label class="h6" for="namaJadwal">Nama Jadwal</label>
            
            <input type="text" class="form-control @error('namaJadwal') is-invalid @enderror" id="namaJadwal" name="namaJadwal"placeholder="" autofocus value="{{ old('namaJadwal',$jadwal->namaJadwal) }}">
            @error('namaJadwal')
                <div class="invalid-feedback">
                    Masukkan Nama Jadwal
                </div>
            @enderror
        </div>
        <div class="row justify-content-between">
        <div class="form-group col-md-6">
            <label class="h6" for="tanggalJadwal">Pilih tanggal</label>
            <input placeholder="Select date" type="date" id="tanggalJadwal" name="tanggalJadwal" class="form-control @error('tanggalJadwal') is-invalid @enderror" value="{{ old('tanggalJadwal',$jadwal->tanggalJadwal) }}">
            @error('tanggalJadwal')
                <div class="invalid-feedback">
                    Pilih Tanggal
                </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label class="h6" for="waktuJadwal">Pilih waktu</label>
            <input placeholder="Select date" type="time" id="waktuJadwal" name="waktuJadwal" class="form-control @error('waktuJadwal') is-invalid @enderror" value="{{ old('waktuJadwal',$jadwal->waktuJadwal) }}" >
            @error('waktuJadwal')
            <div class="invalid-feedback">
                Pilih Waktu
            </div>
            @enderror
        </div>
        </div>
        <div class="row justify-content-between">
            <div class="form-group col-md-6">
                <label class="h6" for="levelJadwal">Tingkat</label>
                <select id="levelJadwal" name="levelJadwal" class="form-control custom-select">
                  @if ($jadwal->levelJadwal == 'Pemula')
                  <option value="Pemula" selected>Pemula</option>
                  @else
                  <option value="Pemula" >Pemula</option>
                  @endif
                  @if ($jadwal->levelJadwal == 'Menengah')
                  <option value="Menengah" selected>Menengah</option>
                  @else
                  <option value="Menengah">Menengah</option>
                  @endif
                  @if ($jadwal->levelJadwal == 'Profesional')
                  <option value="Profesional" selected>Profesional</option>
                  @else
                  <option value="Profesional">Profesional</option>
                  @endif

                </select>
        </div>
            <div class="form-group col-md-6">
                <label class="h6" for="typeJadwal">Type</label>
                <select class="form-control custom-select" id="typeJadwal" name="typeJadwal">
                    @if ($jadwal->typeJadwal == 'Latihan')
                    <option value="Latihan" selected>Latihan</option>    
                    @else
                    <option value="Latihan">Latihan</option> 
                    @endif
                    @if ($jadwal->typeJadwal == 'Tanding')
                    <option value="Tanding" selected>Tanding</option>    
                    @else
                    <option value="Tanding">Tanding</option> 
                    @endif

            </select>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Update Jadwal</button>
    </form>
</div>
@endsection
