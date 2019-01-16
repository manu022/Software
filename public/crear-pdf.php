<?php
  ob_start();
  ?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
 <h1>Pdf creado de prueba</h1>       <br>
  <b>Esto será el curriculum, ir a la pagina principal</b><br>
  <a href='home'>Click</a>.<br>
</page>

<?php
  $content = ob_get_clean();
  require_once(dirname(__FILE__).'/../vendor/autoload.php');
  use Spipu\Html2Pdf\Html2Pdf;
  use Spipu\Html2Pdf\Exception\Html2PdfException;
  use Spipu\Html2Pdf\Exception\ExceptionFormatter;

  try
  {

      $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      ob_end_clean();
      $html2pdf->Output('PDF-CF.pdf');
  }
   catch (Html2PdfException $e) {
  $html2pdf->clean();
  $formatter = new ExceptionFormatter($e);
  echo $formatter->getHtmlMessage();
}
?>
