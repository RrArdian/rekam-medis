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
			<a href="{{ url('admin/beranda') }}">
				<i class="fa fa-dashboard"></i> <span>Beranda</span>
			</a>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-users"></i>
				<span>Data Pengguna</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('admin/roles') }}"><i class="fa fa-angle-double-right"></i> Role Pengguna</a></li>
				<li><a href="{{ url('admin/pengguna/provinsi') }}"><i class="fa fa-angle-double-right"></i> Data Admin Provinsi</a></li>
			</ul>
		</li>
		<li class="treeview">
		  <a href="pages/charts/chartjs.html">
		    <i class="fa fa-pie-chart"></i>
		    <span>Grafik Laporan</span>
		  </a>
		</li>
		<li class="treeview">
		  <a href="pages/UI/general.html">
		    <i class="fa fa-hospital-o"></i>
		    <span>Data Rumah Sakit</span>
		  </a>
		</li>
		<li class="treeview">
		  <a href="pages/forms/general.html">
		    <i class="fa fa-plus-square"></i> <span>Data Pasien</span>
		  </a>
		</li>
		<li class="treeview">
		  <a href="pages/tables/simple.html">
		    <i class="fa fa-stethoscope"></i> <span>Data Dokter</span>
		  </a>
		</li>
		<li>
		  <a href="pages/calendar.html">
		    <i class="fa fa-file"></i> <span>Data Rekam Medis</span>
		  </a>
		</li>
		<li>
		  <a href="pages/mailbox/mailbox.html">
		    <i class="fa fa-th"></i> <span>Data Apotek</span>
		  </a>
		</li>
	</ul>
</section>