<!-- backend.sidebar.blade.php -->
<aside class="sidebar">
	<div class="sidebar-container">
		<div class="sidebar-header">
			<div class="brand">
				<div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> @yield('title', org_name()) </div>
		</div>
		<nav class="menu">
			<ul class="nav metismenu" id="sidebar-menu">
				<li class="{{ isActiveRoute('backend.dashboard') }}">
					<a href="{{route('backend.dashboard')}}"> <i class="fa fa-home"></i> Dashboard </a>
				</li>
				@if(Auth::user()->role == App\Models\Role::STAFF)
                <li class="{{ isActiveRoute('backend.leave.apply') }}">
                    <a href="{{route('backend.leave.apply')}}"> <i class="fa fa-pencil-square-o"></i> Apply </a>
                </li>
                <li class="{{ areActiveRoutes(['backend.leave.list', 'backend.leave.show']) }}">
                    <a href="{{route('backend.leave.list')}}"> <i class="fa fa-pencil-square-o"></i> My Leaves </a>
                </li>
                @endif
                @if(Auth::user()->role == App\Models\Role::SUPERVISOR)
                <li class="{{ areActiveRoutes(['backend.application.list', 'backend.application.details']) }}">
                    <a href="{{route('backend.application.list')}}"> <i class="fa fa-pencil-square-o"></i> Pending Applications </a>
                </li>
                @endif
                @if(Auth::user()->role == App\Models\Role::ADMIN)
                <li>
                    <a href=""> <i class="fa fa-th-large"></i> Configuration <i class="fa arrow"></i> </a>
                    <ul>
                        <li> <a href="#"> Departments </a> </li>
                        <li> <a href="#"> Positions </a> </li>
                        <li> <a href="#"> Leave Types </a> </li>
                        <li> <a href="#"> Staff </a> </li>
                    </ul>
                </li>
                @endif
			</ul>
		</nav>
	</div>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>