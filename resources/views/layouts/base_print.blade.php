<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ENEAM-BOLLORE</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
<link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
<link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
<link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
<link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('Fontawesome/css/font-awesome.min.css')}}">
    <!-- Custom Css -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">

 <!-- JQuery DataTable Css -->
<link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

<link href="{{asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-blue">


    <!-- Page Loader -->
    <div class="page-loader-wrapper hidden-print">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <!-- #Top Bar -->

<section class="" style="margin-top:5vh">
    <div class="container-fluid">
        <!-- Widgets -->
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <!-- #END# CPU Usage -->
        <!-- Visitors -->
        <!-- #END# Visitors -->
        <!-- Latest Social Trends -->
        <!-- #END# Latest Social Trends -->
        <!-- Answered Tickets -->
        <!-- #END# Answered Tickets -->
        <div class="row clearfix">
            @yield('content')
            <!-- Task Info -->
            <!-- #END# Task Info -->
            <!-- Browser Usage -->
            <!-- #END# Browser Usage -->

        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>


<!-- Sparkline Chart Plugin Js -->
<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('js/demo.js')}}"></script>

@stack('js')
</body>

</html>