<!DOCTYPE html>
<html lang="en">
        <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">
                <link rel="shortcut icon" href="{{asset('img/ico/favicon.ico')}}">
                <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/ico/apple-touch-icon-144x144.png')}}">
                <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/ico/apple-touch-icon-114x114.png')}}">
                <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/ico/apple-touch-icon-72x72.png')}}">
                <link rel="apple-touch-icon" href="{{asset('img/ico/apple-touch-icon-57x57.png')}}">

                <title>The Grill by Distinctive Themes</title>

                <!-- Bootstrap Core CSS -->
                <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
                <link href="{{asset('css/animate.css')}}" rel="stylesheet">
                <link href="{{asset('css/plugins.css')}}" rel="stylesheet">

                <!-- Custom CSS -->
                <link href="{{asset('css/style.css')}}" rel="stylesheet">

                <!-- Custom Fonts -->
                <link href="{{asset('font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
                <link href="{{asset('css/pe-icons.css')}}" rel="stylesheet">

            </head>
<body>
    <div class="master-wrapper">
    @include('partials.navbar')
    @include('partials.header')
    @yield('content')
    @include('partials.footer')




    </div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{asset('js/init.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(document).ready(function(){
       'use strict';
        jQuery('#headerwrap').backstretch([
          "{{asset('img/bg/bg1.jpg')}}",
          "{{asset('img/bg/bg2.jpg')}}",
          "{{asset('img/bg/bg3.jpg')}}",
        ], {duration: 8000, fade: 500});
    });
    </script>
</body>
</html>
