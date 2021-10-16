<?php
use Dompdf\Dompdf;
use Dompdf\Options;

include_once "dompdf/autoload.inc.php";

//option permite traer imagenes.
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);
//ob_start permite convertir la pagina con datos dinamicos en html -> para poder transformar en pdf
ob_start();
include "cred_html.php";
$html = ob_get_clean();
//pasada la pagina a solo html para que dompdf lo pueda transformar.
$dompdf->loadHtml($html);
$dompdf->set_paper(array(0, 0, 265, 192),'portrait');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream();

?>