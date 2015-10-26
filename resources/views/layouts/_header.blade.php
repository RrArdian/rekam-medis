<a href="{{ url('beranda') }}" class="logo">
	<span class="logo-mini"><b>SMT</b></span>
	<span class="logo-lg"><b>SIMETRIS</b>App</span>
</a>
<nav class="navbar navbar-static-top" role="navigation">
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">

			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="{{ url('/') }}/{{ Auth::user()->avatar }}" class="user-image" alt="User Image"/>
					<span class="hidden-xs">
						{{ Auth::user()->username }}
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="user-header">
						<img src="{{ url('/') }}/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" />
						<p>
							{{ Auth::user()->username }}
							<small>Administrator</small>
						</p>
					</li>
					<li class="user-footer">
						<div class="pull-left">
							<a href="{{ url('/admin/account') }}" class="btn btn-default btn-flat">Akun</a>
						</div>
						<div class="pull-right">
							<a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Keluar</a>
						</div>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>