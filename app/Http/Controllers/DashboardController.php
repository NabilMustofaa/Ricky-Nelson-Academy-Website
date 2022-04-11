<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\User;
use App\Models\Statistik;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $peserta = Peserta::find(1);
        return view('dashboard',[
            'title'=> 'Login',
            'peserta' => $peserta,
            'statistik'=> $peserta->statistik
        ]);
    }
}
