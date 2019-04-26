<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use Validator;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();

        return view('fasilitas.index',compact('fasilitas'));
    }

    
    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_fasilitas'    => 'required|',
           
        ]);

        $fasilitas = Fasilitas::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_fasilitas'    =>$request->post_fasilitas,
            
        ]);
       
       
        $fasilitas ->save();
        return redirect('/admin/fasilitas');
    }

    
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $fasilitas = fasilitas::findOrfail($id);
        return view('fasilitas.edit',compact('fasilitas'));
    }

    
    public function update(Request $request,$id)
    {
        $fasilitas = Fasilitas::where('id',$id)->first();
        $fasilitas->user = $request->user;
        $fasilitas->role = $request->role;
        $fasilitas->post_fasilitas = $request->post_fasilitas;
        
        $fasilitas->save();
        return redirect('/admin/fasilitas');
    }

    
    public function destroy($fasilitas)
    {   
        $fasilitas = fasilitas::findOrFail($fasilitas);

        $fasilitas->delete();
        
        return redirect('/admin/fasilitas');
    }
}
