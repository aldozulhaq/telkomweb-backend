<?php

namespace App\Http\Controllers;

use App\Berita;
use Validator;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();

        return view('berita.index',compact('berita'));
    }

    
    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'judul_artikel'     =>'required',        
            'post_artikel'      =>'required'
        ]);

        $berita = Berita::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'judul_artikel'     =>$request->judul_artikel,
            'post_artikel'      =>$request->post_artikel,
            'id_gam_post'       =>$request->id_gam_post
        ]);
       
       
        $berita ->save();
        return redirect('/admin/berita');
    }

    
    public function show(Berita $berita)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $berita = berita::findOrfail($id);
        return view('berita.edit',compact('berita'));
    }

    
    public function update(Request $request,$id)
    {
        $berita = Berita::where('id',$id)->first();
        $berita->user = $request->user;
        $berita->role = $request->role;
        $berita->post_berita = $request->post_berita;
        
        $berita->save();
        return redirect('/admin/berita');
    }

    
    public function destroy($berita)
    {   
        $berita = berita::findOrFail($berita);

        $berita->delete();
        
        return redirect('/admin/berita');
    }
}
