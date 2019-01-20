
<html>
<head>
  <title> Curriculum generado </title>
</head>
<body>
  <h1 align="center">CURRICULUM VITAE</h1>
  <br>
  <h3>I. <u>DATOS PERSONALES</u> </h3>
  <br>
 <h4>Nombre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php
  echo $_POST["Nombre"];
  ?>
  <br>
  <br>
  <br>
   R.U.T: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php
  echo $_POST["Rut"];
   ?>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Direccion: &nbsp;&nbsp;&nbsp;
   <?php
   echo $_POST["Direccion"];
    ?>
   <br>
   <br>
   <br>
   Fecha de nacimiento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <?php
   echo $_POST["Fecha"];
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comuna: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    echo $_POST["Comuna"];

     ?>
    <br>
    <br>
    <br>
   Nacionalidad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <?php
   echo $_POST["Nacionalidad"];
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Telefono:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    echo $_POST["Telefono"]
    ?>
    <br>
    <br>
    <br>
   Lugar de nacimiento: &nbsp;&nbsp;&nbsp;&nbsp;
   <?php
   echo $_POST["Nacimiento"];
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Género: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <?php
    echo $_POST["Genero"];
     ?>
     <br>
     <br>
     <br>
    Estado Civil:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;Soltero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;
    Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    echo $_POST["Correo"];
     ?>
    <br>
    <br>
    <br>
 </h4>
   <h3>II. <u>ANTECEDENTES ACADEMICOS</u> </h3>
   <br>
   <h4>
   <?php
   echo htmlspecialchars($_POST["message"]);
    ?>
    <h4>
      <br>
      <br>
      <br>
  <h3>III. <u>EXPERIENCIA LABORAL</u></h3>
  <br>
</h4>
  <?php
  echo htmlspecialchars($_POST["j"]);
   ?>
 </h4>
</body>
</html>


<?php
  $content = ob_get_clean();
  require_once(dirname(__FILE__).'/../vendor/autoload.php');
  use Spipu\Html2Pdf\Html2Pdf;

  try
  {

      ob_start();
      $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_POST['prueba']));
      ob_end_clean();
      $html2pdf->Output('PDF-CF.pdf');
  }
   catch (Html2PdfException $e) {
  $html2pdf->clean();
  $formatter = new ExceptionFormatter($e);
  echo $formatter->getHtmlMessage();
}
?>
