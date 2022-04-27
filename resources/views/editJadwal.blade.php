@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column mside">
    <p class="h2 ms-4 mt-3">Buat Jadwal</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
    <form>
        <div class="form-group">
            <label class="h6" for="namaJadwal">Nama Jadwal</label>
            <input type="text" class="form-control" id="namaJadwal" placeholder="" value="Latihan Rutin 1">
        </div>
        <div class="row justify-content-between">
        <div class="form-group col-md-6">
            <label class="h6" for="inputState">Pilih tanggal</label>
            <input placeholder="Select date" type="date" id="example" class="form-control" value="2022-03-01">
        </div>
        <div class="form-group col-md-6">
            <label class="h6" for="inputState">Pilih waktu</label>
            <input placeholder="Select date" type="time" id="example" class="form-control" value="17:00">
        </div>
        </div>
        <div class="row justify-content-between">
            <div class="form-group col-md-6">
                <label class="h6" for="inputState">Tingkat</label>
                <select id="inputState" class="form-control custom-select">
                  <option selected>Pemula</option>
                  <option>Menengah</option>
                  <option>Profesional</option>
                </select>
        </div>
            <div class="form-group col-md-6">
                <label class="h6" for="exampleFormControlSelect1">Type</label>
                <select class="form-control custom-select" id="exampleFormControlSelect1">
                  <option selected>Latihan</option>
                  <option>Tanding</option>
            </select>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit form</button>
    </form>
</div>
@endsection
