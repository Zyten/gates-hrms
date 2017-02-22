@extends('layouts.backend')

@section('content')                     
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                    <div class="card sameheight-item stats" data-exclude="xs">
                        <div class="card-block">
                            <div class="title-block">
                                <h4 class="title"> Stats </h4>
                                <p class="title-description"> Website metrics for <a href="http://modularteam.github.io/modularity-free-admin-dashboard-theme-html/">
    				your awesome project
    			</a> </p>
                            </div>
                            <div class="row row-sm stats-container">
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 5407 </div>
                                        <div class="name"> Active items </div>
                                    </div> <progress class="progress stat-progress" value="75" max="100">
    				<div class="progress">
    					<span class="progress-bar" style="width: 75%;"></span>
    				</div>
    			</progress> </div>
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 78464 </div>
                                        <div class="name"> Items sold </div>
                                    </div> <progress class="progress stat-progress" value="25" max="100">
    				<div class="progress">
    					<span class="progress-bar" style="width: 25%;"></span>
    				</div>
    			</progress> </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
                                    <div class="stat">
                                        <div class="value"> $80.560 </div>
                                        <div class="name"> Monthly income </div>
                                    </div> <progress class="progress stat-progress" value="60" max="100">
    				<div class="progress">
    					<span class="progress-bar" style="width: 60%;"></span>
    				</div>
    			</progress> </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"> <i class="fa fa-users"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 359 </div>
                                        <div class="name"> Total users </div>
                                    </div> <progress class="progress stat-progress" value="34" max="100">
    				<div class="progress">
    					<span class="progress-bar" style="width: 34%;"></span>
    				</div>
    			</progress> </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 59 </div>
                                        <div class="name"> Tickets closed </div>
                                    </div> <progress class="progress stat-progress" value="49" max="100">
    				<div class="progress">
    					<span class="progress-bar" style="width: 49%;"></span>
    				</div>
    			</progress> </div>
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"> <i class="fa fa-dollar"></i> </div>
                                    <div class="stat">
                                        <div class="value"> $780.064 </div>
                                        <div class="name"> Total income </div>
                                    </div> <progress class="progress stat-progress" value="15" max="100">
    				<div class="progress">
    					<span class="progress-bar" style="width: 15%;"></span>
    				</div>
    			</progress> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-7 history-col">
                    <div class="card sameheight-item" data-exclude="xs">
                        <div class="card-header card-header-sm bordered">
                            <div class="header-block">
                                <h3 class="title">History</h3>
                            </div>
                            <ul class="nav nav-tabs pull-right" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Visits</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Downloads</a> </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="visits">
                                    <p class="title-description"> Number of unique visits last 30 days </p>
                                    <div id="dashboard-visits-chart"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="downloads">
                                    <p class="title-description"> Number of downloads last 30 days </p>
                                    <div id="dashboard-downloads-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
    </article>

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
                        <a href="{{route('backend.leave.list')}}"> <i class="fa fa-pencil-square-o"></i> My Leaves </a>
                    </li>

                    <li>
                        <a href="{{route('backend.application.list')}}"> <i class="fa fa-pencil-square-o"></i> Pending Applications </a>
                    </li>

                    <li>
                        <a href=""> <i class="fa fa-th-large"></i> Configuration <i class="fa arrow"></i> </a>
                        <ul>
                            <li> <a href="item-editor.html"> Departments </a> </li>
                            <li> <a href="items-list.html"> Positions </a> </li>
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
@endsection
