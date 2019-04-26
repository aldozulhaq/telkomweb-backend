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
Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){

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
                //profil
        //fasilitas
        route::resource('/fasilitas','FasilitasController');
        //kritik&saran
        route::resource('/kritik','KritikController');
        //berita
        route::resource('/berita','BeritaController');
        //kepsek
        route::resource('/kepsek','KepsekController');
        //sejarah
        route::resource('/sejarah','SejarahController');
        //visim
        route::resource('/visim','VisimController');
                //endprofil


    });
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');



