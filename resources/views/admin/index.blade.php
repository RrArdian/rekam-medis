@extends('layouts.master')

@section('css-content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/morris/morris.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
@stop

@section('header')
@include('layouts._header')
@stop

@section('sidebar')
@include('admin._sidebar')
@stop

@section('title')
Dashboard Admin
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
        <span class="info-box-number">150.000 <small>dokter</small></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-medkit"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Instansi Medis</span>
        <span class="info-box-number">20.000<small> unit</small></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-plus-square"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pasien Terdaftar</span>
        <span class="info-box-number">214.876.830<small> pasien</small></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
</div><!-- /.row -->

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
</div><!-- /.row -->

<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <div class="col-md-8">
    <!-- MAP & BOX PANE -->
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Laporan Kunjungan Pasien</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body no-padding">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div class="pad">
              <!-- Map will be created here -->
              <div id="world-map-markers" style="height: 325px;"></div>
            </div>
          </div><!-- /.col -->
          <div class="col-md-3 col-sm-4">
            <div class="pad box-pane-right bg-green" style="min-height: 280px">
              <div class="description-block margin-bottom">
                <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                <h5 class="description-header">214.876.830</h5>
                <span class="description-text">TOTAL PASIEN</span>
              </div><!-- /.description-block -->
              <div class="description-block margin-bottom">
                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                <h5 class="description-header">30%</h5>
                <span class="description-text">Rawat Inap</span>
              </div><!-- /.description-block -->
              <div class="description-block">
                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                <h5 class="description-header">70%</h5>
                <span class="description-text">Rawat Jalan</span>
              </div><!-- /.description-block -->
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="row">
      <div class="col-md-6">
        <!-- DIRECT CHAT -->
        <div class="box box-warning direct-chat direct-chat-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Chat Klien</h3>
            <div class="box-tools pull-right">
              <span data-toggle="tooltip" title="3 Pesan baru" class='badge bg-yellow'>3</span>
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages">
              <!-- Message. Default to the left -->
              <div class="direct-chat-msg">
                <div class='direct-chat-info clearfix'>
                  <span class='direct-chat-name pull-left'>dr. Darmawan</span>
                  <span class='direct-chat-timestamp pull-right'>23 Jan 2:00 pm</span>
                </div><!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="{{ url('/') }}/assets/img/user1-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  Is this template really for free? That's unbelievable!
                </div><!-- /.direct-chat-text -->
              </div><!-- /.direct-chat-msg -->

              <!-- Message to the right -->
              <div class="direct-chat-msg right">
                <div class='direct-chat-info clearfix'>
                  <span class='direct-chat-name pull-right'>dr. dr. Sarah</span>
                  <span class='direct-chat-timestamp pull-left'>23 Jan 2:05 pm</span>
                </div><!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="{{ url('/') }}/assets/img/user3-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  You better believe it!
                </div><!-- /.direct-chat-text -->
              </div><!-- /.direct-chat-msg -->

              <!-- Message. Default to the left -->
              <div class="direct-chat-msg">
                <div class='direct-chat-info clearfix'>
                  <span class='direct-chat-name pull-left'>dr. Darmawan</span>
                  <span class='direct-chat-timestamp pull-right'>23 Jan 5:37 pm</span>
                </div><!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="{{ url('/') }}/assets/img/user1-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  Working with AdminLTE on a great new app! Wanna join?
                </div><!-- /.direct-chat-text -->
              </div><!-- /.direct-chat-msg -->

              <!-- Message to the right -->
              <div class="direct-chat-msg right">
                <div class='direct-chat-info clearfix'>
                  <span class='direct-chat-name pull-right'>dr. dr. Sarah</span>
                  <span class='direct-chat-timestamp pull-left'>23 Jan 6:10 pm</span>
                </div><!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="{{ url('/') }}/assets/img/user3-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  I would love to.
                </div><!-- /.direct-chat-text -->
              </div><!-- /.direct-chat-msg -->

            </div><!--/.direct-chat-messages-->


            <!-- Contacts are loaded here -->
            <div class="direct-chat-contacts">
              <ul class='contacts-list'>
                <li>
                  <a href='#'>
                    <img class='contacts-list-img' src='{{ ("/") }}assets/img/user1-128x128.jpg'/>
                    <div class='contacts-list-info'>
                      <span class='contacts-list-name'>
                        Count Dracula
                        <small class='contacts-list-date pull-right'>2/28/2015</small>
                      </span>
                      <span class='contacts-list-msg'>How have you been? I was...</span>
                    </div><!-- /.contacts-list-info -->
                  </a>
                </li><!-- End Contact Item -->
                <li>
                  <a href='#'>
                    <img class='contacts-list-img' src='{{ ("/") }}assets/img/user7-128x128.jpg'/>
                    <div class='contacts-list-info'>
                      <span class='contacts-list-name'>
                        dr. Sarah Doe
                        <small class='contacts-list-date pull-right'>2/23/2015</small>
                      </span>
                      <span class='contacts-list-msg'>I will be waiting for...</span>
                    </div><!-- /.contacts-list-info -->
                  </a>
                </li><!-- End Contact Item -->
                <li>
                  <a href='#'>
                    <img class='contacts-list-img' src='{{ ("/") }}assets/img/user3-128x128.jpg'/>
                    <div class='contacts-list-info'>
                      <span class='contacts-list-name'>
                        dr. Nadia Jolie
                        <small class='contacts-list-date pull-right'>2/20/2015</small>
                      </span>
                      <span class='contacts-list-msg'>I'll call you back at...</span>
                    </div><!-- /.contacts-list-info -->
                  </a>
                </li><!-- End Contact Item -->
                <li>
                  <a href='#'>
                    <img class='contacts-list-img' src='{{ ("/") }}assets/img/user5-128x128.jpg'/>
                    <div class='contacts-list-info'>
                      <span class='contacts-list-name'>
                        dr. Norah S. Vans
                        <small class='contacts-list-date pull-right'>2/10/2015</small>
                      </span>
                      <span class='contacts-list-msg'>Where is your new...</span>
                    </div><!-- /.contacts-list-info -->
                  </a>
                </li><!-- End Contact Item -->
                <li>
                  <a href='#'>
                    <img class='contacts-list-img' src='{{ ("/") }}assets/img/user6-128x128.jpg'/>
                    <div class='contacts-list-info'>
                      <span class='contacts-list-name'>
                        dr. Yohannes K.
                        <small class='contacts-list-date pull-right'>1/27/2015</small>
                      </span>
                      <span class='contacts-list-msg'>Can I take a look at...</span>
                    </div><!-- /.contacts-list-info -->
                  </a>
                </li><!-- End Contact Item -->
                <li>
                  <a href='#'>
                    <img class='contacts-list-img' src='{{ ("/") }}assets/img/user8-128x128.jpg'/>
                    <div class='contacts-list-info'>
                      <span class='contacts-list-name'>
                        Kenneth M.
                        <small class='contacts-list-date pull-right'>1/4/2015</small>
                      </span>
                      <span class='contacts-list-msg'>Never mind I found...</span>
                    </div><!-- /.contacts-list-info -->
                  </a>
                </li><!-- End Contact Item -->
              </ul><!-- /.contatcts-list -->
            </div><!-- /.direct-chat-pane -->
          </div><!-- /.box-body -->
          <div class="box-footer">
            <form action="#" method="post">
              <div class="input-group">
                <input type="text" name="message" placeholder="Masukkan pesan..." class="form-control"/>
                <span class="input-group-btn">
                  <button type="button" class="btn btn-warning btn-flat">Kirim</button>
                </span>
              </div>
            </form>
          </div><!-- /.box-footer-->
        </div><!--/.direct-chat -->
      </div><!-- /.col -->

      <div class="col-md-6">
        <!-- USERS LIST -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Klien Terakhir</h3>
            <div class="box-tools pull-right">
              <span class="label label-danger">8 klien baru</span>
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body no-padding">
            <ul class="users-list clearfix">
              <li>
                <img src="{{ url('/') }}/assets/img/user1-128x128.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Darmawan</a>
                <span class="users-list-date">Hari ini</span>
              </li>
              <li>
                <img src="{{ url('/') }}/assets/img/user8-128x128.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Nyoman</a>
                <span class="users-list-date">Kemarin</span>
              </li>
              <li>
                <img src="{{ url('/') }}/assets/img/user7-128x128.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Hani</a>
                <span class="users-list-date">12 Jan</span>
              </li>
              <li>
                <img src="{{ url('/') }}/assets/img/user6-128x128.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Yohannes</a>
                <span class="users-list-date">12 Jan</span>
              </li>
              <li>
                <img src="{{ url('/') }}/assets/img/user2-160x160.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Alexandria</a>
                <span class="users-list-date">13 Jan</span>
              </li>
              <li>
                <img src="{{ url('/') }}/assets/img/user5-128x128.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Sarah</a>
                <span class="users-list-date">14 Jan</span>
              </li>
              <li>
                <img src="{{ url('/') }}/assets/img/user4-128x128.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Norah</a>
                <span class="users-list-date">15 Jan</span>
              </li>
              <li>
                <img src="{{ url('/') }}/assets/img/user3-128x128.jpg" alt="User Image"/>
                <a class="users-list-name" href="#">dr. Nadia</a>
                <span class="users-list-date">15 Jan</span>
              </li>
            </ul><!-- /.users-list -->
          </div><!-- /.box-body -->
          <div class="box-footer text-center">
            <a href="javascript::" class="uppercase">Tampilkan semua klien</a>
          </div><!-- /.box-footer -->
        </div><!--/.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- TABLE: LATEST ORDERS -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Diagnosa Terakhir</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
              <tr>
                <th>ID Rekam Medis</th>
                <th>Diagnosa</th>
                <th>Status</th>
                <th>Tren</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Diabetes Mellitus</td>
                <td><span class="label label-success">Aman</span></td>
                <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Infeksi Saluran Nafas dan Paru paru</td>
                <td><span class="label label-warning">Waspada</span></td>
                <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Tuberculosis</td>
                <td><span class="label label-danger">Bahaya</span></td>
                <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Asma</td>
                <td><span class="label label-info">Sangat Aman</span></td>
                <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Jantung Coroner</td>
                <td><span class="label label-warning">Waspada</span></td>
                <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Kanker Pankreas</td>
                <td><span class="label label-danger">Bahaya</span></td>
                <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
              </tr>
              <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Spinocerebellar Degeneration</td>
                <td><span class="label label-success">Aman</span></td>
                <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
              </tr>
            </tbody>
          </table>
        </div><!-- /.table-responsive -->
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Tambahkan Data Diagnosa</a>
        <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Diagnosa</a>
      </div><!-- /.box-footer -->
    </div><!-- /.box -->
  </div><!-- /.col -->

  <div class="col-md-4">
    <!-- Info Boxes Style 2 -->
    <div class="info-box bg-aqua">
      <span class="info-box-icon"><i class="fa fa-hospital-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Unit Terhubung</span>
        <span class="info-box-number">18.500 <small>unit</small></span>
        <div class="progress">
          <div class="progress-bar" style="width: 92%"></div>
        </div>
        <span class="progress-description">
          Meningkat 92% dalam waktu 24 hari
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
    <div class="info-box bg-red">
      <span class="info-box-icon"><i class="fa fa-stethoscope"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Dokter Tersedia</span>
        <span class="info-box-number">201.890 <small>dokter</small></span>
        <div class="progress">
          <div class="progress-bar" style="width: 67%"></div>
        </div>
        <span class="progress-description">
          Meningkat 67% dalam waktu 24 hari
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
    
    <div class="info-box bg-green">
      <span class="info-box-icon"><i class="fa fa-medkit"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">INSTANSI MEDIS</span>
        <span class="info-box-number">25.000</span>
        <div class="progress">
          <div class="progress-bar" style="width: 35%"></div>
        </div>
        <span class="progress-description">
          Meningkat 35% dalam waktu 24 hari
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
    
    <div class="info-box bg-yellow">
      <span class="info-box-icon"><i class="fa fa-plus-square"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">PASIEN TERDAFTAR</span>
        <span class="info-box-number">214.876.830</span>
        <div class="progress">
          <div class="progress-bar" style="width: 10%"></div>
        </div>
        <span class="progress-description">
          Meningkat 10% dalam waktu 24 hari
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Tren Penyakit</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-8">
            <div class="chart-responsive">
              <canvas id="pieChart" height="150"></canvas>
            </div><!-- ./chart-responsive -->
          </div><!-- /.col -->
          <div class="col-md-4">
            <ul class="chart-legend clearfix">
              <li><i class="fa fa-circle-o text-red"></i> ISPA</li>
              <li><i class="fa fa-circle-o text-green"></i> Kanker</li>
              <li><i class="fa fa-circle-o text-yellow"></i> Asma</li>
              <li><i class="fa fa-circle-o text-aqua"></i> TBC</li>
              <li><i class="fa fa-circle-o text-light-blue"></i> Diare</li>
              <li><i class="fa fa-circle-o text-gray"></i> Kadas</li>
            </ul>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.box-body -->
      <div class="box-footer no-padding">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Sumatera Barat <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
          <li><a href="#">Kalimantan Barat <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
          <li><a href="#">Kendari <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
        </ul>
      </div><!-- /.footer -->
    </div><!-- /.box -->

    <!-- PRODUCT LIST -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Penyakit yang Baru</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <ul class="products-list product-list-in-box">
          <li class="item">
            <div class="product-img">
              <img src="{{ url('/') }}/assets/img/default-50x50.gif" alt="Product Image"/>
            </div>
            <div class="product-info">
              <a href="javascript::;" class="product-title">Spinocerebellar Degeneration<span class="label label-warning pull-right">Waspada</span></a>
              <span class="product-description">
                Penyakit yang menyerang otak kecil dan tulang belakang.
              </span>
            </div>
          </li><!-- /.item -->
          <li class="item">
            <div class="product-img">
              <img src="{{ url('/') }}/assets/img/default-50x50.gif" alt="Product Image"/>
            </div>
            <div class="product-info">
              <a href="javascript::;" class="product-title">HIV <span class="label label-danger pull-right">Berbahaya</span></a>
              <span class="product-description">
                Adalah Virus yang menyerang sistem kekebalan tubuh
              </span>
            </div>
          </li><!-- /.item -->
          <li class="item">
            <div class="product-img">
              <img src="{{ url('/') }}/assets/img/default-50x50.gif" alt="Product Image"/>
            </div>
            <div class="product-info">
              <a href="javascript::;" class="product-title">ISPA <span class="label label-danger pull-right">Berbahaya</span></a>
              <span class="product-description">
                Adalah penyakit yang disebabkan oleh infeksi saluran Nafas
              </span>
            </div>
          </li><!-- /.item -->
          <li class="item">
            <div class="product-img">
              <img src="{{ url('/') }}/assets/img/default-50x50.gif" alt="Product Image"/>
            </div>
            <div class="product-info">
              <a href="javascript::;" class="product-title">TBC <span class="label label-warning pull-right">Waspada</span></a>
              <span class="product-description">
                Adalah penyakit yang disebabkan oleh bakteri TB
              </span>
            </div>
          </li><!-- /.item -->
        </ul>
      </div><!-- /.box-body -->
      <div class="box-footer text-center">
        <a href="javascript::;" class="uppercase">Tampilkan semua penyakit</a>
      </div><!-- /.box-footer -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div>

@stop

@section('js-content')
<script src="{{ asset('assets/plugins/raphael/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"type="text/javascript"></script>
<script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/dashboard2.js') }}" type="text/javascript"></script>
@stop