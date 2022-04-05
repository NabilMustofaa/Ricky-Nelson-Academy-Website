<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Statistik;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard',[
            'title'=> 'Login',
            'user' => User::find(1),
            'statistik' => Statistik::all()
        ]);
    }

}
