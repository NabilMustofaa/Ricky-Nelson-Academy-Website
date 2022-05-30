@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column mside h-100">
    <p class="h2 ms-4 mt-3">Data Peserta</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    <form method="post" action="/dashboard/peserta/ {{ $peserta->id }}">
        @method('put')
        @csrf
        <div class="row justify-content-between">
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text col-3 py-2">
                    Nama
                </div>
                <input type="text" class="form-control m-0 py-2" value="{{ $peserta->User->name}}" disabled>
            </div>
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text col-3 py-2">
                    Start Date
                </div>
                <input type="text" class="form-control m-0 py-2" value="{{ $peserta->User->created_at->format('Y-m-d') }} " disabled>
            </div>  
        </div>
        <div class="row justify-content-between">
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text col-3 py-2">
                    Tempat Lahir
                </div>
                <input type="text" class="form-control m-0 py-2" value="{{ $peserta->pendaftaran->tempatLahir}}" disabled>
            </div>
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text col-3 py-2">
                    Tanggal Lahir
                </div>
                <input type="text" class="form-control m-0 py-2" value="{{ $peserta->pendaftaran->tanggalLahir }}" disabled>
            </div>  
        </div>
        
        <div class="row justify-content-between">
            <div class="input-group mb-3 col-6 py-0">
                <div class="input-group-text col-3 py-2">
                    Level Pemain
                </div>
                <select id="levelpemain" name="levelpemain" class="form-control custom-select h-100">
                @if ($peserta->levelpemain == 'Pemula')
                <option value="Pemula" selected>Pemula</option>
                @else
                <option value="Pemula" >Pemula</option>
                @endif
                @if ($peserta->levelpemain == 'Menengah')
                <option value="Menengah" selected>Menengah</option>
                @else
                <option value="Menengah">Menengah</option>
                @endif
                @if ($peserta->levelpemain == 'Profesional')
                <option value="Profesional" selected>Profesional</option>
                @else
                <option value="Profesional">Profesional</option>
                @endif
                </select>
            </div>
            <div class="input-group mb-3 col-6 ">
                <div class="input-group-text col-3">
                    Posisi
                </div>
                <select id="posisi" name="posisi" class="form-control custom-select h-100">
                @if ($peserta->posisi == 'Goal Keeper')
                <option value="Goal Keeper" selected>Goal Keeper</option>
                @else
                <option value="Goal Keeper" >Goal Keeper</option>
                @endif
                @if ($peserta->posisi == 'Right Back')
                <option value="Right Back" selected>Right Back</option>
                @else
                <option value="Right Back">Right Back</option>
                @endif
                @if ($peserta->posisi == 'Center Back')
                <option value="Center Back" selected>Center Back</option>
                @else
                <option value="Center Back">Center Back</option>
                @endif
                @if ($peserta->posisi == 'Left Back')
                <option value="Left Back" selected>Left Back</option>
                @else
                <option value="Left Back" >Left Back</option>
                @endif
                @if ($peserta->posisi == 'Defensive Midfielder')
                <option value="Defensive Midfielder" selected>Defensive Midfielder</option>
                @else
                <option value="Defensive Midfielder">Defensive Midfielder</option>
                @endif
                @if ($peserta->posisi == 'Center Midfielder')
                <option value="Center Midfielder" selected>Center Midfielder</option>
                @else
                <option value="Center Midfielder">Center Midfielder</option>
                @endif
                @if ($peserta->posisi == 'Attacking Midfielder')
                <option value="Attacking Midfielder" selected>Attacking Midfielder</option>
                @else
                <option value="Attacking Midfielder" >Attacking Midfielder</option>
                @endif
                @if ($peserta->posisi == 'Right Wing')
                <option value="Right Wing" selected>Right Wing</option>
                @else
                <option value="Right Wing">Right Wing</option>
                @endif
                @if ($peserta->posisi == 'Left Wing')
                <option value="Left Wing" selected>Left Wing</option>
                @else
                <option value="Left Wing">Left Wing</option>
                @endif
                @if ($peserta->posisi == 'Striker')
                <option value="Striker" selected>Striker</option>
                @else
                <option value="Striker" >Striker</option>
                @endif
               
                </select>
            </div>
            <div class="input-group mx-3 d-flex flex-column">
                <div class="input-group-text">
                    Alamat
                </div>
                <textarea class="form-control m-0 w-100" disabled>{{ $peserta->pendaftaran->alamat }}</textarea>
            </div>
            
            <button class="btn btn-success m-3" type="submit">Update Peserta</button>
        </div>  
    </form>
        <p class="h4 ms-4 mt-3">Kehadiran Peserta</p>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-active table-hover w-auto mt-2 border rounded overflow h-50">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Jadwal</th>
                    <th scope="col">Level</th>
                    <th scope="col" style="width: 25%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $jadwal as $item)
                  <tr>
                    <td>{{ $item->jadwal->tanggalJadwal }} / {{ $item->jadwal->waktuJadwal }}</td>
                    <td>{{ $item->jadwal->namaJadwal }}</td>
                    <td>{{ $item->jadwal->levelJadwal }}</td>
                    <td>
                        <div>
                            <form action="/dashboard/statistik/{{ $item->id }}" method="post">
                                @method('put')
                                @csrf
                                <select id="status" name="status" class="form-control custom-select w-50">
                                    @if ( $item->status == 0)
                                    <option value="0" selected>Tidak Hadir</option>
                                    @else
                                    <option value="0" >Tidak Hadir</option>
                                    @endif
                                    @if ($item->status == 1)
                                    <option value="1" selected>Hadir</option>
                                    @else
                                    <option value="1">Hadir</option>
                                    @endif
                                </select>
                                <button class="btn btn-warning"> Update </button>     
                            </form>
                        </div>
                    </td>
                  </tr>
                  @endforeach  
                </tbody>
              </table>
            </div>
</div>

<script>
    const title = document.querySelector("#judul_artikel");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    

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
