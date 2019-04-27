<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Image;
use app\User;
use app\Group;
use Validator;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function user()
    {
        $user = auth::User();
        $user = User::with('group')->get();
        return view('user.datauser',compact('user'));
    }
    public function getcreate()
    {
        return view('register');
    }

    public function postcreate(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:4',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed' 
        ]);
        
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>bcrypt($request->password),
            'group_id'=>'3'
        ]);
        return redirect()->route('home');
    }
    public function admin($id){
        $user = auth::User();
        $user = User::find($id);

        $user->group_id = 2;
        $user->save();
        return redirect()->back();
    }
    public function penulis($id){
        $user = auth::User();
        $user = User::find($id);

        $user->group_id = 3;
        $user->save();
        return redirect()->back();
    }
}
