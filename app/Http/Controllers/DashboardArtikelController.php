<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\kategori_artikel;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('dashboardArtikel',[
            'title'=> 'Artikel',
            'artikels'=>$artikel,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori_artikel::all();
        return view('formArtikel',[
            'title'=> 'Artikel',
            'kategori'=>$kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validatedData =$request->validate([
            'judul_artikel'=>'required|max:255',
            'slug'=>'required|unique:artikels',
            'kategori_id'=>'required',
            'isi_artikel'=>'required',
            'image'=> 'image|file|max:2048'
        ]);
        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('artikel-images');
        }
        $validatedData['highlight_artikel']=Str::limit(strip_tags($request->isi_artikel),200,'...');

        Artikel::create($validatedData);

        return redirect('/dashboard/artikel')->with('success','Artikel baru telah ditambahkan');
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
    public function edit(Artikel $artikel)
    {
        
        return view('editArtikel',[
            'title'=> 'Jadwal',
            'artikel'=>$artikel,
            'kategori'=>kategori_artikel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Artikel $artikel)
    {
        $rules =[
            'judul_artikel'=>'required|max:255',
            'kategori_id'=>'required',
            'isi_artikel'=>'required',
        ];

        if($request->slug != $artikel->slug ){
            $rules['slug']='required|unique:artikels';
        }
        $validatedData = $request->validate($rules);

        $validatedData['highlight_artikel']=Str::limit(strip_tags($request->isi_artikel),200,'...');

        Artikel::where('id',$artikel->id)->update($validatedData);

        return redirect('/dashboard/artikel')->with('success','Artikel telah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy($artikel->id);
        
        return redirect('/dashboard/artikel')->with('success','Jadwal terhapus');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Artikel::class, 'slug',$request->judul);
        return response()->json(['slug'=>$slug]);
    }
}
