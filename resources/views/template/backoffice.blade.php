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
                <link href="{{asset('font-awesome-5.15.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
                <link href="{{asset('css/pe-icons.css')}}" rel="stylesheet">

            </head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Start Bootstrap</div>
            <i class='fa fa-' id="btn"></i>
        </div>
        <ul class="nav-list m-0 p-0"> 
            <li>
                <a href="#">
                    <i class="fab fa-themeisle"></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">File Manager</span>
                </a>
                <span class="tooltip">Files</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>

    <div class="container">
        @yield('content')
    </div>

<script src="{{asset('js/app.js')}}"></script>
{{-- <script src="{{asset('js/jquery.js')}}"></script> --}}
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