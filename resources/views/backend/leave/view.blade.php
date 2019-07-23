@extends('layouts.backend')

@section('content')
 
    <article class="content">
        <div class="title-block">
            <h3 class="title"> My Leave </h3>
            <p class="title-description"> {{$staffLeave->application_date}} </p>
        </div>
        <div class="subtitle-block">
            <h3 class="subtitle"> Leave Details </h3>
        </div>
        <section class="section">
            <form class="form" action="{{url('leave/'.$staffLeave->id.'/generate')}}" method="post" target="_blank">
                <div class="row sameheight-container">
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">
                            
                            <div class="form-group"> 
                                <label class="control-label">Leave Type</label>
        
                            </div>

                            <div class="form-group"> <label class="control-label">Application Date</label> <input type="text" class="form-control underlined" placeholder="Application Date" readonly name="applicationDate" id="applicationDate" value="{{$staffLeave->application_date}}"> </div>
                            <div class="form-group"> <label class="control-label">Employee Name</label> <input type="text" class="form-control underlined" placeholder="Name" readonly name="employeeName" id="employeeName" value="{{Auth::user()->full_name}}"> </div>
                            <div class="form-group"> <label class="control-label">Designation</label> <input type="text" class="form-control underlined readonly" placeholder="Designation" readonly name="position" id="position" value="{{Auth::user()->position}}"> </div>
                            <div class="form-group"> <label class="control-label">Department</label> <input type="text" class="form-control underlined readonly" placeholder="Department" readonly name="department" id="department" value="{{Auth::user()->department}}"> </div>        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">

                            <div class="form-group"> <label class="control-label">From</label> <input readonly type="text" class="form-control underlined" placeholder="Leave From" name="leaveFromDate" id="leaveFromDate" value="{{$staffLeave->leave_from}}"> </div>
                            <div class="form-group"> <label class="control-label">To</label> <input readonly type="text" class="form-control underlined datepicker" placeholder="Leave To" name="leaveToDate" id="leaveToDate" value="{{$staffLeave->leave_to}}"> </div>
                            <div class="form-group"> <label class="control-label">Total Days</label> <input type="text" class="form-control underlined" placeholder="Total Days" readonly name="duration" id="duration" value="{{$staffLeave->duration}}"> </div>
                            <div class="form-group"> <label class="control-label">Reason</label> <textarea readonly rows="3" class="form-control underlined" name="leaveReason" id="leaveReason">{{$staffLeave->leave_reason}}</textarea> </div>

                            <button type="submit" class="btn btn-primary pull-right">Print</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <a href="{{url('leave/list')}}" class="btn btm-sm btn-primary pull-left">Back</a>
        <br>
    </article>

@endsection