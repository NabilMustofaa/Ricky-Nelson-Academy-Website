<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\statistik;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard',[
            'title'=> 'Login',
            'user' => user::info(),
            'statistik' => statistik::stat()
        ]);
    }

}
