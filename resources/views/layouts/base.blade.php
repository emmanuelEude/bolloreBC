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
    <div class="page-loader-wrapper">
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
    <div class="search-bar">
     
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="fa fa-remove"></i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Bon de Commande</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="fa fa-search"></i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="fa fa-power-off"></i>
                            Deconnexion
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <!-- #END# Tasks 
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"></li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons"></i>
                            <span><a href="view.php">Accueil</a> </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Créer Bon de Commande</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('bon.create')}}">Nouveau bon</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('bon.index')}}" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Afficher Bon de Commande</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('bon.index')}}" >Mes Archives</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Paramètre</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('fournisseur.index')}}">Fournisseurs</a>
                            </li>
                            <li>
                                <a href="{{route('societe.index')}}">Société</a>
                            </li>
                            <li>
                                    <a href="{{route('profil.show')}}">profile</a>
                            </li>
                            <li>
                                    <a href="{{route('account.show')}}">Compte</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons"></i>
                            <span>Aide</span>
                        </a>
                    </li>
                    <li>
                       
                    </li>
                </ul>
            </div>
            <!-- #Menu -->

    <!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2017 - 2018 <a href="javascript:void(0);">ENEAM- BOLLORE</a>.
    </div>
    <div class="version">
        <b>Version: </b> beta
    </div>
</div>
<!-- #Footer -->
</aside>

<!-- #END# Right Sidebar -->
</section>

<section class="content">
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