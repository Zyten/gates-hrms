@extends('layouts.backend')

@section('content')      

 <article class="content">
    <div class="title-block">
        <h1 class="title"> My Leaves </h1>
        <p class="title-description"> List </p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> List of My Leave Applications </h3>
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Application Date</th>
                                            <th>Leave Type</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $num = 0;?>
                                        @foreach($staffLeaves as $staffLeave)
                                        <tr>
                                            <td>{{++$num}}</td>
                                            <td>{{$staffLeave->application_date}}</td>
                                            <td>{{$staffLeave->leave_type}}</td>
                                            <td>{{$staffLeave->leave_from}}</td>
                                            <td>{{$staffLeave->leave_to}}</td>
                                            <td>{{$staffLeave->leave_reason}}</td>
                                            <td>
                                                @if($staffLeave->is_approved == '1')
                                                    Approved
                                                @elseif($staffLeave->is_approved == '2')
                                                    Rejected
                                                @else
                                                    Pending Approval
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('leave/'.$staffLeave->id)}}">View</a>
                                                <a target="_blank" href="{{url('leave/'.$staffLeave->id.'/generate')}}">Print</a>
                                            </td>
                                     
                                        </tr>
                                           @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
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
                        <li>
                            <a href="{{route('backend.dashboard')}}"> <i class="fa fa-home"></i> Dashboard </a>
                        </li>
                        <li>
                            <a href="{{route('backend.leave.apply')}}"> <i class="fa fa-pencil-square-o"></i> Apply </a>
                        </li>
                        <li class="active">
                            <a href="{{route('backend.leave.list')}}"> <i class="fa fa-pencil-square-o"></i> My Leaves </a>
                        </li>

                        <li>
                            <a href="{{route('backend.application.list')}}"> <i class="fa fa-pencil-square-o"></i> Pending Applications </a>
                        </li>

                        <li>
                            <a href=""> <i class="fa fa-th-large"></i> Configuration <i class="fa arrow"></i> </a>
                            <ul>
                                <li> <a href="#"> Departments </a> </li>
                                <li> <a href="#"> Positions </a> </li>
                                <li> <a href="#"> Leave Types </a> </li>
                                <!-- <li> <a href="item-editor.html"> Roles </a> </li> -->
                                <!-- <li> <a href="item-editor.html"> Permissions </a> </li> -->
                                <li> <a href="#"> Staff </a> </li>
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