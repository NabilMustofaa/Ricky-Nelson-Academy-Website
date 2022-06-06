<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use App\Models\Statistik;
use App\Models\Artikel;
use App\Models\Jadwal;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $staff=User::find(auth()->user()->id)->staff;
        return view('dashboard',[
            'title'=> 'Dashboard',
            'staff'=>$staff
        ]);
    }

    public function user(){
        
        $user=User::find(auth()->user()->id)->peserta;
        $statistik=Statistik::where('peserta_id',$user->id)->latest()->get();

        $totalHadirLatihan=0;
        $totalHadirTanding=0;
        $tidakHadirLatihan=0;
        $tidakHadirTanding=0;
        foreach ($statistik as $stat) {
            if ($stat->Jadwal->typeJadwal == 'Tanding') {
                if ($stat->status == 1) {
                    $totalHadirTanding++;
                }
                else{
                    $tidakHadirTanding++;
                }
            }
            else {
                if ($stat->status == 1) {
                    $totalHadirLatihan++;
                }
                else{
                    $tidakHadirLatihan++;
                }
            }
        }
        $totalhadir=[
            'hadirLatihan'=>$totalHadirLatihan,
            'hadirTanding'=>$totalHadirTanding,
            'tidakLatihan'=>$tidakHadirLatihan,
            'tidakTanding'=>$tidakHadirTanding,
        ];
        
        return view('dashboardUser',[
            'title'=> 'Dashboard',
            'user'=>$user,
            'totalHadir'=> $totalhadir,
            'jadwal'=>$statistik->take(3)
        ]);
    }
}
