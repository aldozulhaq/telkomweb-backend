<?php

namespace App\Http\Controllers;

use App\Osis;
use Validator;
use Illuminate\Http\Request;

class OsisController extends Controller
{
    public function index()
    {
        $osis = Osis::all();

        return view('osis.index',compact('osis'));
    }

    
    public function create()
    {
        return view('osis.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_osis'    => 'required|',
           
        ]);

        $osis = Osis::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_osis'    =>$request->post_osis,
            
        ]);
       
       
        $osis ->save();
        return redirect('/admin/osis');
    }

    
    public function show(Osis $osis)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $osis = osis::findOrfail($id);
        return view('osis.edit',compact('osis'));
    }

    
    public function update(Request $request,$id)
    {
        $osis = Osis::where('id',$id)->first();
        $osis->user = $request->user;
        $osis->role = $request->role;
        $osis->post_osis = $request->post_osis;
        
        $osis->save();
        return redirect('/admin/osis');
    }

    
    public function destroy($osis)
    {   
        $osis = osis::findOrFail($osis);

        $osis->delete();
        
        return redirect('/admin/osis');
    }
}
