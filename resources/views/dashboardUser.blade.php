@extends('layouts.admin')

@section('content')
@include('partials.sidebarUser')

    <div class="container-fluid d-flex flex-column mside ">
        <p class="h2 ms-4 mt-3">Dashboard</p>
        
        <div class="d-flex flex-column m-0 ">
          <form action="/beranda/peserta/{{ $user->id }}" method="post" class="d-flex" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="d-flex flex-row m-0">
                <div class="card text-center m-2 p-5 d-flex flex-col align-items-center bg-white bg-opacity-50" style="width: 25%;">
                  <input type="hidden" name="oldImage" value="{{ $user->User->image }}">
                  @if ($user->User->image)
                  <img class="img-fluid img-preview rounded float-start mx-auto d-block d-flex" width="250px" src="{{ asset('storage/' . $user->User->image) }}">
                  @else
                  <img class="img-fluid img-preview rounded float-start mx-auto d-block" width="250px">
                  @endif

                  <input class="form-control @error('image') is-invalid @enderror d-none" type="file" id="image" name="image" onchange="previewImage()">

                  @error('image')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                  <button type="button" class="btn btn-success mt-4" id="change" onclick="input()">Edit Profile</button>

                  <button type="submit" class="btn btn-primary mt-4 d-none" id="submit"> Update Profile </button>
                  
                  {{-- <button type="button" class="btn btn-danger mt-4 d-none" id="cancel" onclick="cancel()">Cancel Profile</button> --}}
              </div>
              <div class="card ms-2 my-2 p-4 bg-white bg-opacity-50 " style="width: 58vw;">
                  <p class="h5 m-2">Nama</p>
                  <input class="card p-2 bg-white bg-opacity-10 @error('name') is-invalid @enderror" value="{{ auth()->user()->name }}" id="name" name="name" disabled>
                  @error('name')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                  <p class="h5 m-2">Posisi</p>
                  <select id="posisi" name="posisi" class="card p-2 bg-white bg-opacity-10" disabled>
                    @if ($user->posisi == 'Goal Keeper')
                    <option value="Goal Keeper" selected>Goal Keeper</option>
                    @else
                    <option value="Goal Keeper" >Goal Keeper</option>
                    @endif
                    @if ($user->posisi == 'Right Back')
                    <option value="Right Back" selected>Right Back</option>
                    @else
                    <option value="Right Back">Right Back</option>
                    @endif
                    @if ($user->posisi == 'Center Back')
                    <option value="Center Back" selected>Center Back</option>
                    @else
                    <option value="Center Back">Center Back</option>
                    @endif
                    @if ($user->posisi == 'Left Back')
                    <option value="Left Back" selected>Left Back</option>
                    @else
                    <option value="Left Back" >Left Back</option>
                    @endif
                    @if ($user->posisi == 'Defensive Midfielder')
                    <option value="Defensive Midfielder" selected>Defensive Midfielder</option>
                    @else
                    <option value="Defensive Midfielder">Defensive Midfielder</option>
                    @endif
                    @if ($user->posisi == 'Center Midfielder')
                    <option value="Center Midfielder" selected>Center Midfielder</option>
                    @else
                    <option value="Center Midfielder">Center Midfielder</option>
                    @endif
                    @if ($user->posisi == 'Attacking Midfielder')
                    <option value="Attacking Midfielder" selected>Attacking Midfielder</option>
                    @else
                    <option value="Attacking Midfielder" >Attacking Midfielder</option>
                    @endif
                    @if ($user->posisi == 'Right Wing')
                    <option value="Right Wing" selected>Right Wing</option>
                    @else
                    <option value="Right Wing">Right Wing</option>
                    @endif
                    @if ($user->posisi == 'Left Wing')
                    <option value="Left Wing" selected>Left Wing</option>
                    @else
                    <option value="Left Wing">Left Wing</option>
                    @endif
                    @if ($user->posisi == 'Striker')
                    <option value="Striker" selected>Striker</option>
                    @else
                    <option value="Striker" >Striker</option>
                    @endif
                   
                    </select>
                  <p class="h5 m-2">Tingkat Pemain</p>
                  <select id="levelpemain" name="levelpemain" class="card p-2 bg-white bg-opacity-10" disabled>
                    @if ($user->levelpemain == 'Pemula')
                    <option value="Pemula" selected>Pemula</option>
                    @else
                    <option value="Pemula" >Pemula</option>
                    @endif
                    @if ($user->levelpemain == 'Menengah')
                    <option value="Menengah" selected>Menengah</option>
                    @else
                    <option value="Menengah">Menengah</option>
                    @endif
                    @if ($user->levelpemain == 'Profesional')
                    <option value="Profesional" selected>Profesional</option>
                    @else
                    <option value="Profesional">Profesional</option>
                    @endif
                    </select>
                  <p class="h5 m-2">Umur</p>
                  <input class="card p-2 bg-white bg-opacity-10 @error('umur') is-invalid @enderror" value="{{ $user->umur }}" id="umur" name="umur" disabled>
                  @error('umur')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                  <p class="h5 m-2">alamat</p>
                  <textarea class="card p-2 bg-white bg-opacity-10 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" disabled>{{ $user->pendaftaran->alamat }}</textarea>
                  @error('alamat')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
            </div>
          </form>
            <p class="h3 ms-4 mt-3">Information</p>
            <div class="d-flex justify-content-between">
                <div class="card text-white bg-dark mb-3" style="width: 25vw;">
                    <div class="card-header">Jadwal Mendatang</div>
                    <div class="card-body">
                      @foreach ($jadwal as $item )
                      <p class="card-title">{{ $item->jadwal->namaJadwal }} / {{ $item->jadwal->tanggalJadwal }} - {{ $item->jadwal->waktuJadwal }}</p>
                      @endforeach
                      
                      
                    </div>
                  </div>
                  <div class="card text-white bg-secondary mb-3" style="width: 25vw;">
                    <div class="card-header">Statistik Latihan</div>
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Kehadiran {{ $totalHadir['hadirLatihan'] }}</h5>
                      <p class="card-text">Jumlah Absen {{ $totalHadir['tidakLatihan'] }}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-secondary mb-3" style="width: 25vw;">
                    <div class="card-header">Statistik Tanding</div>
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Kehadiran {{ $totalHadir['hadirTanding'] }}</h5>
                      <p class="card-text">Jumlah Absen {{ $totalHadir['tidakTanding'] }}</p>
                    </div>
                  </div>
            </div>
            
        </div>
        
        
        
    </div>

    <script>
      function input(){
        let name = document.getElementById("name");
        let umur = document.getElementById("umur");
        let image = document.getElementById("image");
        let posisi = document.getElementById("posisi");
        let level = document.getElementById("levelpemain");
        let alamat = document.getElementById('alamat');
        let edit = document.getElementById("submit");
        let change = document.getElementById("change");

        
        name.removeAttribute('disabled');
        umur.removeAttribute('disabled');
        level.removeAttribute('disabled');
        posisi.removeAttribute('disabled');
        alamat.removeAttribute('disabled')
        change.classList.add("d-none");
        image.classList.remove("d-none");
        edit.classList.remove("d-none");
        cancel.classList.remove("d-none");
        

      }
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