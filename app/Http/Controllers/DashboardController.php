<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;
use App\Models\Statistik;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $peserta = Peserta::find(1);
        return view('dashboard',[
            'title'=> 'Dashboard',
            'peserta' => $peserta,
            'statistik'=> $peserta -> statistik
        ]);
    }

    public function jadwal(){
        $peserta = Peserta::find(1);
        return view('dashboardJadwal',[
            'title'=> 'Jadwal',
        ]);
    }
    
    public function artikel(){
        $peserta = Peserta::find(1);
        return view('dashboardArtikel',[
            'title'=> 'Artikel',
        ]);
    }

    public function formJadwal(){
        $peserta = Peserta::find(1);
        return view('formJadwal',[
            'title'=> 'Jadwal',
        ]);
    }

    public function formArtikel(){
        $peserta = Peserta::find(1);
        return view('formArtikel',[
            'title'=> 'Artikel',
        ]);
    }
}
