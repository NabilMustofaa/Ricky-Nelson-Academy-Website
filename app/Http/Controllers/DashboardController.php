<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use App\Models\Statistik;
use App\Models\Artikel;
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

}
