<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register',[
            'title'=> 'Join Academy',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedUser=$request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'isAdmin'=>'required',
            'image' => 'file|image',
        ]);

        $validatedPendaftar=$request->validate([
            'tempatLahir'=>'required',
            'tanggalLahir'=>'required',
            'alamat'=>'required',
            'statusPembayaran'=>'required'
        ]);
        
        $validatedUser['password']=Hash::make($validatedUser['password']);
        
        if($request->file('image')){
            $validatedUser['image']=$request->file('image')->store('user-images');
        }

        User::create($validatedUser);

        $newDateTime = Carbon::now()->addMonth(3);
        $validatedPendaftar['batasPembayaran']=$newDateTime;
        
        $Staff=User::latest('id')->first();
        $validatedPendaftar['user_id']=$Staff->id;
        Pendaftaran::create($validatedPendaftar);

        return redirect('/login')->with('success','Pendaftaran berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
