<header class="top-head container-fluid">
	<button type="button" class="navbar-toggle pull-left">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	
	<!-- Search -->
	<!--
	<form role="search" class="navbar-left app-search pull-left hidden-xs">
		<input type="text" placeholder="Search..." class="form-control">
		<a href=""><i class="fa fa-search"></i></a>
	</form>
	-->
	<!-- Left navbar -->
	<!--<nav class=" navbar-default" role="navigation">
		<ul class="nav navbar-nav hidden-xs">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">English <span class="caret"></span></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">German</a></li>
					<li><a href="#">French</a></li>
					<li><a href="#">Italian</a></li>
					<li><a href="#">Spanish</a></li>
				</ul>
			</li>
			<li><a href="#">Files<img src="{{ asset('images/declaranet.jpg') }}"/></a></li>
		</ul>-->
		<a href="#">
			<img alt="" src="{{ asset('images/logo.png') }}" width="267px" height="56px" class="user-thumb img">
		</a>		
		<!-- Right navbar -->
		<ul class="nav navbar-nav navbar-right top-right-menu">
			<!-- mesages 
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<i class="zmdi zmdi-email-open"></i>
					<span class="badge badge-sm up bg-purple count">4</span>
				</a>
				<ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
					<li>
						<p>Messages</p>
					</li>
					<li>
						<a href="#">
							<span class="pull-left"><img src="img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
							<span class="block"><strong>John smith</strong></span>
							<span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="pull-left"><img src="img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
							<span class="block"><strong>John smith</strong></span>
							<span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="pull-left"><img src="img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
							<span class="block"><strong>John smith</strong></span>
							<span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
						</a>
					</li>
					<li>
						<p><a href="inbox.html" class="text-right">See all Messages</a></p>
					</li>
				</ul> 
			</li>-->
			
			<!-- /messages 
			 Notification -->
			
			<li>
				<a>
					<span class="fa fa-2x text-white">{{ \Session::get('unidad') }}</span>
				</a>
				<!--<ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
					<li class="noti-header">
						<p>Notifications</p>
					</li>
					<li>
						<a href="#">
							<span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
							<span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
							<span>animate.css<br><small class="text-muted">5 minutes ago</small></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
							<span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
						</a>
					</li>
					
					<li>
						<p><a href="#" class="text-right">Despacho de la Secretaría</a></p>
					</li>
				</ul> -->
				
			</li>
		
			<!-- /Notification -->
			@php				
			    if(!empty(\Session::get('usuario'))){			    
			@endphp
			<!-- user login dropdown start-->
			<li class="dropdown text-center">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<img alt="" src="" class="img-circle profile-img thumb-sm">
					<span class="username">{{ \Session::get('usuario') }}</span><span class="caret"></span>
				</a>
				<ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
					<!--<li><a href="#"><i class="fa fa-briefcase"></i>Perfil</a></li>
					<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
					<li><a href="#"><i class="fa fa-history"></i>Dec. Patrimonial</a></li>-->
					<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fa fa-sign-out"></i>Salir</a></li>
				</ul>
			</li>			
			<!-- user login dropdown end -->
			<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
			    {{ csrf_field() }}
			</form>
			@php
				}
			@endphp
		</ul>
		<!-- End right navbar -->
	<!--</nav>-->
</header>