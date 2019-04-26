<?php

namespace App\Http\Controllers;

use App\Kepsek;
use Validator;
use Illuminate\Http\Request;

class KepsekController extends Controller
{
    public function index()
    {
        $kepsek = Kepsek::all();

        return view('kepsek.index',compact('kepsek'));
    }

    
    public function create()
    {
        return view('kepsek.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_kepsek'    => 'required|',
           
        ]);

        $kepsek = Kepsek::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_kepsek'    =>$request->post_kepsek,
            
        ]);
       
       
        $kepsek ->save();
        return redirect('/admin/kepsek');
    }

    
    public function show(Kepsek $kepsek)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $kepsek = kepsek::findOrfail($id);
        return view('kepsek.edit',compact('kepsek'));
    }

    
    public function update(Request $request,$id)
    {
        $kepsek = Kepsek::where('id',$id)->first();
        $kepsek->user = $request->user;
        $kepsek->role = $request->role;
        $kepsek->post_kepsek = $request->post_kepsek;
        
        $kepsek->save();
        return redirect('/admin/kepsek');
    }

    
    public function destroy($kepsek)
    {   
        $kepsek = kepsek::findOrFail($kepsek);

        $kepsek->delete();
        
        return redirect('/admin/kepsek');
    }
}
