@extends('layouts.main')
@include('partials.nav')
@section('content')
<div class="container h-100">
    <div>
        <H1 class="mt-5">Registration</H1>
        <H5 class="text-center">Please Complete Form Below</H5>
    </div>
    <div class="container-fluid d-flex flex-column mside">
        
        <form method="post" action="/register" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-between">
                <div class="input-group mb-3 col-6 py-0">
                    <div class="input-group-text col-3 py-2 ">
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
                    <input type="email" class="form-control m-0 py-2 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" style="border: 1px solid #ccc">
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
                        Tempat Lahir 
                    </div>
                    <input type="text" class="form-control m-0 py-2 @error('tempatLahir') is-invalid @enderror" id="tempatLahir" name="tempatLahir" value="{{ old('tempatLahir') }}">
                    @error('tempatLahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mb-3 col-md-6">
                    <div class="input-group-text col-3 py-2">
                        Tanggal Lahir
                    </div>
                    <input type="date" class="form-control m-0 py-2 @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir" name="tanggalLahir" value="{{ old('tanggalLahir') }}" style="border: 1px solid #ccc"  >
                    @error('tanggalLahir')
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
                    <textarea class="form-control m-0 w-100  @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    
                </div>
                <div class="row justify-content-between">
                    <div class="input-group mt-3 col-md-8">
                    <div class="input-group-text">
                        Foto Peserta
                    </div>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" width="">
                    @error('image')
                    <div class="invalid-feedback">
                       {{$message}}
                    </div>
                    @enderror
                    </div>
                    <button class="btn btn-success mx-3 mt-3" type="submit">Submit Pendaftaran</button>
                </div>
                <input type="hidden" name="isAdmin"  id="isAdmin" value="0">
                <input type="hidden" name="statusPembayaran" id="statusPembayaran" value="0">
                
        </form>
    </div>
</div>

@include('partials.footer')

@endsection