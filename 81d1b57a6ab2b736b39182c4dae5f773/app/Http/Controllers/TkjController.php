<?php

namespace App\Http\Controllers;

use App\Tkj;
use Validator;
use Illuminate\Http\Request;

class TkjController extends Controller
{
    public function index()
    {
        $tkj = Tkj::all();

        return view('tkj.index',compact('tkj'));
    }

    
    public function create()
    {
        return view('tkj.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_tkj'    => 'required|',
           
        ]);

        $tkj = Tkj::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_tkj'    =>$request->post_tkj,
            
        ]);
       
       
        $tkj ->save();
        return redirect('/admin/tkj');
    }

    
    public function show(Tkj $tkj)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $tkj = tkj::findOrfail($id);
        return view('tkj.edit',compact('tkj'));
    }

    
    public function update(Request $request,$id)
    {
        $tkj = Tkj::where('id',$id)->first();
        $tkj->user = $request->user;
        $tkj->role = $request->role;
        $tkj->post_tkj = $request->post_tkj;
        
        $tkj->save();
        return redirect('/admin/tkj');
    }

    
    public function destroy($tkj)
    {   
        $tkj = tkj::findOrFail($tkj);

        $tkj->delete();
        
        return redirect('/admin/tkj');
    }
}
