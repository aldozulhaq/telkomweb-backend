@extends('layouts.master')
@section('title','Fasilitas SMK TELKOM DARUL ULUM') 
@section('content')

<div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">Daftar Fasilitas
        <div class="pull-right"><a href="{{ url('/fasilitas/create')}}"><button class="btn btn-rounded btn-space btn-primary">+ Fasilitas</button></a></div>
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