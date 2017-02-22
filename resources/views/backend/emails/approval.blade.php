<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Leave Application Status</h2>

        <div>
        Hello {{$full_name}},<br><br>
        @if($application->is_approved == 1)
            Congratulations, your application for leave from {{$application->leave_from}} to 
            {{$application->leave_to}} has been approved!<br><br>
        @else
            Unfortunately, your application for leave from {{$application->leave_from}} to 
            {{$application->leave_to}} has been rejected.<br><br>
        @endif
        ---<br>
        {{$supervisor}}.<br/>

        </div>

    </body>
</html>