<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Validator;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();

        return view('sejarah.index',compact('sejarah'));
    }

    
    public function create()
    {
        return view('sejarah.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_sejarah'    => 'required|',
           
        ]);

        $sejarah = Sejarah::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_sejarah'    =>$request->post_sejarah,
            
        ]);
       
       
        $sejarah ->save();
        return redirect('/admin/sejarah');
    }

    
    public function show(Sejarah $sejarah)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $sejarah = sejarah::findOrfail($id);
        return view('sejarah.edit',compact('sejarah'));
    }

    
    public function update(Request $request,$id)
    {
        $sejarah = Sejarah::where('id',$id)->first();
        $sejarah->user = $request->user;
        $sejarah->role = $request->role;
        $sejarah->post_sejarah = $request->post_sejarah;
        
        $sejarah->save();
        return redirect('/admin/sejarah');
    }

    
    public function destroy($sejarah)
    {   
        $sejarah = sejarah::findOrFail($sejarah);

        $sejarah->delete();
        
        return redirect('/admin/sejarah');
    }
}
