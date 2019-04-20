@extends('layouts.master')
@section('title','Pengunjung Web') 
@section('content')

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

@endsection