{{-- <nav >
    <div class="nav-container">
        <a class="nav-text" href="/">Beranda</a>
        <a class="nav-text" href="#">About Us</a>
        <a class="nav-text" href="/jadwal">Jadwal</a>
        <a class="nav-text" href="#">Artikel</a>
        <a class="nav-text" href="/login">Login</a>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            RNA
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about" style="color: white">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jadwal" style="color: white">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/artikel" style="color: white">Artikel</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                @auth
                @if (auth()->user()->isAdmin==1)
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Hello, {{ auth()->user()->name }}
                    </button>
                    <div class="dropdown-menu w-100" aria-labelledby="dropdownMenu2">
                      <a href="/dashboard" class="dropdown-item" >Profile</a>
                      <a href="/dashboard/jadwal" class="dropdown-item" >Jadwal</a>
                      <a href="/dashboard/artikel" class="dropdown-item" >Artikel</a>
                      <a  href="/dashboard/peserta" class="dropdown-item" >Peserta</a>
                      <div class="dropdown-divider"></div>
                      <form action="/logout" method="POST" class="m-0">
                        @csrf
                        <button class="dropdown-item" type="submit">Log Out</button>
                      </form>
                  </div>
                @else
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Hello, {{ auth()->user()->name }}
                    </button>
                    <div class="dropdown-menu w-100" aria-labelledby="dropdownMenu2">
                      <a href="/beranda" class="dropdown-item" >Profile</a>
                      <a href="/beranda/statistik" class="dropdown-item" >Jadwal</a>
                      <div class="dropdown-divider"></div>
                      <form action="/logout" method="POST" class="m-0">
                        @csrf
                        <button class="dropdown-item" type="submit">Log Out</button>
                      </form>
                  </div>           
                @endif
                @else  
                <a class="nav-icon position-relative text-decoration-none" href="/login" style="color: white">
                    <i class="fa fa-fw fa-user text-light mr-1" ></i>
                    Login
                </a>
                @endauth
                
                
            </div>
        </div>

    </div>
</nav>
