<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tu curriculum</title>
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </head>
    <body>
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Crear un PDF</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Creador de curriculums
          </div>
          <div class="mdl-card__actions mdl-card--border">
              <form action="crear-pdf.php">
                  <input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" value="Crear PDF">
              </form>
          </div>
          <div class="mdl-card__menu">
            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
              <i class="material-icons">folder</i>
            </button>
          </div>
        </div>
          <form method = "post" action="crear-pdf.php">
              Nombre: <input type="text" name="Nombre">
              <br>
              Apellidos: <input type="text" name="Apellidos">
              Contraseña <input type="password" name="Contraseña">
              <input type="submit"  value="Enviar">
            </form>
</html>




<?php


 ?>
