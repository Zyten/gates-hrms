<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <!-- Define Charset -->
        <meta charset="UTF-8">

        <!-- Page Title -->
        <title> @yield('title', org_name()) </title>

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon-->
        <link rel="shortcut icon" href="{{asset('public/themes/portal/img/favicon.ico')}}" />

        @include('portal.headerscript')

    </head>

    <body>
        <!-- Header -->
    <header>
        @include('portal.header')
    </header>
    <!-- end Header -->

        @yield('content')

    <!-- Footer -->
    <footer>
        @include('portal.footer')
    </footer>
    <!-- end Footer -->

    @include('portal.footerscript')
</body>
</html>
