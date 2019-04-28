@extends('layouts.master')
@section('title','tulis judul') 
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-divider">Input Groups<span class="panel-subtitle">Bootstrap input groups components</span></div>
        <div class="panel-body">
          <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
            <div class="form-group">
              <label class="col-sm-3 control-label">Input Text</label>
              <div class="col-sm-6">
                <div class="input-group xs-mb-15"><span class="input-group-addon">@</span>
                  <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="input-group xs-mb-15">
                  <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                </div>
                <div class="input-group xs-mb-15"><span class="input-group-addon">$</span>
                  <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Input Sizing</label>
              <div class="col-sm-6">
                <div class="input-group input-group-lg xs-mb-15"><span class="input-group-addon">@</span>
                  <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="input-group xs-mb-15"><span class="input-group-addon">@</span>
                  <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="input-group input-group-sm xs-mb-15"><span class="input-group-addon">@</span>
                  <input type="text" placeholder="Username" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Checkbox & Radio</label>
              <div class="col-sm-6">
                <div class="input-group xs-mb-15">
                  <div class="input-group-addon">
                    <div class="be-checkbox">
                      <input type="checkbox" id="check12">
                      <label for="check12"></label>
                    </div>
                  </div>
                  <input type="text" class="form-control">
                </div>
                <div class="input-group xs-mb-15">
                  <div class="input-group-addon">
                    <div class="be-radio">
                      <input type="radio" id="rad12">
                      <label for="rad12"></label>
                    </div>
                  </div>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Button Addons</label>
              <div class="col-sm-6">
                <div class="input-group xs-mb-15">
                  <input type="text" class="form-control"><span class="input-group-btn">
                    <button type="button" class="btn btn-primary">Go!</button></span>
                </div>
                <div class="input-group xs-mb-15">
                  <input type="text" class="form-control">
                  <div class="input-group-btn">
                    <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
                <div class="input-group xs-mb-15">
                  <input type="text" class="form-control">
                  <div class="input-group-btn">
                    <button tabindex="-1" type="button" class="btn btn-primary">Action</button>
                    <button tabindex="-1" data-toggle="dropdown" type="button" class="btn btn-primary btn-shade1 dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection