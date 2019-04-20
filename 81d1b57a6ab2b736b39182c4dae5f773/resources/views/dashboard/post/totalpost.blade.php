@extends('layouts.master')
@section('title','Total Post') 
@section('content')

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">          
                <div class="widget widget-tile">
                  <div id="spark1" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Total Post</div>
                    <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                    </div>
                  </div>                
            </div>
       </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                  <div id="spark2" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Pengunjung</div>
                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                    </div>
                  </div>
                </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                  <div id="spark3" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Total Artikel</div>
                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="532" class="number">0</span>
                    </div>
                  </div>
                </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                  <div id="spark4" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Album</div>
                    <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                    </div>
                  </div>
                </div>
    </div>
                {{-- TABLE --}}
                
                <div class="col-sm-12">
                        <div class="panel panel-default panel-table">
                          <div class="panel-heading"><b>Total Post</b>  
                          <div class="tools dropdown"><br> <a href="{{url('/tambahpost')}}"><button class="btn btn-rounded btn-space btn-primary">+POST</button></a>
                            </div>
                          </div>
                          <br>
                          <div class="panel-body">
                            <div class="table-responsive noSwipe">
                              <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th style="width:5%;">
                                      <div class="be-checkbox be-checkbox-sm">
                                        <input id="check1" type="checkbox">
                                        <label for="check1"></label>
                                      </div>
                                    </th>
                                    <th style="width:20%;">User</th>
                                    <th style="width:17%;">Judul</th>
                                    <th style="width:15%;">Milestone</th>
                                    <th style="width:10%;">Role</th>
                                    <th style="width:10%;">Tanggal</th>
                                    <th style="width:10%;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="be-checkbox be-checkbox-sm">
                                        <input id="check2" type="checkbox">
                                        <label for="check2"></label>
                                      </div>
                                    </td>
                                    <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar6.png" alt="Avatar"><span>Penelope Thornton</span><span class="cell-detail-description">Developer</span></td>
                                    <td class="cell-detail"> <span>Initial commit</span><span class="cell-detail-description">Bootstrap Admin</span></td>
                                    <td class="text-success">Completed</td>
                                    <td class="cell-detail"><span>Admin</span><span class="cell-detail-description">63e8ec3</span></td>
                                    <td class="cell-detail"><span>May 6, 2016</span><span class="cell-detail-description">8:30</span></td>
                                    <td class="text-left">
                                            <button class="btn btn-rounded btn-space btn-success"><i class="icon icon-left mdi mdi-edit"></i></button>
                                            <button class="btn btn-rounded btn-space btn-danger"><i class="icon icon-left mdi mdi-delete"></i></button>
                                    </td>
                                  </tr>
                                  <tr class="online">
                                    <td>
                                      <div class="be-checkbox be-checkbox-sm">
                                        <input id="check3" type="checkbox">
                                        <label for="check3"></label>
                                      </div>
                                    </td>
                                    <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar4.png" alt="Avatar"><span>Benji Harper</span><span class="cell-detail-description">Designer</span></td>
                                    <td class="cell-detail"> <span>Main structure markup</span><span class="cell-detail-description">CLI Connector</span></td>
                                    <td class="text-warning">Pending</td>
                                    <td class="cell-detail"><span>develop</span><span class="cell-detail-description">4cc1bc2</span></td>
                                    <td class="cell-detail"><span>April 22, 2016</span><span class="cell-detail-description">14:45</span></td>
                                    <td class="text-left">
                                            <button class="btn btn-rounded btn-space btn-success"><i class="icon icon-left mdi mdi-edit"></i></button>
                                            <button class="btn btn-rounded btn-space btn-danger"><i class="icon icon-left mdi mdi-delete"></i></button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="be-checkbox be-checkbox-sm">
                                        <input id="check4" type="checkbox">
                                        <label for="check4"></label>
                                      </div>
                                    </td>
                                    <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar5.png" alt="Avatar"><span>Justine Myranda</span><span class="cell-detail-description">Designer</span></td>
                                    <td class="cell-detail"> <span>Left sidebar adjusments</span><span class="cell-detail-description">Back-end Manager</span></td>
                                    <td class="text-warning">Pending</td>
                                    <td class="cell-detail"><span>develop</span><span class="cell-detail-description">5477993</span></td>
                                    <td class="cell-detail"><span>April 15, 2016</span><span class="cell-detail-description">10:00</span></td>
                                    <td class="text-left">
                                            <button class="btn btn-rounded btn-space btn-success"><i class="icon icon-left mdi mdi-edit"></i></button>
                                            <button class="btn btn-rounded btn-space btn-danger"><i class="icon icon-left mdi mdi-delete"></i></button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="be-checkbox be-checkbox-sm">
                                        <input id="check5" type="checkbox">
                                        <label for="check5"></label>
                                      </div>
                                    </td>
                                    <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar3.png" alt="Avatar"><span>Sherwood Clifford</span><span class="cell-detail-description">Developer</span></td>
                                    <td class="cell-detail"> <span>Topbar dropdown style</span><span class="cell-detail-description">Bootstrap Admin</span></td>
                                    <td class="text-success">Completed</td>
                                    <td class="cell-detail"><span>master</span><span class="cell-detail-description">8cb98ec</span></td>
                                    <td class="cell-detail"><span>April 8, 2016</span><span class="cell-detail-description">17:24</span></td>
                                    <td class="text-left">
                                            <button class="btn btn-rounded btn-space btn-success"><i class="icon icon-left mdi mdi-edit"></i></button>
                                            <button class="btn btn-rounded btn-space btn-danger"><i class="icon icon-left mdi mdi-delete"></i></button>
                                    </td>
                                  </tr>
                                  <tr class="online">
                                    <td>
                                      <div class="be-checkbox be-checkbox-sm">
                                        <input id="check6" type="checkbox">
                                        <label for="check6"></label>
                                      </div>
                                    </td>
                                    <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar.png" alt="Avatar"><span>Kristopher Donny</span><span class="cell-detail-description">Designer</span></td>
                                    <td class="cell-detail"> <span>Right sidebar adjusments</span><span class="cell-detail-description">CLI Connector</span></td>
                                    <td class="text-danger">Cancelled</td>
                                    <td class="cell-detail"><span>master</span><span class="cell-detail-description">65bc2da</span></td>
                                    <td class="cell-detail"><span>Mars 18, 2016</span><span class="cell-detail-description">13:02</span></td>
                                    <td class="text-left">
                                            <button class="btn btn-rounded btn-space btn-success"><i class="icon icon-left mdi mdi-edit"></i></button>
                                           <button class="btn btn-rounded btn-space btn-danger"><i class="icon icon-left mdi mdi-delete"></i></button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

@endsection