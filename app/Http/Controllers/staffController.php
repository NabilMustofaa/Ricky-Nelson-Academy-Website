<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardStaff',[
            'title'=> 'Staf',
            'staff'=>Staff::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formStaff',[
            'title'=> 'Staf',
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

        $validatedUser=$request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'image' => 'file|image'
        ]);

        $validatedStaff=$request->validate([
            'Jabatan'=>'required',
            'NoHp'=>'required',
            'Alamat'=>'required',
        ]);
        
        $validatedUser['password']=Hash::make($validatedUser['password']);
        $validatedUser['image']=$request->file('image')->store('user-images');
        User::create($validatedUser);
        
        
        $Staff=User::latest('id')->first();
        $validatedStaff['user_id']=$Staff->id;
        Staff::create($validatedStaff);

        return redirect('dashboard/staff')->with('success','Staff telah berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        $staff=Staff::find($staff->id);
        return view('viewStaff',[
            'title'=> 'Dashboard',
            'staff'=>$staff
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff  $staff)
    {
        // return dd($request);
        $rulesUser =[
            'name'=>'required|max:255',
            'image'=> 'image|file'
        ];
        $rulesStaff=[
            'Jabatan'=>'required',
            'NoHp'=>'required',
            'Alamat'=>'required',
        ];


        $validatedUser = $request->validate($rulesUser);
        $validatedStaff = $request->validate($rulesStaff);
        
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedUser['image']=$request->file('image')->store('user-images');
        }
        
        Staff::where('id',$staff->id)->update($validatedStaff);
        User::where('id',$staff->user_id)->update($validatedUser);

        return redirect()->back()->with('success','Artikel telah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        if($staff->User->image){
            Storage::delete($staff->User->image);
        }
        Staff::destroy($staff->id);
        User::destroy($staff->user_id);
        
        return redirect('/dashboard/staff')->with('success','Staff terhapus');
    }
}
