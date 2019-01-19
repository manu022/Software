<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Priotelus | Eventos</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">

</head>
<body class="fixed-navbar fixed-sidebar">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>PRIOTELUS</h1><p>SISTEMA DE GESTIÓN DE EMPLEO PARA INMIGRANTES HAITIANOS</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            PRIOTELUS
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">PRIOTELUS</span>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
                <img src="images/profile.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">{{ auth()->user()->name }}</span>
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li>
                <a href="home"> <span class="nav-label">LAKAY <small>(INICIO)</small></span></a>
            </li>
            <li class="active">
                <a href="perfil"> <span class="nav-label">PWOFIL MWEN <small>(MI PERFIL)</small></span></a>
            </li>

            <!-- PARA USUARIOS -->
            @if ( auth()->user()->tipo_usuario  ==2 || auth()->user()->tipo_usuario  ==1)
            <li>
                <a href="empleos"> <span class="nav-label">OFRI <small>(OFERTAS)</small></span></a>
            </li>
            @endif
            <!-- PARA EMPRESAS -->
            @if ( auth()->user()->tipo_usuario  ==3 || auth()->user()->tipo_usuario  ==1)
            <li>
                <a href="#"><span class="nav-label">OFERTAS <small>(OFRI)</small></span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="subirofertas">Subir Ofertas <small>(Upload ofri)</small></a></li>
                    <li><a href="misofertas">Mis Ofertas <small>(Ofri mwen)</small></a></li>
                </ul>
            </li>
            @endif
          
            @if ( auth()->user()->tipo_usuario  ==2 || auth()->user()->tipo_usuario  ==1)
            <li>
                <a href="#"><span class="nav-label">EVÈNMAN <small>(EVENTOS)</small></span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="eventos">Tout Moun <small>(Todos)</small></a></li>
                    <li><a href="calendario">Kalandriye <small>(Calendario)</small></a></li>
                </ul>
            </li>
            @endif
            <li>
                <form method="post" action="{{ route('logout') }}">
                    {{ csrf_field() }}
                    <button><span calss="nav-label">FÈMEN SESYON <small>(CERRAR SESIÓN)</small></span></button></form>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="normalheader transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <h2 class="font-light m-b-xs">
                    Evènman
                </h2>
                <small>Eventos</small>
            </div>
        </div>
    </div>

<div class="content">

<div class="row">
    <div class="col-md-6">
        <div class="hpanel">
                <div class="v-timeline vertical-container animate-panel"  data-child="vertical-timeline-block" data-delay="1">
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="vertical-timeline-content">
                            <div class="p-sm">
                                <span class="vertical-date pull-right"> Dia <br/> <small>DD/MM/AAAA</small> </span>

                                <h2>Nombre Evento</h2>
                                <p>Descripción
                                </p>
                                <button class="btn btn-xs btn-primary btn-outline">Plis enfòmasyon <small>(Más información)</small></button>
                                </br>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="vertical-timeline-content">
                            <div class="p-sm">
                                <span class="vertical-date pull-right"> Dia <br/> <small>DD/MM/AAAA</small> </span>

                                <h2>Nombre Evento</h2>
                                <p>Descripción
                                </p>
                                <button class="btn btn-xs btn-primary btn-outline">Plis enfòmasyon <small>(Más información)</small></button>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="hpanel">
            <div class="v-timeline vertical-container animate-panel"  data-child="vertical-timeline-block" data-delay="1">
                <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="vertical-timeline-content">
                            <div class="p-sm">
                                <span class="vertical-date pull-right"> Dia <br/> <small>DD/MM/AAAA</small> </span>

                                <h2>Nombre Evento</h2>
                                <p>Descripción
                                </p>
                                <button class="btn btn-xs btn-primary btn-outline">Plis enfòmasyon <small>(Más información)</small></button>
                                </br>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="vertical-timeline-content">
                            <div class="p-sm">
                                <span class="vertical-date pull-right"> Dia <br/> <small>DD/MM/AAAA</small> </span>

                                <h2>Nombre Evento</h2>
                                <p>Descripción
                                </p>
                                <button class="btn btn-xs btn-primary btn-outline">Plis enfòmasyon <small>(Más información)</small></button>
                                </br>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight">

        <div class="p-m">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
            </button>
            <div>
                <span class="font-bold no-margins"> Analytics </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                     class=" progress-bar progress-bar-success">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <span class="font-bold no-margins"> Social talks </span>
            <br>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            <div class="m-t-md">
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a1.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">John Novak</span>
                            <small class="text-muted">21.03.2015</small>
                            <div class="social-content small">
                                Injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a3.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Mark Smith</span>
                            <small class="text-muted">14.04.2015</small>
                            <div class="social-content">
                                Many desktop publishing packages and web page editors.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a4.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Marica Morgan</span>
                            <small class="text-muted">21.03.2015</small>

                            <div class="social-content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                Many desktop publishing packages and web page editors.
            </small>
        </div>

    </div>

    <!-- Footer-->
    <footer class="footer">
        Priotelus 2018-2019
    </footer>

</div>

<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

</body>
</html>