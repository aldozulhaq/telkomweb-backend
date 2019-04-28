<?php

namespace App\Http\Controllers;

use App\Mm;
use Validator;
use Illuminate\Http\Request;

class MmController extends Controller
{
    public function index()
    {
        $mm = Mm::all();

        return view('mm.index',compact('mm'));
    }

    
    public function create()
    {
        return view('mm.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_mm'    => 'required|',
           
        ]);

        $mm = Mm::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_mm'    =>$request->post_mm,
            
        ]);
       
       
        $mm ->save();
        return redirect('/admin/mm');
    }

    
    public function show(Mm $mm)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $mm = mm::findOrfail($id);
        return view('mm.edit',compact('mm'));
    }

    
    public function update(Request $request,$id)
    {
        $mm = Mm::where('id',$id)->first();
        $mm->user = $request->user;
        $mm->role = $request->role;
        $mm->post_mm = $request->post_mm;
        
        $mm->save();
        return redirect('/admin/mm');
    }

    
    public function destroy($mm)
    {   
        $mm = mm::findOrFail($mm);

        $mm->delete();
        
        return redirect('/admin/mm');
    }
}
