@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column m-0 ">
    <p class="h2 ms-4 mt-3">Buat Jadwal</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
    <form>
        <div class="form-group">
            <label for="namaJadwal">Nama Jadwal</label>
            <input type="text" class="form-control" id="namaJadwal" placeholder="">
        </div>
        <div class="row justify-content-between">
        <div class="form-group col-md-6">
            <label for="inputState">Pilih tanggal</label>
            <input placeholder="Select date" type="date" id="example" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Pilih waktu</label>
            <input placeholder="Select date" type="time" id="example" class="form-control">
        </div>
        </div>
        <div class="row justify-content-between">
            <div class="form-group col-md-6">
                <label for="inputState">Tingkat</label>
                <select id="inputState" class="form-control custom-select">
                  <option>Pemula</option>
                  <option>Menengah</option>
                  <option>Profesional</option>
                </select>
        </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Type</label>
                <select class="form-control custom-select" id="exampleFormControlSelect1">
                  <option>Latihan</option>
                  <option>Tanding</option>
            </select>
            </div>

        </div>
    </form>
</div>
@endsection
