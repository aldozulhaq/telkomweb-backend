@extends('layouts.master')
@section('title','tulis judul') 
@section('content')

<div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-divider">Basic Form<span class="panel-subtitle">This is the default bootstrap form layout</span></div>
        <div class="panel-body">
                
          <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST">
        
            
            {{ csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
              <label>judul</label>
              <input type="text" name="user" class="form-control" value="{{ $fasilitas->user }}"> 
            </div>

            <div class="form-group">
                <label>isi</label>
                <input type="text" name="role" class="form-control" value="{{ $fasilitas->role }}"> 
            </div>
            
            <div class="form-group">
              <label>halaman</label>
              <input type="text" name="post_fasilitas" class="form-control"  value="{{ $fasilitas->post_fasilitas }}"> 
            </div>

            <div class="form-group">
              <input type="submit" value="save" name="save" class="btn btn-warning"> 
            </div>
        </form>
        </div>
      </div>
    </div>

@endsection