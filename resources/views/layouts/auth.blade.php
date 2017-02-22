<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title', org_name()) </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('auth.headerscript')
    </head>

    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> {{ Config::get('app.org_name') }} </h1>
                    </header>
                    <div class="auth-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
       
        @include('auth.footerscript')
    </body>

</html>