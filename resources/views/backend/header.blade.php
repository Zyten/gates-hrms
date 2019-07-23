<!-- backend.header.blade -->
<header class="header">
	<div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
	 <i class="fa fa-bars"></i>
	  </button> </div>

	<span id="header-active-user">
	@if(Auth::user()->role == App\Models\Role::ADMIN)
		{{Auth::user()->full_name}}, &nbsp;Admin
	@elseif(Auth::user()->role == App\Models\Role::SUPERVISOR)
		{{Auth::user()->full_name}}, &nbsp;Supervisor
	@elseif(Auth::user()->role == App\Models\Role::STAFF)
		{{Auth::user()->full_name}}, &nbsp;Staff
	@endif
	</span>
	<div class="header-block header-block-nav">
		<ul class="nav-profile">
			<li class="notifications new">
				<a href="" data-toggle="dropdown">
					<i class="fa fa-bell-o"></i> 
					<sup><span class="counter">0</span></sup>
				</a>
				<div class="dropdown-menu notifications-dropdown-menu">
					<ul class="notifications-container">
						<li>
							<a href="" class="notification-item">
								<div class="body-col">
									<p> <span class="accent">You don't have any pending notifications</span>! </p>
								</div>
							</a>
						</li>
					</ul>
					<footer>
						<ul>
							<li> 
								<a href="">View All</a>
							</li>
						</ul>
					</footer>
				</div>
			</li>
			<li class="profile dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					<div class="img" style="background-image: url('{{theme_path()}}/assets/faces/8.jpg')"> </div>
					<span class="name">{{Auth::user()->name}}</span> </a>
				<div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
					<a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Profile </a>
					<a class="dropdown-item" href="#"> <i class="fa fa-bell icon"></i> Notifications </a>
					<a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Settings </a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{route('auth.logout')}}"> <i class="fa fa-power-off icon"></i> Logout </a>
				</div>
			</li>
		</ul>
	</div>
</header>