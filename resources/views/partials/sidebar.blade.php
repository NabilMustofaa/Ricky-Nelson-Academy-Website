<div class=" d-flex flex-column flex-shrink-0  p-3 text-white bg-dark" style="width: 15vw;">
    <a href="/" class="align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link 
        @if ($title=='Dashboard')
            {{ 'active' }}
            @else
            {{ 'text-white' }}
        @endif 
        " aria-current="page">
          Profile
        </a>
      </li>
      <li>
        <a href="/dashboard/jadwal" class="nav-link 
        @if ($title=='Jadwal')
        {{ 'active' }}
        @else
        {{ 'text-white' }}
        @endif ">
          Jadwal
        </a>
      </li>
      <li>
        <a href="/dashboard/artikel" class="nav-link @if ($title=='Artikel')
        {{ 'active' }}
        @else
        {{ 'text-white' }}
        @endif ">
          Artikel
        </a>
      </li>
    </ul>
    <hr>
    <div class="d-flex justify-content-between">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none" >
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Nabil</strong>
        </a>
        <a href="" class="btn btn-danger p-1">
            <i class="bi bi-box-arrow-left mx-1 mt-2"  width="20" height="20"></i>
        </a>
    </div>
    
</div>