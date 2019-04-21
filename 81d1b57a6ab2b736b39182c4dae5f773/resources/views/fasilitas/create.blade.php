@extends('layouts.master')
@section('title','Buat Fasilitas') 
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
          <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="col-sm-2 control-label">Penulis</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="penulis" name="penulis">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Role</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="role" name="role">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Date</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="date" name="date">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Textarea</label>
              <div class="col-sm-9">
                <textarea class="form-control"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  

@endsection