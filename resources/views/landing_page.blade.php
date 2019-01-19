<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Priotelus | Home</title>

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
<body class="landing-page">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>PRIOTELUS</h1><p>SISTEMA DE GESTIÓN DE EMPLEO PARA INMIGRANTES HAITIANOS</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">Priotelus</a>
            <div class="brand-desc">
                
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="page-scroll" href="#inicio">Lakay</a></li>
                <li><a class="page-scroll" page-scroll href="#ofertas">Ofri</a></li>
                <li><a class="page-scroll" page-scroll href="#eventos">Evènman</a></li>
                <li><a class="page-scroll" page-scroll href="#informacion">Enfòmasyon</a></li>
                <li><a class="page-scroll" page-scroll href="#equipo">Ekip</a></li>
                <li><a class="page-scroll" page-scroll href="#contacto">Kontakte</a></li>
                @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/perfil') }}">{{ auth()->user()->name }} - PERFIL</a></li>
                    @else
                    <li><a class="navbar-brand" href="login" >Antre nan <small>(INGRESAR)</small></a></li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<header id="inicio">
    <div class="container">
        <div class="heading">
            <h1>
                Priotelus
            </h1>
            <span>Sistema de gestión de empleo para inmigrantes</span>
            <!--<p class="small">
                Lorem Ipsum is simply dummy text of the printing and tLorem Ipsum is  Lorem Ipsum is simply dummy of the simply dummy text of the ypesetting.
            </p>-->
            <br>
            <br>
            <br>
            <br>
            <a href="curriculum" class="btn btn-success btn-lg"><h4>Kreye ou Curriculum</h4><small>Crea tu currículum</small></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="empleos" class="btn btn-success btn-lg"><h4>Voye travay</h4><small>Subir oferta laboral</small></a>
        </div>
    </div>
</header>
<section id="ofertas">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><span class="text-success">Dènye ofrann</span></h2> <h4>Últimas Ofertas</h4>
                <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel hgreen contact-panel">
                    <div class="panel-body">
                        <span class="label label-success pull-right">Nouvo</span>
                        <img alt="logo" class="img-circle m-b" src="images/profile.jpg">
                        <h3><a href="">Nombre Empresa</a></h3>
                        <div class="text-muted font-bold m-b-xs">Cargo</div>
                        <p>
                            Descripcion breve.
                        </p>
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center m-t-lg">
                            <a href="" class="btn btn-primary btn-sm">Wè plis <small>(Ver más)</small></a>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hyellow contact-panel">
                    <div class="panel-body">
                        <span class="label label-success pull-right">Nouvo</span>
                        <img alt="logo" class="img-circle m-b" src="images/profile.jpg">
                        <h3><a href="">Nombre Empresa</a></h3>
                        <div class="text-muted font-bold m-b-xs">Cargo</div>
                        <p>
                            Descripcion breve.
                        </p>
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center m-t-lg">
                            <a href="" class="btn btn-primary btn-sm">Wè plis <small>(Ver más)</small></a>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hviolet contact-panel">
                    <div class="panel-body">
                        <span class="label label-success pull-right">Nouvo</span>
                        <img alt="logo" class="img-circle m-b" src="images/profile.jpg">
                        <h3><a href="">Nombre Empresa</a></h3>
                        <div class="text-muted font-bold m-b-xs">Cargo</div>
                        <p>
                            Descripcion breve.
                        </p>
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center m-t-lg">
                            <a href="" class="btn btn-primary btn-sm">Wè plis <small>(Ver más)</small></a>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel hblue contact-panel">
                    <div class="panel-body">
                        <span class="label label-success pull-right">Nouvo</span>
                        <img alt="logo" class="img-circle m-b" src="images/profile.jpg">
                        <h3><a href="">Nombre Empresa</a></h3>
                        <div class="text-muted font-bold m-b-xs">Cargo</div>
                        <p>
                            Descripcion breve.
                        </p>
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center m-t-lg">
                            <a href="" class="btn btn-primary btn-sm">Wè plis <small>(Ver más)</small></a>
                        </div>      
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center m-t-lg">
            <a href="empleos" class="btn btn-info btn-sm"><h5>Gade tout travay</h5><small>(Ver todos los trabajos)</small></a>
        </div> 

    </div>
</section>

