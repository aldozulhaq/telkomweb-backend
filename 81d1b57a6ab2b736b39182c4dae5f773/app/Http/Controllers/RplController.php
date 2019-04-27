<?php

namespace App\Http\Controllers;

use App\Rpl;
use Validator;
use Illuminate\Http\Request;

class RplController extends Controller
{
    public function index()
    {
        $rpl = Rpl::all();

        return view('rpl.index',compact('rpl'));
    }

    
    public function create()
    {
        return view('rpl.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'user'              =>'required',
            'role'              =>'required',
            'post_rpl'    => 'required|',
           
        ]);

        $rpl = Rpl::create([
    
            'user'              =>$request->user,
            'role'              =>$request->role,
            'post_rpl'    =>$request->post_rpl,
            
        ]);
       
       
        $rpl ->save();
        return redirect('/admin/rpl');
    }

    
    public function show(Rpl $rpl)
    {
        //
    }

    
    public function edit(Request $request,$id)
    {
        $rpl = rpl::findOrfail($id);
        return view('rpl.edit',compact('rpl'));
    }

    
    public function update(Request $request,$id)
    {
        $rpl = Rpl::where('id',$id)->first();
        $rpl->user = $request->user;
        $rpl->role = $request->role;
        $rpl->post_rpl = $request->post_rpl;
        
        $rpl->save();
        return redirect('/admin/rpl');
    }

    
    public function destroy($rpl)
    {   
        $rpl = rpl::findOrFail($rpl);

        $rpl->delete();
        
        return redirect('/admin/rpl');
    }
}
