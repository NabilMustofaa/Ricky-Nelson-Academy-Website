@extends('layouts.main')
@include('partials.nav')
@section('content')
    
    <form action="/login" method="post">
    @csrf
    <div class="container d-flex shadow-lg w-50 h-75 align-items-center p-0" style="margin: 8vh auto">
        <div class="d-flex w-50 h-100 m-0 p-5 align-items-center">
            <img src="{{ asset('assets/img/logo-ricky-nelson-ori.png') }}" alt="">
        </div>
        <div class="d-flex flex-column login-container m-5 w-50">
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert dismissible fade show" role="alert">
                {{ session('loginError') }}
            </div>
                
            @endif
            <label for="email"><b class="h5 mb-3">Email</b></label>
            <input class="form-control @error('email')
                is-invalid
            @enderror mb-3" type="text" placeholder="Enter Email"  name="email" value="{{ old('email') }}" autofocus required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        
            <label for="password"><b class="h5  mb-3">Password</b></label>
            <input class="form-control  mb-3" type="password" placeholder="Enter Password" name="password" required>
        
            <button class="btn mb-3 w-100" style="background-color: #af0000; color:white" type="submit">Login</button>
            {{-- <a class="btn mb-3 w-100" style="background-color: #af0000; color:white" href="/dashboard">Login</a> --}}
          </div>
    </div>    
        
      </form>
@endsection