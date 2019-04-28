@extends('layouts.master')
@section('title','Fasilitas SMK TELKOM DARUL ULUM') 
@section('content')

<div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">Daftar Artikel
        <div class="pull-right"><a class="btn btn-success" href="{{URL::to('/admin/berita/create')}}"><p class="glyphicon">+ <b>Tambah</b></p></a></div>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th style="width:15%;">User</th>
              <th style="width:20%;">Judul Artikel</th>
              <th style="width:40%;">Isi Artikel</th>
              <!-- <th style="width:35%;">Role</th> -->
              <th style="width:30%;">Date</th>
              <th style="width:20%">Action</th>
            </tr>
          </thead>
          @foreach ($berita as $row)
          <tbody>
            <tr>
              <td class="user-avatar"> <img src="{{ asset('assets/img/avatar6.png')}}" alt="Avatar">{{$row->user}}</td>
              <td>{{$row->judul_artikel}}</td>
              <td>{{$row->post_artikel}}</td>
<!--               <td>{{$row->role}}</td> -->
              <td>{{$row->created_at->toFormattedDateString()}}</td>
              <td><form action="{{ route('berita.destroy', $row->id) }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <a href="{{route('berita.edit', $row->id)}}" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                <button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-trash"></i></button>
              </form>
          </td>
            </tr>  
          </tbody>
            </div>  
          @endforeach 
          
@endsection