<?php

namespace App\Http\Controllers;

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
}
