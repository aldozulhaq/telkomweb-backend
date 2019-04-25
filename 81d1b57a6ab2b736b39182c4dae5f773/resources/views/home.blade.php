@extends('layouts.master')
@section('title','Dashboard') 
@section('content')

<div class="row">
<a href="{{ url('/totalpost')}}"><div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                  <div id="spark1" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Total Post</div>
                    <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                    </div>
                  </div>
                </div>
    </div></a>
    <a href="{{ url('pengunjung')}}"><div class="col-xs-12 col-md-6 col-lg-3">
                <div class="widget widget-tile">
                  <div id="spark2" class="chart sparkline"></div>
                  <div class="data-info">
                    <div class="desc">Pengunjung</div>
                    <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                    </div>
                  </div>
                </div>
    </div></a>
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
        {{-- table --}}
       

       

        <div class="row">
          <div class="col-md-6">
              <div class="widget widget-fullwidth be-loading">
            <div class="panel panel-default panel-table">
              <div class="panel-heading"> 
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync toggle-loading"></span>
                  </div>
                <div class="title">Artikel Terbaru</div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-borderless">
                  <thead>
                    <tr>
                      <th style="width:40%;">Judul</th>
                      <th style="width:20%;">Tanggal</th>
                      <th style="width:20%;">Status</th>
                      <th style="width:5%;" class="actions">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="no-border-x">
                    <tr>
                      <td>zona tkj</td>
                      <td>Aug 23, 2016</td>
                      <td class="text-success">Completed</td>
                      <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                    </tr>
                    <tr>
                      <td>zona rpl 6</td>
                      <td>Aug 20, 2016</td>
                      <td class="text-success">Completed</td>
                      <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                    </tr>
                    <tr>
                      <td>zona mm</td>
                      <td>Aug 18, 2016</td>
                      <td class="text-warning">Pending</td>
                      <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                    </tr>
                    <tr>
                      <td>sekolah</td>
                      <td>Aug 15, 2016</td>
                      <td class="text-warning">Pending</td>
                      <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                    </tr>
                    <tr>
                      <td>IOT</td>
                      <td>Aug 13, 2016</td>
                      <td class="text-danger">Cancelled</td>
                      <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="be-spinner">
                  <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                  </svg>
                </div>
            </div>
          </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                 
                </div>
                <div class="title">Pengunjung</div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th style="width:37%;">Nama</th>
                      <th style="width:36%;">Email</th>
                      <th>Date</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="user-avatar"> <img src="assets/img/avatar5.png" alt="Avatar">Irgi fahrias putra</td>
                      <td>fahrias600@gmail.com</td>
                      <td>Aug 16, 2016</td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="assets/img/avatar6.png" alt="Avatar">D.anisah dwi farhani</td>
                      <td>Denisa@gmail.com</td>
                      <td>Jul 15, 2016</td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="assets/img/avatar4.png" alt="Avatar">aldo izzulhaq</td>
                      <td>aldo@gmail.com</td>
                      <td>Jul 28, 2016</td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="assets/img/avatar3.png" alt="Avatar">aldila dina taskhiana</td>
                      <td>aldiladinataa20@gmail.com</td>
                      <td>Jun 30, 2016</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="widget widget-fullwidth be-loading">
              <div class="widget-head">
                <div class="tools">
                </div><span class="title">Statistic Data</span>
              </div>
              <div class="widget-chart-container">
                <div class="widget-chart-info">
                  <ul class="chart-legend-horizontal">
                    <li><span data-color="main-chart-color1"></span> Pengunjung</li>
                    <li><span data-color="main-chart-color2"></span> Artikel</li>
                    <li><span data-color="main-chart-color3"></span> Album</li>
                  </ul>
                </div>
                <div class="widget-counter-group widget-counter-group-right">
                  <div class="counter counter-big">
                    <div class="value">25%</div>
                    <div class="desc">Pengunjung</div>
                  </div>
                  <div class="counter counter-big">
                    <div class="value">75%</div>
                    <div class="desc">Artikel</div>
                  </div>
                  <div class="counter counter-big">
                    <div class="value">45%</div>
                    <div class="desc">Album</div>
                  </div>
                </div>
                <div id="main-chart" style="height: 260px;"></div>
              </div>
              <div class="be-spinner">
                <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                  <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                </svg>
              </div>
            </div>
          </div>
        </div>
       

@endsection
