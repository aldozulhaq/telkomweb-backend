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
}
