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
Daftar Pasien
@stop

@section('url-breadcrumb')
<li><a href="{{ url('myadmin/home') }}"><i class="fa fa-tags"></i> Home</a></li>
<li><a href="{{ url('myadmin/agenda') }}">Data Pasien</a></li>
<li class="active">Daftar Pasien</li>
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Daftar Pasien Hari Ini (Rumah Sakit Umum Daerah Yogyakarta)</h3>
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
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>00081192</td>
							<td>Agus Wintala</td>
							<td>Gurami, Berbah, Berbah, Sleman, Yogyakarta</td>
							<td>Sukemi</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>00121192</td>
							<td>Jonathan</td>
							<td>Peni, Palbapang, Bantul, Bantul, Yogyakarta</td>
							<td>Juminten</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>0011292</td>
							<td>Putri Julia</td>
							<td>Sukamaju, Muja-muju, Umbulharjo, Yogyakarta, Yogyakarta</td>
							<td>Juminten</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>00012212</td>
							<td>Irfan Luthfi</td>
							<td>Perum Gua Indah, Sendangsari, Pajangan, Bantul, Yogyakarta</td>
							<td>Angela Mariska</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>5</td>
							<td>0076192</td>
							<td>Fauzi Solikhin</td>
							<td>Tegal, Ngoto, Ngemplak, Sleman, Yogyakarta</td>
							<td>Umi Khasanah</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>6</td>
							<td>000102192</td>
							<td>Ariva Restiani</td>
							<td>Hargowilis, Hargowilis, Kokap, Kulon Progo, Yogyakarta</td>
							<td>Fatimah</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>7</td>
							<td>00081192</td>
							<td>Agus Wintala</td>
							<td>Gurami, Berbah, Berbah, Sleman, Yogyakarta</td>
							<td>Sukemi</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>8</td>
							<td>00121192</td>
							<td>Jonathan</td>
							<td>Peni, Palbapang, Bantul, Bantul, Yogyakarta</td>
							<td>Juminten</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>9</td>
							<td>0011292</td>
							<td>Putri Julia</td>
							<td>Sukamaju, Muja-muju, Umbulharjo, Yogyakarta, Yogyakarta</td>
							<td>Juminten</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>10</td>
							<td>00012212</td>
							<td>Irfan Luthfi</td>
							<td>Perum Gua Indah, Sendangsari, Pajangan, Bantul, Yogyakarta</td>
							<td>Angela Mariska</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>11</td>
							<td>0076192</td>
							<td>Fauzi Solikhin</td>
							<td>Tegal, Ngoto, Ngemplak, Sleman, Yogyakarta</td>
							<td>Umi Khasanah</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
						</tr>
						<tr>
							<td>12</td>
							<td>000102192</td>
							<td>Ariva Restiani</td>
							<td>Hargowilis, Hargowilis, Kokap, Kulon Progo, Yogyakarta</td>
							<td>Fatimah</td>
							<td><a href="{{ url('/rekam-medis/input-data') }}" class="btn btn-small btn-primary">Isi Data</a></td>
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
@if($errors->has())
	toastr.error('Terjadi kesalahan. Silakan ulangi lagi!')
	@foreach($errors->all() as $error)
		toastr.error('{{ $error }}');
	@endforeach
@elseif(\Session::has('message'))
	toastr.success("{{ \Session::get('message') }}")
@endif
$('#example1').dataTable();
$('.hapus').click(function() {
	bootbox.confirm("Apakah anda yakin akan menghapus role pengguna ini?", function(result){
		if (result) {
			toastr.options.timeOut = 0;
			toastr.options.extendedTimeOut = 0;
			toastr.info('<i class="fa fa-spinner fa-spin"></i><br>Sedang menghapus...');
			toastr.options.timeOut = 5000;
			toastr.options.extendedTimeOut = 1000;
			$('#hpsRole').submit();
		}
	});
});
</script>
@stop