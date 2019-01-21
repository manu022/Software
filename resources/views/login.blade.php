<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Priotelus | Ingreso</title>

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
<body class="blank">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>PRIOTELUS</h1><p>SISTEMA DE GESTIÓN DE EMPLEO PARA INMIGRANTES HAITIANOS</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>

<div class="back-link">
    <a href="home" class="btn btn-primary">Retounen <small>(Volver)</small></a>
</div>

<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>POR FAVOR INICIE SESIÓN</h3>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <form method="post" action="{{ route('login') }}" id="loginForm">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                <label class="control-label" for="email">Usuario</label>
                                <input type="email" placeholder="Tu credencial única : ejemplo@ejemplo.com" title="Por favor ingresa tu usuario" required="" value="{{ old('email') }}" name="email" id="email" class="form-control">
                                
                                {!! $errors->first('email' , '<span class ="help-block">:message</span>') !!}

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Contraseña</label>
                                <input type="password" title="Por favor ingresa tu contraseña" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Tu contraseña segura.</span>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" class="i-checks" checked>
                                     Recuérdame
                                <p class="help-block small">(Solo si es una computadora personal*)</p>
                            </div>
                            <button class="btn btn-success btn-block">Login <small>(Iniciar sesión)</small></button>
                            <a class="btn btn-default btn-block" href="register">Enskri kòm itilizatè
                            </br><small>(Registrarse como usuario)</small></a>
                            <a class="btn btn-default btn-block" href="registro_empresa">Registrarse como empresa
                            </br><small>(Enskri kòm yon konpayi)</small></a>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <strong>Priotelus</strong> - 2018-2019
        </div>
    </div>
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
