@extends('layouts.master')

@section('css-content')
<link rel="stylesheet" href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap.css') }}">
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
	<div class="col-xs-12">
	    <div class="box">
	    	<div class="box-header">
	    		<h3 class="box-title pull-left">Pendaftaran Pasien Masuk</h3>
	    	</div> 
	    	<div class="box-header">           
	    		<div class="col-md-12">
	    			<div class="form-group">
	    				<input type="text" class="form-control" placeholder="Masukan Nomor Rekam Medis atau NIK" id="kode_rm">
	    			</div>
	    			<button type="button" class="btn btn-primary btn-md" id="cari">Cari</button>
	    		</div>
	    	</div>
	    </div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Pasien Terakhir Masuk</h3>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nomor Rekam Medis</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Orang Tua</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>00081192</td>
							<td>Agus Wintala</td>
							<td>Gurami, Berbah, Berbah, Sleman, Yogyakarta</td>
							<td>Sukemi</td>
						</tr>
						<tr>
							<td>2</td>
							<td>00121192</td>
							<td>Jonathan</td>
							<td>Peni, Palbapang, Bantul, Bantul, Yogyakarta</td>
							<td>Juminten</td>
						</tr>
						<tr>
							<td>3</td>
							<td>0011292</td>
							<td>Putri Julia</td>
							<td>Sukamaju, Muja-muju, Umbulharjo, Yogyakarta, Yogyakarta</td>
							<td>Juminten</td>
						</tr>
						<tr>
							<td>4</td>
							<td>00012212</td>
							<td>Irfan Luthfi</td>
							<td>Perum Gua Indah, Sendangsari, Pajangan, Bantul, Yogyakarta</td>
							<td>Angela Mariska</td>
						</tr>
						<tr>
							<td>5</td>
							<td>0076192</td>
							<td>Fauzi Solikhin</td>
							<td>Tegal, Ngoto, Ngemplak, Sleman, Yogyakarta</td>
							<td>Umi Khasanah</td>
						</tr>
						<tr>
							<td>6</td>
							<td>000102192</td>
							<td>Ariva Restiani</td>
							<td>Hargowilis, Hargowilis, Kokap, Kulon Progo, Yogyakarta</td>
							<td>Fatimah</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop

@section('js-content')
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script>
	$('#example1').dataTable();
	$('#cari').click(function() {
		/*$.getJSON("{{ url('/pendaftaran/pasien') }}/" + $("#kode_rm").val(), function(data) {
		    $.each(data, function(index, value) {
		        console.log(data);
			});
		});*/
		if ($("#kode_rm").val() == '') {
			toastr.error('Masukan NIK atau nomor rekam medis terlebih dahulu!');
		} else {
			window.open('{{ url("/pendaftaran/pasien") }}/' + $("#kode_rm").val());
		}
	});
</script>
@stop