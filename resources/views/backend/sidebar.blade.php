<!-- backend.sidebar.blade.php -->
<aside class="sidebar">
	<div class="sidebar-container">
		<div class="sidebar-header">
			<div class="brand">
				<div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> @yield('title', org_name()) </div>
		</div>
		<nav class="menu">
			<ul class="nav metismenu" id="sidebar-menu">
				<li class="active">
					<a href="{{route('backend.dashboard')}}"> <i class="fa fa-home"></i> Dashboard </a>
				</li>
				<li>
					<a href="{{route('backend.leave.apply')}}"> <i class="fa fa-pencil-square-o"></i> Apply </a>
				</li>
				<li>
					<a href="forms.html"> <i class="fa fa-pencil-square-o"></i> My Leaves </a>
				</li>

				<li>
					<a href="forms.html"> <i class="fa fa-pencil-square-o"></i> Pending Applications </a>
				</li>

				<li>
					<a href=""> <i class="fa fa-th-large"></i> Configuration <i class="fa arrow"></i> </a>
					<ul>
						<li> <a href="item-editor.html"> Departments </a> </li>
						<li> <a href="items-list.html">	Positions </a> </li>
						<li> <a href="item-editor.html"> Leave Types </a> </li>
						<!-- <li> <a href="item-editor.html"> Roles </a> </li> -->
						<!-- <li> <a href="item-editor.html"> Permissions </a> </li> -->
						<li> <a href="item-editor.html"> Staff </a> </li>
						<!-- <li> <a href="item-editor.html"> Staff Roles </a> </li> -->
						<!-- <li> <a href="item-editor.html"> Permission Roles </a> </li> -->
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>