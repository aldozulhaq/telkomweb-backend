@extends('layouts.master')
@section('title','Tambah Post') 
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-divider">POST<span class="panel-subtitle">Tulis Post dalam Form</span></div>
        
        <div class="panel-body">
                
          <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Penulis</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Judul Post</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Keterangan</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kegiatan</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Textarea</label>
              <div class="col-sm-9">
                <textarea class="form-control"></textarea>
              </div>
            </div>
            <div class="pull-right">
            <button class="btn btn-rounded btn-space btn-success"><i class="icon icon-left mdi mdi-check"></i> Success</button>
           
        </div>
        </form>
        <a href="{{ url('/totalpost')}}"><button class="btn btn-rounded btn-space btn-danger"><i class="icon icon-left mdi mdi-close"></i> Cancel</button></a>
        </div>
      </div>
    </div>
  </div>
  

@endsection