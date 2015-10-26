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
Registrasi Pasien
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
				<h3 class="box-title">Registrasi Pasien Baru</h3>
			</div>
			<div class="box-body">
				<div class="col-sm-12">
					<form method="POST" action="{{ url('registrasi/pasien') }}" accept-charset="UTF-8" class="form-horizontal panel"><input name="_token" type="hidden" value="{{ csrf_token() }}">		
						<div class="form-group">
							<label for="nama" class="control-label">Nama Lengkap</label>
							<input class="form-control" placeholder="" name="nama" type="text" id="nama" required>
						</div>
						<div class="form-group">
							<label for="nik" class="control-label">NIK</label>
							<input class="form-control" placeholder="" name="nik" type="text" id="nik" required>
						</div>
						<div class="form-group">
							<label for="tempat" class="control-label">Tempat Lahir</label>
							<input class="form-control" placeholder="" name="tempat" type="text" id="tempat" required>
						</div>
						<div class="form-group">
							<label for="tanggal" class="control-label">Tanggal Lahir</label>
							<input type="text" id="tanggal" name="tanggal" class="form-control getDate" required>
						</div>
						<div class="form-group">
							<label for="agama" class="control-label">Agama</label>
							<select name="agama" class="form-control" required>
								<option value="">-- Pilih Agama --</option>
								<option value="Islam">Islam</option>
								<option value="Katholik">Katholik</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindhu">Hindhu</option>
								<option value="Buddha">Buddha</option>
								<option value="Konghuchu">Konghuchu</option>
							</select>
						</div>
						<div class="form-group">
							<label for="jkel" class="control-label">Jenis Kelamin</label>
							<select name="jkel" class="form-control" required>
								<option value="">-- Pilih Jenis Kelamin --</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label for="status" class="control-label">Status Kawin</label>
							<select name="status" class="form-control" required>
								<option value="">-- Pilih Status Kawin --</option>
								<option value="Belum Kawin">Belum Kawin</option>
								<option value="Menikah">Menikah</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pendidikan" class="control-label">Pendidikan</label>
							<select name="pendidikan" class="form-control" required>
								<option value="">-- Pilih Pendidikan --</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
								<option value="D1">D1</option>
								<option value="D2">D2</option>
								<option value="D3">D3</option>
								<option value="D4">D4</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
								<option value="S3">S3</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pekerjaan" class="control-label">Pekerjaan</label>
							<select name="pekerjaan" class="form-control" required>
								<option value="">-- Pilih Pekerjaan --</option>
								<option value="PNS">PNS</option>
								<option value="Pelajar">Pelajar</option>
								<option value="Mahasiswa">Mahasiswa</option>
								<option value="Swasta">Swasta</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Buruh">Buruh</option>
								<option value="Karyawan">Karyawan</option>
								<option value="TNI/Polri">TNI/Polri</option>
								<option value="Pegawai">Pegawai</option>
							</select>
						</div>
						<div class="form-group">
							<label for="suku" class="control-label">Suku Bangsa</label>
							<input class="form-control" placeholder="" name="suku" type="text" id="suku" required>
						</div>
						<div class="form-group">
							<label for="content" class="control-label">Provinsi</label>
							<select name="provinsi" class="form-control" id="provinsi" required>
								<option>-- Pilih Provinsi --</option>
								@foreach($provinsi as $prov)
								<option value="{{ $prov->id }}">{{ $prov->nama }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="content" class="control-label">Kabupaten</label>
							<select name="kabupaten" id="kabupaten" class="form-control" required>
								<option>-- Pilih Kabupaten --</option>
							</select>
						</div>
						<div class="form-group">
							<label for="content" class="control-label">Kecamatan</label>
							<select name="kecamatan" id="kecamatan" class="form-control" required>
								<option>-- Pilih Kecamatan --</option>
							</select>
						</div>
						<div class="form-group">
							<label for="kelurahan" class="control-label">Kelurahan</label>
							<input class="form-control" placeholder="" name="kelurahan" type="text" id="kelurahan" required>
						</div>
						<div class="form-group">
							<label for="alamat" class="control-label">Alamat</label>
							<input class="form-control" placeholder="" name="alamat" type="text" id="alamat" required>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i> Simpan</button>
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
	@if($errors->has())
		toastr.error('Terjadi kesalahan. Silakan ulangi lagi!')
		@foreach($errors->all() as $error)
			toastr.error('{{ $error }}');
		@endforeach
	@elseif(\Session::has('message'))
		toastr.success("{{ \Session::get('message') }}")
	@endif
	$('.getDate').datetimepicker({locale: 'id',format: 'YYYY-MM-DD'});
	$(document).ready(function() {
	    $("#provinsi").change(function() {
	        $.getJSON("{{ url('/cari-kabupaten/') }}/" + $("#provinsi").val(), function(data) {
	            var $kabupaten = $("#kabupaten");
	            $kabupaten.empty();
	            $.each(data, function(index, value) {
	                $kabupaten.append('<option value="' + index +'">' + value + '</option>');
	            });
	        $("#kabupaten").trigger("change");
	        	$.getJSON("{{ url('/cari-kecamatan/') }}/" + $("#kabupaten").val(), function(data) {
	        	    var $kecamatan = $("#kecamatan");
	        	    $kecamatan.empty();
	        	    $.each(data, function(index, value) {
	        	        $kecamatan.append('<option value="' + index +'">' + value + '</option>');
	        	    });
	        	$("#kecamatan").trigger("change");
	        		/* trigger next drop down list not in the example */
	        	});
	        });
	    });
	});
  </script>
@stop