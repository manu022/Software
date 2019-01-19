<?php

print ("Nombre: ");
echo $_POST["Nombre"];
echo "<br>";
print ("Apellidos: ");
echo $_POST["Apellidos"];
echo "<br>";
echo $contraseña= $_POST["Contraseña"];
echo "<br>";

 ?>


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
