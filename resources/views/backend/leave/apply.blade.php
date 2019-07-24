@extends('layouts.backend')

@section('content')
 
    <article class="content">
        <div class="title-block">
            <h3 class="title"> Apply for a Leave </h3>
            <p class="title-description"> Application Form </p>
        </div>
        <span href="{{url('leave/availability/'.Auth::user()->id)}}" class="btn btn-primary pull-right">Leave Available: {{Auth::user()->remaining_leaves}} / {{Auth::user()->total_leaves}}</span>
        <div class="subtitle-block">
            <h3 class="subtitle"> Leave Details </h3>
        </div>
        <section class="section">
            <form class="form" action="{{route('backend.leave.apply')}}" method="post">
                <div class="row sameheight-container">
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">
                            
                            <div class="form-group"> 
                                <label class="control-label">Leave Type</label>
                                @foreach($leaveTypes as $leaveType)
                                    <div> 
                                        <label>
                                            <input class="radio" type="radio" name="leaveType" required value="{{$leaveType->name}}">
                                            <span role="button">{{$leaveType->name}}</span>
                                        </label> 
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group"> <label class="control-label">Application Date</label> <input type="text" class="form-control underlined" placeholder="Application Date" readonly name="applicationDate" id="applicationDate"> </div>
                            <div class="form-group"> <label class="control-label">Employee Name</label> <input type="text" class="form-control underlined" placeholder="Name" readonly name="employeeName" id="employeeName" value="{{Auth::user()->full_name}}"> </div>
                            <input type="hidden" readonly name="userId" id="userId" value="{{Auth::user()->id}}">
                            <div class="form-group"> <label class="control-label">Designation</label> <input type="text" class="form-control underlined readonly" placeholder="Designation" readonly name="position" id="position" value="{{Auth::user()->position}}"> </div>
                            <div class="form-group"> <label class="control-label">Department</label> <input type="text" class="form-control underlined readonly" placeholder="Department" readonly name="department" id="department" value="{{Auth::user()->department}}"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">

                            <div class="form-group"> <label class="control-label">From</label> <input required type="text" class="form-control underlined" placeholder="Leave From" name="leaveFromDate" id="leaveFromDate"> </div>
                            <div class="form-group"> <label class="control-label">To</label> <input required type="text" class="form-control underlined datepicker" placeholder="Leave To" name="leaveToDate" id="leaveToDate"> </div>
                            <div class="form-group"> <label class="control-label">Total Days</label> <input required type="text" class="form-control underlined" placeholder="Total Days" readonly name="duration" id="duration"> </div>
                            <div class="form-group"> <label class="control-label">Reason</label> <textarea required rows="3" class="form-control underlined" name="leaveReason" id="leaveReason"></textarea> </div>

                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </article>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();

            if(dd<10) {
                dd='0'+dd
            } 

            if(mm<10) {
                mm='0'+mm
            } 

            today = dd+'-'+mm+'-'+yyyy;

            $('#applicationDate').val(today);

            $('#leaveFromDate').bootstrapMaterialDatePicker({
              time : false,
              format : 'DD-MM-YYYY',
              minDate : today,
              switchOnClick : true
            });

            $('#leaveToDate').bootstrapMaterialDatePicker({
              time : false,
              format : 'DD-MM-YYYY',
              minDate : today,
              switchOnClick : true
            });

            $('#leaveFromDate').on('change', function() {
                $('#leaveToDate').bootstrapMaterialDatePicker(
                    'setMinDate', parseDate($('#leaveFromDate').val()));
                calculate_duration();
            });

            $('#leaveToDate').on('change', function() {
                $('#leaveFromDate').bootstrapMaterialDatePicker(
                    'setMaxDate', parseDate($('#leaveToDate').val()));
                calculate_duration();
            });

            function parseDate(str) {
                var mdy = str.split('-');
                return new Date(mdy[2], mdy[1]-1, mdy[0]);
            }

            function daydiff(first, second) {
                return (second-first)/(1000*60*60*24);
            }

            function calculate_duration()
            {
                if($('#leaveFromDate').val().length && $('#leaveToDate').val().length) {
                    var duration = daydiff(parseDate($('#leaveFromDate').val()), parseDate($('#leaveToDate').val()));
                    $('#duration').val(duration+1);
                }
            }
        });
    </script>
@endsection