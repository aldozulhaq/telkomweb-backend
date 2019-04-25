<?php

namespace App\Http\Controllers;

use App\Visim;
use Validator;
use Illuminate\Http\Request;

class VisimController extends Controller
{
    public function index()
    {
        $visim = Visim::all();

        return view('visim.index',compact('visim'));
    }

    
    public function create()
    {
        return view('visim.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_visim'    => 'required|',
           
        ]);

        $visim = Visim::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_visim'    =>$request->post_visim,
            
        ]);
       
       
        $visim ->save();
        return redirect('/visim');
    }

    
    public function show(Visim $visim)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $visim = visim::findOrfail($id);
        return view('visim.edit',compact('visim'));
    }

    
    public function update(Request $request,$id)
    {
        $visim = Visim::where('id',$id)->first();
        $visim->user = $request->user;
        $visim->role = $request->role;
        $visim->post_visim = $request->post_visim;
        
        $visim->save();
        return redirect('/visim');
    }

    
    public function destroy($visim)
    {   
        $visim = visim::findOrFail($visim);

        $visim->delete();
        
        return redirect('/visim');
    }
}
