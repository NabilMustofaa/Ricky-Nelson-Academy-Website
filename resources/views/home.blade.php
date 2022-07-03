@extends('layouts.main')
@include('partials.nav')
@section('content')

<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/logo-ricky-nelson.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Ricky Nelson Academy</h1>
                            <h3 class="h2">Bibitnya Penendang Bola</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus atque dolore dignissimos
                                soluta nam debitis architecto laboriosam quisquam commodi dolorum, temporibus recusandae
                                cumque modi mollitia pariatur sequi, itaque iure et.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/cover-web-rna-nobg.png" alt="" style="height: 500px">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Motto</b> kami</h1>
                            <h3 class="h2">Kami adalah pabrik pemain bertalenta!</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus atque dolore dignissimos
                                soluta nam debitis architecto laboriosam quisquam commodi dolorum, temporibus recusandae
                                cumque modi mollitia pariatur sequi, itaque iure et.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/ball-img.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Kami akan ajarkan kalian menendang bola!</h1>
                            <h3 class="h2">Ullamco laboris nisi ut </h3>
                            <p>
                                Tendang bola bola kena tendang tendang-tendangan bola bola ditendang Tendang bola bola kena tendang tendang-tendangan bola bola ditendang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>

<section class="container py-5">
    <div class="row text-center">
        <h2>MEET OUR TEAM !</h2>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./assets/img/rakyan.png" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Rakyan Krisna</h5>
            <p class="text-center"><a class="btn btn-success">View Profile</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./assets/img/rickynelson.png" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Ricky Nelson</h2>
            <p class="text-center"><a class="btn btn-success">View Profile</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./assets/img/nabil.png" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Nabil Mustofa</h2>
            <p class="text-center"><a class="btn btn-success">View Profile</a></p>
        </div>
    </div>
</section>
<!-- Modal gallery -->
<section class="container text-center">
    <h2>GALLERY</h2>
    <!-- Section: Images -->
    <section class="">
        <!-- Baris 1 -->
        <div class="row mb-4 mt-4">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
              <img class="img-fluid" src="./assets/img/rna_juvenilea.jpg" alt="">
                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
      
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
              <img class="img-fluid" src="./assets/img/rna_train1.jpg" alt="">
                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
      
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
              <img class="img-fluid" src="./assets/img/rna_juvenileb.jpg" alt="">
                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
              </div>
            </div>
          </div>
        <!-- Baris 2 -->
        <div class="row mb-4 mt-4">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
            <img class="img-fluid" src="./assets/img/rna_train2.jpg" alt="">
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
    
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
            <img class="img-fluid" src="./assets/img/rna_squadlist.jpg" alt="">
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
    
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
            <img class="img-fluid" src="./assets/img/rna_train3.jpg" alt="">
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
        </div>
        <!-- baris 3 -->
        <div class="row mb-4 mt-4">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
            <img class="img-fluid" src="./assets/img/rna_juvenilec.jpg" alt="">
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
    
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
            <img class="img-fluid" src="./assets/img/rna_train4.jpg" alt="">
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
    
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div
              class="bg-image hover-overlay ripple shadow-1-strong rounded"
              data-ripple-color="light"
            >
            <img class="img-fluid" src="./assets/img/rna_juveniled.jpg" alt="">
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>
        </div>
    </section>
    <!-- Section: Images -->
  </section>

  <section class="container">
    <div class="row">
      <div class="col-12 col-md-6 d-flex justify-content-center flex-column px-4">
        <h2>BERGABUNG BERSAMA KAMI</h2>
        <p>Daftar di sini untuk mendapatkan berita terbaru, pembaruan, dan penawaran khusus yang dikirim langsung ke kotak masuk Anda</p>
        <a href="/register" class="btn btn-success px-3" style="width: fit-content">Join With Us</a>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-end">
        <img src="{{ asset('assets/img/cover-web-rna.png') }}" alt="" class="img-fluid" style="min-height: 500px">
      </div>
    </div>
  </section>
  <!-- Modal gallery -->
  @include('partials.footer')
@endsection