<section id="eventos" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><span class="text-success">Evènman</span></h2> <h4>Eventos</h4>
                <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
            </div>
        </div>

        <div class="row projects">
            <div class="col-lg-6">
                <div class="hpanel hred">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4><a href="">Nombre Evento</a></h4>

                                <p>
                                    Descripción
                                </p>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="project-label">PLAS (Lugar)</div>
                                        <small>Dirección</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="project-label">KALITE (Tipo)</div>
                                        <small>Feria Laboral</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 project-info">
                                <div class="project-action m-t-md">
                                    <div class="btn-group">
                                        
                                    </div>
                                </div>
                                <div class="project-value">
                                    <h2 class="text-success">
                                        FECHA
                                    </h2>
                                </div>
                                <div class="project-people">
                                    <img alt="logo" class="img-circle" src="images/a1.jpg">
                                    <img alt="logo" class="img-circle" src="images/a2.jpg">
                                    <img alt="logo" class="img-circle" src="images/a3.jpg">
                                    <img alt="logo" class="img-circle" src="images/a4.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary btn-sm demo1">Plis enfòmasyon <small>(Más información)</small></button>
                    </div>
                </div>
            </div>  

            <div class="col-lg-6">
                <div class="hpanel hred">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <h4><a href="">Nombre Evento</a></h4>

                                <p>
                                    Descripción
                                </p>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="project-label">PLAS (Lugar)</div>
                                        <small>Dirección</small>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="project-label">KALITE (Tipo)</div>
                                        <small>Charla</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 project-info">
                                <div class="project-action m-t-md">
                                    <div class="btn-group">
                                        
                                    </div>
                                </div>
                                <div class="project-value">
                                    <h2 class="text-success">
                                        FECHA
                                    </h2>
                                </div>
                                <div class="project-people">
                                    <img alt="logo" class="img-circle" src="images/a1.jpg">
                                    <img alt="logo" class="img-circle" src="images/a2.jpg">
                                    <img alt="logo" class="img-circle" src="images/a3.jpg">
                                    <img alt="logo" class="img-circle" src="images/a4.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary btn-sm demo1">Plis enfòmasyon <small>(Más información)</small></button>
                    </div>
                </div>
            </div>  

        </div>
 
        <div class="row text-center m-t-lg">
            <a href="eventos" class="btn btn-info btn-sm"><h5>Gade tout evènman yo</h5><small>(Ver todos los eventos)</small></a>
        </div> 

    </div>
</section>

<section id="informacion">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><span class="text-success">Enformasyon</span></h2> <h4>Información</h4>
                <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs">Ambassade au Chili</h2>
                            <p class="font-bold text-success">Embajada en Chile</p>
                            <div class="m">
                                <i class="pe-7s-culture fa-5x"></i>
                            </div>
                            <p class="small">
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <button href="http://www.embajadahaiti.cl/" target="_blank" class="btn btn-warning btn-sm"><h5>Ale nan sit la</h5><small>(Visitar el sitio)</small></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs">Nouvo lwa Imigrasyon</h2>
                            <p class="font-bold text-info">Nueva ley de Migración</p>
                            <div class="m">
                                <i class="pe-7s-id fa-5x"></i>
                            </div>
                            <p class="small">
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <button href="https://www.gob.cl/nuevaleydemigracion/" target="_blank" class="btn btn-warning2 btn-sm"><h5>Ale nan sit la</h5><small>(Visitar el sitio)</small></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs">Dwa travayè yo</h2>
                            <p class="font-bold text-warning">Derechos de los trabajadores</p>
                            <div class="m">
                                <i class="pe-7s-user fa-5x"></i>
                            </div>
                            <p class="small">
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <button href="https://www.chileatiende.gob.cl/fichas/26501-derechos-de-los-trabajadores" target="_blank" class="btn btn-danger btn-sm"><h5>Ale nan sit la</h5><small>(Visitar el sitio)</small></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="equipo" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="row">
            <div class="col-lg-12">
                <h1><span class="text-success">Ekip nou an</span></h2> <h4>Nuestro Equipo</h4>
                <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
            </div>
        </div>

        <div class="row m-t-lg text-center">
            <div class="col-sm-6">
                <div class="team-member">
                    <img src="images/a2.jpg" class="img-circle img-small" alt="">
                    <h4><span>Mauricio</span> González</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="team-member">
                    <img src="images/a5.jpg" class="img-circle" alt="">
                    <h4><span>Manuel</span> Grandón</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                </div>
            </div>
        </div>
        <div class="row m-t-lg text-center">
            <div class="col-sm-6">
                <div class="team-member">
                    <img src="images/a2.jpg" class="img-circle img-small" alt="">
                    <h4><span>Camilo</span> Monares</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="team-member">
                    <img src="images/a5.jpg" class="img-circle" alt="">
                    <h4><span>Daniel</span> Hernandez</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                </div>
            </div>
        </div>    
    </div>
</section>



<section id="contacto" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="row">
            <div class="col-lg-12">
                <h1><span class="text-success">Kontakte</span></h2> <h4>Contacto</h4>
                <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
            </div>
        </div>

        <div class="row text-center m-t-lg">
                <form class="form-horizontal" role="form" method="post" action="#">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Non <small>(Nombre)</small></label>

                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Non konplè ou" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Imèl <small>(Email)</small></label>

                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="email" name="email" placeholder="user@ejemplo.com" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-3 control-label">Mesaj <small>(Mensaje)</small></label>

                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" name="message"  placeholder="Ekri mesaj ou a isit la..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="submit" name="submit" type="submit" value="Voye mesaj (Enviar mensaje)" class="btn btn-success">
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</section>

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

<!-- Local script for menu handle -->
<!-- It can be also directive -->
<script>
    $(document).ready(function () {

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
        });

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

    });
</script>

</body>
</html>