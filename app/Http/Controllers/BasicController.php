<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home() {
        return view('home',[
            'title'=> 'Beranda'
        ]);
    }

    public function login() {
        return view('login',[
            'title'=> 'Login'
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
