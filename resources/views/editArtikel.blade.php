@extends('layouts.admin')
@section('content')
@include('partials.sidebar')
<div class="container-fluid d-flex flex-column mside">
    <p class="h2 ms-4 mt-3">Edit Artikel</p>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    <form method="post" action="/dashboard/artikel/{{ $artikel->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row justify-content-between">
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text">
                    <i class=" input-group-textbi bi-person-circle m-0"></i>
                </div>
                <input type="text" class="form-control m-0" value="Nabil Mustofa" disabled>
            </div>
            <div class="input-group mb-3 col-md-6">
                <div class="input-group-text">
                    <i class="bi bi-calendar-minus"></i>
                </div>
                <input type="text" class="form-control m-0" value="{{ date('Y-m-d') }}" disabled>
            </div>  
        </div>
        
        <div class="form-group">
            <label class="h6" for="judul_artikel">Judul Artikel</label>
            <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror"  id="judul_artikel" name="judul_artikel" placeholder="" value="{{ old('judul_artikel',$artikel->judul_artikel) }}">
            @error('judul_artikel')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label class="h6" for="slug">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="" value="{{ old('slug',$artikel->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
               {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label class="h6" for="kategori_id">Kategori</label>
                <select id="kategori_id" name="kategori_id" class="form-control custom-select">
                  @foreach ($kategori as $item)
                  @if (old('kategori_id',$artikel->kategori_id)==$item->id)
                  <option value="{{ $item->id }}" selected>{{ $item->nama_kategori }}</option>
                  @else
                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                  @endif
                      
                  @endforeach
                </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi artikel</label>
            
            @error('isi_artikel')
            <p class="text-danger">Masukkan isi dari artikel</p>
            @enderror
            <input id="isi_artikel" type="hidden" name="isi_artikel" value="{{ old('isi_artikel',$artikel->isi_artikel) }}">
            <trix-editor input="isi_artikel"></trix-editor>


          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Input Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $artikel->image }}">

            @if ($artikel->image)
            <img class="img-fluid img-preview col-sm-4 my-2 d-flex" src="{{ asset('storage/' . $artikel->image) }}">
            @else
            <img class="img-fluid img-preview col-sm-4 my-2">
            @endif

            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">

            @error('image')
            <div class="invalid-feedback">
               {{$message}}
            </div>
            @enderror
          </div>
        <button class="btn btn-success" type="submit">Update Artikel</button>
    </form>
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
