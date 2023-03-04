<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/classy.nav.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.min.css')}}">
        
   
       
    </head>
    <body>
       
        <div>
            @include('layouts.inc.navbar')
            @yield('content')
            @include('layouts.inc.footer')
        </div>



        <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ asset('frontend/js/bootstrap/popper.min.js')}}"></script>
        <script src="{{ asset('frontend/js/bootstrap/jquery/jquery-2.2.4.min.js')}}"></script>
        <script src="{{ asset('frontend/js/bootstrap/plugins/plugins.js')}}"></script>
        <script src="{{ asset('frontend/js/active.js')}}"></script>
    </body>
</html>
