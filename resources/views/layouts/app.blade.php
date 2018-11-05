<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'BorisAkhapkin') }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/reset.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}" type="text/css" media="all">
    <style type="text/css">
        .bg {
            behavior: url({{asset('js/PIE.htc')}})
        }
    </style>
</head>
<body id="page1">
<div class="body1">
    <div class="body2">
        <div class="body3">
            <div class="main">
                <!-- header -->
            @include('layouts.header')
            <!-- / header-->
                <!-- content -->
                @yield('content')
            </div>
        </div>
    </div>
</div>
<div class="body4">
    <div class="main">
        <section id="content2">
            @yield('content2')
        </section>
    </div>
</div>

<!-- / content -->
@include('layouts.footer')
<script type="text/javascript" src="{{asset('js/jquery-1.5.2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cufon-replace.js')}}"></script>
<script type="text/javascript" src="{{asset('js/Terminal_Dosis_300.font.js')}}"></script>
<script type="text/javascript" src="{{asset('js/atooltip.jquery.js')}}"></script>
<script src="{{asset('js/roundabout.js')}}" type="text/javascript"></script>
<script src="{{asset('js/roundabout_shapes.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.easing.1.2.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/html5.js')}}"></script>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript" src="{{asset('js/other.js')}}"></script>
</body>
</html>