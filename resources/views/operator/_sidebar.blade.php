<section class="sidebar">
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{{ url('/') }}/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" />
		</div>
		<div class="pull-left info">
			<p>{{ Auth::user()->username }}</p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<ul class="sidebar-menu">
		<li class="header">MAIN NAVIGATION</li>
		<li class="active">
			<a href="{{ url('beranda') }}">
				<i class="fa fa-dashboard"></i> <span>Beranda</span>
			</a>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-users"></i>
				<span>Data Pasien</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/pasien') }}"><i class="fa fa-angle-double-right"></i> Daftar Pasien</a></li>
				<li><a href="{{ url('/rekam-medis/pasien') }}"><i class="fa fa-angle-double-right"></i> Daftar Rekam Medis</a></li>
				<li><a href="{{ url('/registrasi/pasien') }}"><i class="fa fa-angle-double-right"></i> Registrasi Pasien</a></li>
			</ul>
		</li>
		<li>
			<a href="{{ url('/pendaftaran/pasien') }}">
				<i class="fa fa-edit"></i> <span>Pendaftaran Pasien</span>
			</a>
		</li>
	</ul>
</section>