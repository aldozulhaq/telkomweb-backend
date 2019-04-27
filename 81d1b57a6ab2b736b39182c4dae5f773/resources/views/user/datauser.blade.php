@extends('layouts.master')
@section('title','Data User') 
@section('content')

<div class="col-sm-12">
    <div class="panel panel-default panel-table">
      <div class="panel-heading">Hover &amp; Image
        <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
          <ul role="menu" class="dropdown-menu pull-right">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th style="width:37%;">User</th>
              <th style="width:26%;">Role</th>
              <th style="width:26%;">Email</th>
              <th style="width:36%;">Action</th>
            </tr>
          </thead>
          @foreach ($user as $usr)
          <tbody>
            <tr>
            
              @if ($usr->group_id==1)
              <td class="user-avatar"><img src="{{asset('/img/superadmin.png')}}"> {{$usr->name}}</td>
            @elseif ($usr->group_id==2)
            <td class="user-avatar"><img src="{{asset('/img/admin.png')}}"> {{$usr->name}}</td>
              @else
            <td class="user-avatar"><img src="{{asset('/img/penulis.png')}}"> {{$usr->name}}</td>  
            @endif
            <td>{{$usr->group->group_code}}</td>
            <td>{{$usr->email}}</td>
              @if ($usr->group_id==3)
              <td><a href="{{ route('user.admin',['id'=> $usr->id])}}"><button class="btn btn-rounded btn-space btn-primary"><i class="icon icon-left mdi mdi-wrench"></i>Make admin</button></a></td>    
              @elseif($usr->group_id==2)
              <td><a href="{{ route('user.penulis',['id'=> $usr->id])}}"><button class="btn btn-rounded btn-space btn-danger"><i class="icon icon-left mdi mdi-wrench"></i>Make Penulis</button></a></td>
              @else
              <td><img src="{{ asset('/img/kunci2.png')}}"></td>
              @endif
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection