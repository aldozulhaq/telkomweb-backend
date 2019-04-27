@extends('layouts.master')
@section('title','Buat Artikel') 
@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    @if (\Session::get('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
      @endif

<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-divider">Basic Elements<span class="panel-subtitle">These are the basic bootstrap form elements</span></div>
        <div class="panel-body">
          <form style="border-radius: 0px;" class="form-horizontal group-border-dashed" action="{{route('berita.store')}}" method="POST">
            {{ csrf_field() }}
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Penulis</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="penulis" name="user">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Grup</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="role" name="role">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Judul Artikel</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="judul_artikel" id="judul_artikel"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Isi Artikel</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="post_artikel" id="post_artikel"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Id_Gambar</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="id_gam_post" name="id_gam_post">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
              <a class="btn btn-primary" href="{{url('/admin/berita')}}">Cancel</a>
                <button type="submit" value="save" class="btn btn-success">save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  

@endsection