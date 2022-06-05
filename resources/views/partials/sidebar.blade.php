<div class=" d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 17vw; height:100vh; position:fixed">
    <div href="/" class="mb-3 ms-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <a href="/" class="h4 text-decoration-none text-white">Ricky Nelson <br> Academy</a>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard" class="d-flex m-2 p-2 nav-link text-white 
        {{ Request::is('dashboard') ?'active':'' }}" aria-current="page">
        <i class="bi bi-person mx-3"></i>
        <p class="m-0" style="justify-self: center">Profile</p>
        </a>
      </li>
      <li>
        <a href="/dashboard/jadwal" class="nav-link text-white d-flex m-2 p-2 nav-link
        {{ Request::is('dashboard/jadwal') ?'active':'' }}" >
        <i class="bi bi-calendar-check mx-3"></i>
        <p class="m-0" style="justify-self: center">Jadwal</p>
        </a>
      </li>
      <li>
        <a href="/dashboard/artikel" class="nav-link d-flex m-2 p-2 nav-link text-white
        {{ Request::is('dashboard/artikel') ?'active':'' }} ">
        <i class="bi bi-sticky mx-3"></i>
          <p class="m-0" style="justify-self: center">Artikel</p>
        </a>
      </li>
      <li>
        <a href="/dashboard/peserta" class="nav-link d-flex m-2 p-2 nav-link text-white
        {{ Request::is('dashboard/peserta') ?'active':'' }} ">
        <i class="bi bi-people mx-3"></i>
          <p class="m-0" style="justify-self: center">Peserta</p>
        </a>
      </li>
      <li>
        <a href="/dashboard/staff" class="nav-link d-flex m-2 p-2 nav-link text-white
        {{ Request::is('dashboard/staff') ?'active':'' }} ">
        <i class="bi bi-person-badge mx-3"></i>
          <p class="m-0" style="justify-self: center">Staff</p>
        </a>
      </li>
      <li>
        <a href="/dashboard/pendaftar" class="nav-link d-flex m-2 p-2 nav-link text-white
        {{ Request::is('dashboard/pendaftaran') ?'active':'' }} ">
        <i class="bi bi-file-earmark-person mx-3"></i>
          <p class="m-0" style="justify-self: center">Pendaftar</p>
        </a>
      </li>
    </ul>
    <hr>
    <div class="d-flex justify-content-between">
        <div href="#" class="d-flex align-items-center text-white text-decoration-none" >
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <p class="my-auto">Nabil</p>
        </div>
        <form action="/logout" method="POST">
          @csrf
          <button class="btn bg-danger text-white p-1"> <i class="bi bi-box-arrow-left mx-1 mt-2"  width="20" height="20"></i></button>
        </form>

           
        </a>
    </div>
</div>