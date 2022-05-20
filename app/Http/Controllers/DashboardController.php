<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;
use App\Models\Statistik;
use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $peserta = Peserta::find(1);
        return view('dashboard',[
            'title'=> 'Dashboard',
            'peserta' => $peserta,
            'statistik'=> $peserta->statistik
        ]);
    }




    public function formArtikel(){

    }
    public function editArtikel($id){
        
    }
}
