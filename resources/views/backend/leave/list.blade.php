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

@endsection