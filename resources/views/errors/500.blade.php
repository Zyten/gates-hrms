<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title', org_name()) </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @include('backend.headerscript')
        
    </head>

    <body>
        <div class="app blank sidebar-opened">
            <article class="content">
                <div class="error-card global">
                    <div class="error-title-block">
                        <h1 class="error-title">500</h1>
                        <h2 class="error-sub-title"> Internal Server Error. </h2>
                    </div>
                    <div class="error-container">
                        <p>Why not try refreshing your page? or you can contact support</p>
                        <a class="btn btn-primary" href="{{url('/')}}"> <i class="fa fa-angle-left"></i> Back to Home </a>
                    </div>
                </div>
            </article>
        </div>
       
        @include('backend.footerscript')

    </body>

</html>