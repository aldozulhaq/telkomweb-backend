@extends('layouts.master')
@section('title','tulis user') 
@section('content')

<div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-divider">Edit Form<span class="panel-subtitle"></span></div>
        <div class="panel-body">
                
          <form action="{{ route('rpl.update', $rpl->id) }}" method="POST">
        
            
            {{ csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
              <label>user</label>
              <input type="text" name="user" class="form-control" value="{{ $rpl->user }}"> 
            </div>

            <div class="form-group">
                <label>grup</label>
                <input type="text" name="role" class="form-control" value="{{ $rpl->role }}"> 
            </div>
            
            <div class="form-group">
              <label>rpl</label>
              <input type="text" name="post_rpl" class="form-control"  value="{{ $rpl->post_rpl }}"> 
            </div>

            <div class="form-group">
              <input type="submit" value="save" name="save" class="btn btn-primary"> 
            </div>
        </form>
        </div>
      </div>
    </div>

@endsection