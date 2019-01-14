<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Registro Usuario</title>

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
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>
<div class="back-link">
    <a href="login" class="btn btn-primary">Volver</a>
</div>
<div class="register-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>Registro</h3>
                <small>Por favor, llena los siguientes campos para registrarte </small>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <form method="post" action="{{ route('register') }}" id="loginForm">
                            {{ csrf_field() }}
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nombre de usuario</label>
                                <input type="text" value="{{ old('name') }}" id="name" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Rut</label>
                                <input type="" value="{{ old('rut') }}" id="rut" class="form-control" name="rut" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Celular</label>
                                <input type="" value="{{ old('telefono') }}" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" required>
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contraseña</label>
                                <input type="password" value="" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Repetir Contraseña</label>
                                <input type="password" value="" id="password-confirm" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Dirección de Correo Electronico</label>
                                <input type="email" value="{{ old('email') }}" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Repetir Dirección de Correo Electronico</label>
                                <input type="email" value="" id="email-confirm" class="form-control" name="email_confirmation" required>
                            </div>
                            
                            <div class="checkbox col-lg-12">
                                <input type="checkbox" class="i-checks" checked>
                                Marcar para recibir noticias
                            </div>
                            </div>
                            <div><input id="tipo_usuario" type="hidden" class="form-control" name="tipo_usuario" value=2 required></div>
                            <div class="text-center">

                                <button class="btn btn-success">Registrarse</button>
                              
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <strong>HOMER</strong> - AngularJS Responsive WebApp <br/> 2018 Copyright Prioutelus
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

