<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Jadwal;
use App\Models\kategori_artikel;
use App\Models\Peserta;
use App\Models\Statistik;
use Illuminate\Http\Request;

class DashboardPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardPeserta',[
            'title'=> 'Peserta',
            'peserta'=>Peserta::all(),
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $pesertas = Peserta::find($id);
        $statistik = Statistik::where('peserta_id', $id)->get();
        return view('editPeserta',[
            'title'=> 'Jadwal',
            'jadwal'=>$statistik,
            'peserta'=>$pesertas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Peserta $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData =$request->validate([
            'posisi'=>'required',
            'levelpemain'=>'required'
        ]);
        
        Peserta::where('id',$id)->update($validatedData);
        
        return redirect('/dashboard/peserta')->with('success','Pemain berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
