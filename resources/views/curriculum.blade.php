<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Priotelus | Curriculum</title>

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
<div class="register-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>Kreyatè Currículum</h3>
                <small>Ranpli nan done yo pou kreyasyon an</small>
            </div>
            <form method = "post" action="crear-pdf.php"
            <div class="hpanel">
                <div class="panel-body">
                        <form action="#" id="loginForm">
                            <div class="row text-center m-t-lg"><h3><span class="text-success">I. Enfòmasyon pèsonèl</span> (Datos Personales)</h3></div>
                            </br>
                            <div class="form-group col-lg-12">
                                <label>Non konplè</label><small>   (Nombre Completo)</small>
                                <input type="" value="" id="" class="form-control" name="Nombre">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Rut</label>
                                <input type="" value="" id="" class="form-control" name="Rut">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Dat nesans</label><small>   (Fecha de nacimiento)</small>
                                <input type="" value="" id="" class="form-control" name="Fecha" placeholder="DD/MM/AAAA">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Adrès</label><small>   (Dirección)</small>
                                <input type="" value="" id="" class="form-control" name="Direccion">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Komin</label><small>   (Comuna)</small>
                                <input type="" value="" id="" class="form-control" name="Comuna">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Kote nesans</label><small>   (Lugar de nacimiento)</small>
                                <input type="" value="" id="" class="form-control" name="Nacimiento">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nasyonalite</label><small>   (Nacionalidad)</small>
                                <input type="" value="" id="" class="form-control" name="Nacionalidad">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Sèks</label><small>   (Género)</small>
                                <input type="" value="" id="" class="form-control" name="Genero" placeholder="Masculino/Femenino">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Imèl</label><small>   (Correo electrónico)</small>
                                <input type="" value="" id="" class="form-control" name="Correo">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nimewo telefòn</label><small>   (Número de teléfono)</small>
                                <input type="" value="" id="" class="form-control" name="Telefono">
                            </div>

                            <div class="row text-center m-t-lg"><h3><span class="text-success">II. Akademik Istorik</span> (Antecedentes Académicos)</h3></div>
                            </br>
                            <div class="form-group col-lg-12">
                                <label>Istorik mwen</label><small>   (Mis Antecedentes)</small>
                                <textarea class="form-control" rows="5" name="message" placeholder="2005-2010 / Lekòl / Vil, Peyi"></textarea>
                            </div>

                            <div class="row text-center m-t-lg"><h3><span class="text-success">III. Eksperyans travay</span> (Experiencia Laboral)</h3></div>
                            </br>
                            <div class="form-group col-lg-12">
                                <label>Eksperyans mwen</label><small>   (Mi Experiencia)</small>
                                <textarea class="form-control" rows="5" name="j" placeholder="2005-2010 / Konpayi, Kago / Vil, Peyi"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success" href="#">Jebere <small>(Generar)</small></button>&nbsp;&nbsp;
                                <a class="btn btn-default" href="curriculum">Anile <small>(Cancelar)</small></a>
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
