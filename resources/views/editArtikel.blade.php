@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column mside">
    <p class="h2 ms-4 mt-3">Buat Artikel</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
    <form>
        <div class="row justify-content-between">
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text">
                    <i class=" input-group-textbi bi-person-circle m-0"></i>
                </div>
                <input type="text" class="form-control m-0" placeholder="Nabil Mustofa" disabled>
            </div>
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text">
                    <i class="bi bi-calendar-minus"></i>
                </div>
                <input type="text" class="form-control m-0" placeholder="2022-04-14" disabled>
            </div>  
        </div>
        
        <div class="form-group">
            <label class="h6" for="namaJadwal">Judul Artikel</label>
            <input type="text" class="form-control" id="namaJadwal" placeholder="" value="Kemenangan Berturut">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, sunt nobis. Quisquam aliquam corrupti provident magnam ullam totam dolor veritatis, harum, officiis, mollitia ipsam modi hic deleniti facilis sapiente. Voluptate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, consectetur facilis architecto praesentium asperiores incidunt optio doloremque molestias labore. Aperiam reiciendis necessitatibus quasi, iusto possimus fugit corrupti dicta? Cumque, porro! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero id tempore nobis harum sed quidem et nam rem vitae? Alias distinctio placeat, atque illo necessitatibus delectus eligendi laboriosam quae facilis?</textarea>
          </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Input Gambar</label>
            <input class="form-control" type="file" id="formFile">
          </div>
        <button class="btn btn-success" type="submit">Submit form</button>
    </form>
</div>
@endsection
