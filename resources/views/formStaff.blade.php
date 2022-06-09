@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column mside">
    <p class="h2 ms-4 mt-3">Tambah Staff</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Staff</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
    <form method="post" action="/dashboard/staff" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="input-group mb-3 mx-3">
                <div class="input-group-text col-3 py-2">
                    Nama Lengkap
                </div>
                <input type="text" class="form-control m-0 py-2 @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>  
        </div>
        <div class="row justify-content-between">
            <div class="input-group mb-3 col-6 py-0">
                <div class="input-group-text col-3 py-2 ">
                    Email
                </div>
                <input type="email" class="form-control m-0 py-2 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input-group mb-3 col-6 ">
                <div class="input-group-text col-3 ">
                    Password
                </div>
                <input type="text" class="form-control m-0 py-2 @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
            </div>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row justify-content-between">
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text col-3 py-2">
                    Jabatan
                </div>
                <input type="text" class="form-control m-0 py-2 @error('Jabatan') is-invalid @enderror" id="Jabatan" name="Jabatan" value="{{ old('Jabatan') }}">
                @error('Jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text col-3 py-2">
                    Nomor HP
                </div>
                <input type="text" class="form-control m-0 py-2 @error('NoHp') is-invalid @enderror" id="NoHp" name="NoHp" value="{{ old('NoHp') }}">
                @error('NoHp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>  
        </div>
            <div class="input-group  d-flex flex-column">
                
                <div class="input-group-text">
                    Alamat
                </div>
                <textarea class="form-control m-0 w-100  @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat">{{ old('Alamat') }}</textarea>
                @error('Alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                
            </div>
            <div class="row justify-content-between">
                <div class="input-group mt-3 col-md-8">
                <div class="input-group-text">
                    Foto Staff
                </div>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" width="">
                @error('image')
                <div class="invalid-feedback">
                   {{$message}}
                </div>
                @enderror
                </div>
                <button class="btn btn-success mx-3 mt-3" type="submit">Buat Staff</button>
            </div>
            <input type="hidden" name="isAdmin"  id="isAdmin" value="1">
            <img class="img-fluid img-preview col-sm-4 my-2" src="" width="150px">
            
    </form>
</div>

<script>
    function previewImage() {
        const image= document.querySelector('#image')
        const imgPreview =document.querySelector('.img-preview')

        imgPreview.style.display='flex'
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload=function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
