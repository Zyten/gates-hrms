<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title', org_name()) </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon-->
        <link rel="shortcut icon" href="{{asset('public/themes/portal/img/favicon.ico')}}" />

        @include('backend.headerscript')
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                @include('backend.header')

                @yield('content')

                @include('backend.footer')
            </div>
        </div>

       
        @include('backend.footerscript')
    </body>

</html>