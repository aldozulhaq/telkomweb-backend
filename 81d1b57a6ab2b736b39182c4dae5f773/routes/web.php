<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
    //partials
Route::get('/master', function () {
    return view('layouts.master');
});
route::get('/blank',function(){
    return view('blank');
});
    //end partials
    // dashboard
route::get('/dashboard',function(){
    return view('dashboard.dashboard');
});
    //post  
route::get('/totalpost',function(){
     return view('dashboard.post.totalpost');
}); 
route::get('/tambahpost',function(){
    return view('dashboard.post.tambah');
});  
    //pengunjung
    route::get('/pengunjung',function(){
        return view('dashboard.pengunjung.pengunjung');
    });  
        //end dahboard
        //fasilitas
        route::get('/fasilitas/index',[
            'uses'  => 'FasilitasController@index',
            'as'    =>  'fasilitas.index' 
        ]);
        route::get('/fasilitas/create',[
            'uses'  => 'FasilitasController@create',
            'as'    =>  'fasilitas.create' 
        ]);
        route::get('/fasilitas/store',[
            'uses'  => 'FasilitasController@store',
            'as'    =>  'fasilitas.store' 
        ]);