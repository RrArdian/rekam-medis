@extends('layouts.master')

@section('css-content')
<link rel="stylesheet" href="{{ asset('assets/plugins/datetimepicker/bootstrap-datetimepicker.min.css') }}">
@stop

@section('header')
@include('layouts._header')
@stop

@section('sidebar')
@include('operator._sidebar')
@stop

@section('title')
Data Rekam Medis
@stop

@section('url-breadcrumb')
<li><a href="{{ url('myadmin/home') }}"><i class="fa fa-tags"></i> Home</a></li>
<li><a href="{{ url('myadmin/agenda') }}">Data Pasien</a></li>
<li class="active">Registrasi Pasien</li>
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Input Data Rekam Medis (Agus Wintala)</h3>
				<h3 class="box-title pull-right">No : 0089112</h3>
			</div>
			<div class="box-body">
				<div class="col-sm-12">
					<form method="POST" action="{{ url('registrasi/pasien') }}" accept-charset="UTF-8" class="form-horizontal panel"><input name="_token" type="hidden" value="{{ csrf_token() }}">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_1" data-toggle="tab">Pengkajian Umum</a></li>
								<li><a href="#tab_2" data-toggle="tab">Hasil Laborat</a></li>
								<li><a href="#tab_3" data-toggle="tab">Resep Dokter</a></li>
								<li><a href="#tab_4" data-toggle="tab">Data Terkini</a></li>
								<li><a href="#tab_5" data-toggle="tab">Pengkajian Jatuh</a></li>
								<li><a href="#tab_6" data-toggle="tab">Pengkajian Tanda Vital</a></li>
								<li><a href="#tab_7" data-toggle="tab">Pemindahan Pasien</a></li>						
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1">
									<div class="form-group">
										<label for="title" class="control-label">Status Kesehatan</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Kebutuhan Dasar</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Aktivitas</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Persepsi</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Istirahat</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Peran Hubungan</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Seksual Reproduksi</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Stress Koping</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Pola Nilai Kepercayaan</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
								</div>
								<div class="tab-pane" id="tab_2">
									<div class="form-group">
										<label for="title" class="control-label">File Hasil Laborat</label>
										<input class="form-control" placeholder="" name="title" type="file" id="title" required>
									</div>
								</div>
								<div class="tab-pane" id="tab_3">
									<div class="form-group">
										<label for="title" class="control-label">Nama Dokter</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Deskripsi</label>
										<textarea class="form-control" cols="5"></textarea>
									</div>
								</div>
								<div class="tab-pane" id="tab_4">
									<div class="form-group">
										<label for="title" class="control-label">Diagnosis</label>
										<textarea class="form-control" cols="5"></textarea>
									</div>
								</div>
								<div class="tab-pane" id="tab_5">
									<div class="form-group">
										<label for="title" class="control-label">Riwayat Jatuh</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Skala Riwayat Jatuh (0 - 25)</label>
										<input class="form-control" placeholder="" name="title" type="number" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Alat Bantu</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Skala Alat Bantu (0 - 25)</label>
										<input class="form-control" placeholder="" name="title" type="number" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Terapi</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Skala Terapi (0 - 25)</label>
										<input class="form-control" placeholder="" name="title" type="number" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Gaya Berjalan</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Skala Gaya Berjalan (0 - 25)</label>
										<input class="form-control" placeholder="" name="title" type="number" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Status Mental</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Skala Status Mental (0 - 25)</label>
										<input class="form-control" placeholder="" name="title" type="number" id="title" required>
									</div>
								</div>
								<div class="tab-pane" id="tab_6">
									<div class="form-group">
										<label for="title" class="control-label">Suhu Tubuh</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Denyut Nadi</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Tekanan Darah</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="title" class="control-label">Respirasi</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
								</div>
								<div class="tab-pane" id="tab_7">
									<div class="form-group">
										<label for="title" class="control-label">Instansi Kesehatan Lama</label>
										<input class="form-control" placeholder="" name="title" type="text" id="title" required>
									</div>
									<div class="form-group">
										<label for="content" class="control-label">Tanggal Pemindahan</label>
										<input type="text" id="begin" name="begin" class="form-control getDate" required>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i> Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('js-content')
	<script src="{{ asset('/assets/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('/assets/plugins/moment/moment-with-locales.min.js') }}"></script>
	<script src="{{ asset('/assets/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
	<script>
	$('.getDate').datetimepicker({locale: 'id',format: 'YYYY-MM-DD'});
	</script>
@stop