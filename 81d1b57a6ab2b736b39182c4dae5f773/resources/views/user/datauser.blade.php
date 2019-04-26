@extends('layouts.master')
@section('title','tulis judul') 
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
              <th style="width:36%;">Commit</th>
              <th style="width:36%;">Role</th>
              <th class="actions"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="user-avatar"> <img src="assets/img/avatar6.png" alt="Avatar">Penelope Thornton</td>
              <td>Initial commit</td>
              <td>Aug 6, 2015</td>
              <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            <tr>
              <td class="user-avatar"> <img src="assets/img/avatar4.png" alt="Avatar">Benji Harper</td>
              <td>Main structure markup</td>
              <td>Jul 28, 2015</td>
              <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            <tr>
              <td class="user-avatar"> <img src="assets/img/avatar5.png" alt="Avatar">Justine Myranda</td>
              <td>Left sidebar adjusments</td>
              <td>Jul 15, 2015</td>
              <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            <tr>
              <td class="user-avatar"> <img src="assets/img/avatar3.png" alt="Avatar">Sherwood Clifford</td>
              <td>Topbar dropdown style</td>
              <td>Jun 30, 2015</td>
              <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection