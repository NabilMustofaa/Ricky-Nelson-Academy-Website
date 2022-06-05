<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class pesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $peserta = Peserta::find($id);

        $rulesUser =[
            'name'=>'required|max:255',
            'image'=> 'image|file'
        ];
        $rulesPeserta=[
            'posisi'=>'required',
            'levelpemain'=>'required',
            'umur'=>'required'
        ];
        $rulesPendaftaran=[
            'alamat'=>'required',
        ];
        

        $validatedUser = $request->validate($rulesUser);
        $validatedPeserta = $request->validate($rulesPeserta);
        $validatedPendaftaran = $request->validate($rulesPendaftaran);
        
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedUser['image']=$request->file('image')->store('user-images');
        }
        

        
        Peserta::where('id',$peserta->id)->update($validatedPeserta);
        User::where('id',$peserta->user_id)->update($validatedUser);
        Pendaftaran::where('id',$peserta->pendaftaran_id)->update($validatedPendaftaran);

        return redirect('/beranda')->with('success','Artikel telah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}
