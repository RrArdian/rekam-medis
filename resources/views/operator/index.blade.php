@extends('layouts.master')

@section('css-content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/morris/morris.css') }}">
@stop

@section('header')
@include('layouts._header')
@stop

@section('sidebar')
@include('operator._sidebar')
@stop

@section('title')
Dashboard Operator
@stop

@section('url-breadcrumb')
<li><a href="#"><i class="fa fa-tags"></i> Home</a></li>
<li class="active">Dashboard</li>
@stop

@section('content')
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-hospital-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Terhubung</span>
        <span class="info-box-number">15.000 <small>unit</small></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-stethoscope"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Dokter Tersedia</span>
        <span class="info-box-number">89 <small>dokter</small></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-medkit"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pasien Hari Ini</span>
        <span class="info-box-number">1578<small> pasien</small></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-plus-square"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pasien Terdaftar</span>
        <span class="info-box-number">231.234<small> pasien</small></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
</div>

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Laporan Kunjungan Pasien Per Bulan</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <div class="btn-group">
            <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-8">
            <p class="text-center">
              <strong>Range: 1 Januari 2015 - 24 Oktober 2015</strong>
            </p>
            <div class="chart">
              <!-- Sales Chart Canvas -->
              <canvas id="salesChart" height="180"></canvas>
            </div><!-- /.chart-responsive -->
          </div><!-- /.col -->
          <div class="col-md-4">
            <p class="text-center">
              <strong>Target Ketercapaian</strong>
            </p>
            <div class="progress-group">
              <span class="progress-text">Unit Terhubung</span>
              <span class="progress-number"><b>15.000</b>/20.000</span>
              <div class="progress sm">
                <div class="progress-bar progress-bar-aqua" style="width: 75%"></div>
              </div>
            </div><!-- /.progress-group -->
            <div class="progress-group">
              <span class="progress-text">Dokter Tersedia</span>
              <span class="progress-number"><b>150.000</b>/300.000</span>
              <div class="progress sm">
                <div class="progress-bar progress-bar-red" style="width: 50%"></div>
              </div>
            </div><!-- /.progress-group -->
            <div class="progress-group">
              <span class="progress-text">Instansi Medis Siap</span>
              <span class="progress-number"><b>20.000</b>/30.000</span>
              <div class="progress sm">
                <div class="progress-bar progress-bar-green" style="width: 66%"></div>
              </div>
            </div><!-- /.progress-group -->
            <div class="progress-group">
              <span class="progress-text">Pasien Terdaftar</span>
              <span class="progress-number"><b>214.876.830</b>/258.705.000</span>
              <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 83%"></div>
              </div>
            </div><!-- /.progress-group -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- ./box-body -->
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="description-block border-right">
              <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 5%</span>
              <h5 class="description-header">15.000 unit</h5>
              <span class="description-text">UNIT TERHUBUNG</span>
            </div><!-- /.description-block -->
          </div><!-- /.col -->
          <div class="col-sm-3 col-xs-6">
            <div class="description-block border-right">
              <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
              <h5 class="description-header">150.000 dokter</h5>
              <span class="description-text">DOKTER TERSEDIA</span>
            </div><!-- /.description-block -->
          </div><!-- /.col -->
          <div class="col-sm-3 col-xs-6">
            <div class="description-block border-right">
              <span class="description-percentage text-green"><i class="fa fa-caret-left"></i> 0</span>
              <h5 class="description-header">20.000 unit</h5>
              <span class="description-text">INSTANSI MEDIS</span>
            </div><!-- /.description-block -->
          </div><!-- /.col -->
          <div class="col-sm-3 col-xs-6">
            <div class="description-block">
              <span class="description-percentage text-red"><i class="fa fa-caret-up"></i> 20%</span>
              <h5 class="description-header">214.876.830</h5>
              <span class="description-text">PASIEN TERDAFTAR</span>
            </div><!-- /.description-block -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.box-footer -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div>>

@stop

@section('js-content')
<script src="{{ asset('assets/plugins/raphael/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/dashboard2.js') }}" type="text/javascript"></script>
@stop