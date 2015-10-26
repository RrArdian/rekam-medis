@extends('layouts.master')

@section('css-content')
<link rel="stylesheet" href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap.css') }}">
@stop

@section('header')
@include('layouts._header')
@stop

@section('sidebar')
@include('admin._sidebar')
@stop

@section('title')
Admin Provinsi
@stop

@section('url-breadcrumb')
<li><a href="{{ url('myadmin/home') }}"><i class="fa fa-tags"></i> Beranda</a></li>
<li><a href="#">Admin Provinsi</a></li>
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Admin Provinsi</h3>
				<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addCategory"><i class="fa fa-plus"></i> Tambah Admin Provinsi</button>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pengguna</th>
							<th>Provinsi</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($user as $val => $q)
						<tr>
							<td>{!! $val+1 !!}</td>
							<td>{!! $q->user->username !!}</td>
							<td>{!! $q->user->adminprovinsi->provinsi->nama !!}</td>
							@if ($q->user->status == 'active')
							<td><span class="label label-success">Aktif</span></td>
							@else
							<td><span class="label label-danger">Diblokir</span></td>
							@endif
							<td>
								<form action="{{ url('/pengguna/provinsi/hapus') }}/{{ $q->id }}" id="hpsRole" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button type="button" class="btn btn-danger btn-sm hapus"><i class="fa fa-trash"></i> Hapus</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategory" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Admin Provinsi</h4>
				</div>
				<div class="modal-body">
					<form role="form" method="POST" action="{{ url('pengguna/provinsi/tambah') }}" accept-charset="UTF-8"><input name="_token" type="hidden" value="{{ csrf_token() }}">
						<div class="form-group">
							<label for="nama" class="control-label">Nama Pengguna</label>
							<input type="text" name="nama" class="form-control" value="{!! Input::old('nama') !!}" required>
						</div>
						<div class="form-group">
							<label for="email" class="control-label">E-Mail</label>
							<input type="email" name="email" class="form-control" value="{!! Input::old('email') !!}" required>
						</div>
						<div class="form-group">
							<label for="provinsi" class="control-label">Provinsi</label>
							<select name="provinsi" class="form-control" required>
								<option>-- Pilih Provinsi --</option>
								@foreach($provinsi as $p)
								<option value="{{ $p->id }}">{!! $p->nama !!}</option>
								@endforeach
						</select>
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
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
</script>
@stop