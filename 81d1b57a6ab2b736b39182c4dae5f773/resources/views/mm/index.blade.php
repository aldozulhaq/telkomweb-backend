@extends('layouts.master')
@section('title','Fasilitas SMK TELKOM DARUL ULUM') 
@section('content')

<div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">Daftar Post
        <div class="pull-right"><a class="btn btn-success" href="{{URL::to('/admin/mm/create')}}"><p class="glyphicon">+ <b>Tambah</b></p></a></div>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th style="width:15%;">User</th>
              <th style="width:40%;">Post</th>
              <th style="width:35%;">Grup</th>
              {{-- <th>Date</th> --}}
              <th style="width:20%">Action</th>
            </tr>
          </thead>
          @foreach ($mm as $row)
          <tbody>
            <tr>
              <td class="user-avatar"> <img src="{{ asset('assets/img/avatar6.png')}}" alt="Avatar">{{$row->user}}</td>
              <td>{{$row->post_mm}}</td>
              <td>{{$row->role}}</td>
              {{-- <td>{{$row->created_at->toFormattedDateString()}}</td> --}}
              <td><form action="{{ route('mm.destroy', $row->id) }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <a href="{{route('mm.edit', $row->id)}}" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                <button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-trash"></i></button>
              </form>
          </td>
            </tr>  
          </tbody>
            </div>  
          @endforeach 
          
@endsection