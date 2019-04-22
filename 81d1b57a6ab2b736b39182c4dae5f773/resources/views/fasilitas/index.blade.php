@extends('layouts.master')
@section('title','Fasilitas SMK TELKOM DARUL ULUM') 
@section('content')

<div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">Daftar Fasilitas
        <div class="pull-right"><a class="btn btn-success" href="{{URL::to('/fasilitas/create')}}"><p class="glyphicon glyphicon-pencil"> Pembimbing</p></a></div>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th style="width:37%;">User</th>
              <th style="width:37%;">Fasilitas</th>
              <th style="width:36%;">Role</th>
              {{-- <th>Date</th> --}}
              <th>Action</th>
            </tr>
          </thead>
          @foreach ($fasilitas as $row)
          <tbody>
            <tr>
              <td class="user-avatar"> <img src="{{ asset('assets/img/avatar6.png')}}" alt="Avatar">{{$row->user}}</td>
              <td>{{$row->post_fasilitas}}</td>
              <td>{{$row->role}}</td>
              {{-- <td>{{$row->created_at->toFormattedDateString()}}</td> --}}
              <td><form action="{{ route('fasilitas.destroy', $row->id) }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                <a href="{{route('fasilitas.edit', $row->id)}}" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a>
              </form>
          </td>
            </tr>  
          </tbody>
            </div>  
          @endforeach 
          
@endsection


