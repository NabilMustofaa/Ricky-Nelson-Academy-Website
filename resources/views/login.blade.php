@extends('layouts.main')
@include('partials.nav')
@section('content')

    <form action="action_page.php" method="post">
    <div class="container d-flex shadow-lg w-50 h-75 align-items-center p-0 mt-5">
        <div class="d-flex w-50 h-100 m-0 p-5 align-items-center" style="background-color: #04AA6D;">
            <H1 style="color: white">Ricky Nelson Academy login</H1>
        </div>
        <div class="d-flex flex-column login-container m-5 w-50">

            <label for="uname"><b class="h5 mb-3">Username</b></label>
            <input class="form-control mb-3" type="text" placeholder="Enter Username" name="uname" required>
        
            <label for="psw"><b class="h5  mb-3">Password</b></label>
            <input class="form-control  mb-3" type="password" placeholder="Enter Password" name="psw" required>
        
            {{-- <button type="submit">Login</button> --}}
            <a class="btn mb-3 w-100" style="background-color: #04AA6D; color:white" href="/dashboard">Login</a>
          </div>
    </div>    
        
      </form>
@endsection