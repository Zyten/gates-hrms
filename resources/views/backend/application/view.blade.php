@extends('layouts.backend')

@section('content')
 
    <article class="content">
        <div class="title-block">
            <h3 class="title"> Application By {{$staffLeave->full_name}}</h3>
            <p class="title-description"> Date: {{$staffLeave->application_date}} </p>
        </div>
        <div class="subtitle-block">
            <h3 class="subtitle"> Application Details </h3>
        </div>
        <section class="section">
            <div class="form" action="" method="post">
                <div class="row sameheight-container">
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">
                            
                            <div class="form-group"> 
                                <label class="control-label">Leave Type</label>
                                <input type="text" class="form-control underlined" placeholder="Leave Type" readonly name="leaveType" id="leaveType" value="{{$staffLeave->leave_type}}">
                            </div>

                            <div class="form-group"> <label class="control-label">Application Date</label> <input type="text" class="form-control underlined" placeholder="Application Date" readonly name="applicationDate" id="applicationDate" value="{{$staffLeave->application_date}}"> </div>
                            <div class="form-group"> <label class="control-label">Employee Name</label> <input type="text" class="form-control underlined" placeholder="Name" readonly name="employeeName" id="employeeName" value="{{Auth::user()->full_name}}"> </div>
                            <div class="form-group"> <label class="control-label">Designation</label> <input type="text" class="form-control underlined readonly" placeholder="Designation" readonly name="position" id="position" value="{{Auth::user()->position}}"> </div>
                            <div class="form-group"> <label class="control-label">Department</label> <input type="text" class="form-control underlined readonly" placeholder="Department" readonly name="department" id="department" value="{{Auth::user()->department}}"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">

                            <div class="form-group"> <label class="control-label">From</label> <input type="text" class="form-control underlined" readonly placeholder="Leave From" name="leaveFromDate" id="leaveFromDate" value="{{$staffLeave->leave_from}}"> </div>
                            <div class="form-group"> <label class="control-label">To</label> <input type="text" class="form-control underlined datepicker" readonly placeholder="Leave To" name="leaveToDate" id="leaveToDate" value="{{$staffLeave->leave_to}}"> </div>
                            <div class="form-group"> <label class="control-label">Total Days</label> <input type="text" class="form-control underlined" placeholder="Total Days" readonly name="duration" id="duration" value="{{$staffLeave->duration}}"> </div>
                            <div class="form-group"> <label class="control-label">Reason</label> <textarea readonly rows="3" class="form-control underlined" name="leaveReason" id="leaveReason">{{$staffLeave->leave_reason}}</textarea> </div>
                            @if($staffLeave->is_approved != 1 && $staffLeave->is_approved != 2)
                            <a href="{{url('application/'.$staffLeave->id.'/approve')}}" class="btn btn-success pull-right">Approve</a>
                            <a href="{{url('application/'.$staffLeave->id.'/reject')}}" class="btn btn-danger pull-right" style="margin-right:1em;">Reject</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="{{url('application/list')}}" class="btn btm-sm btn-primary pull-left">Back</a>
        <br>
    </article>

@endsection