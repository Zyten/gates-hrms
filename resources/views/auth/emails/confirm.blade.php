<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div>
        Hello {{$name}},<br><br>
        Thanks for creating an account with @yield('title', org_name()).<br>
        Please follow the link below to verify your email address<br><br>
        ---<br>
        {{ url('register/confirm/' . $confirmation_code) }}.<br/>

        </div>

    </body>
</html>