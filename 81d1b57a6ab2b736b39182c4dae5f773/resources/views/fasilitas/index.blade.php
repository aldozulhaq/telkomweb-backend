@extends('layouts.master')
@section('title','Fasilitas SMK TELKOM DARUL ULUM') 
@section('content')

<div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">Hover &amp; Image
        {{-- <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
          <ul role="menu" class="dropdown-menu pull-right">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> --}}
        <div class="pull-right"><button class="btn btn-rounded btn-space btn-primary">+ Fasilitas</button></div>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th style="width:37%;">User</th>
              <th style="width:36%;">Commit</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          @foreach ($fasilitas as $row)
          <tbody>
            <tr>
              <td class="user-avatar"> <img src="{{ asset('assets/img/avatar6.png')}}" alt="Avatar">Penelope Thornton</td>
              <td>{{$row->post_fasilitas}}</td>
              <td>{{$row->date_fasilitas}}</td>
              <td><button class="btn btn-rounded btn-primary"><i class="icon icon-left mdi mdi-edit"></i></button> 
              <button class="btn btn-rounded btn-danger"><i class="icon icon-left mdi mdi-delete"></i></button></td>
            </tr>    
          @endforeach
          
@endsection