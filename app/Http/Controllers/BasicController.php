<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Artikel;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home() {
        return view('home',[
            'title'=> 'Beranda'
        ]);
    }

    public function about() {
        return view('about',[
            'title'=> 'About Us'
        ]);
    }

    public function artikel() {
        return view('artikel',[
            'title'=> 'Artikel',
            'artikel'=>Artikel::all(),

        ]);
    }

   

    public function jadwal() {
        return view('jadwal',[
            'title'=> 'Jadwal',
            'jadwal'=> Jadwal::all()
        ]);
    }

    public function selectJadwal (string $type) {
        return view('jadwal',[
            'title'=> 'Jadwal',
            'jadwal'=> Jadwal::where('typeJadwal',$type)->get()
        ]);
    }
}
