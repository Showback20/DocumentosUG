<?php
/*require_once('../Ressourcer/vendor/autoload.php');




$pdf=new \Mpdf\Mpdf([ ]);

$mostrar='<img src="../Ressourcer/documentos/doom.jpg" style="width: 100%; background-size: cover;" alt="Error"> ';
$css=file_get_contents("../Ressourcer/css/estilos_pdf.css");
$pdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$pdf->writeHtml($mostrar,\Mpdf\HTMLParserMode::HTML_BODY);
$pdf->AddPage();
$pdf->Output('../Ressourcer/documentos/Documentos_faltantes.pdf','F');
$pdf->Output('Documentos_faltantes.pdf','I');*/
//envio de correo
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "mannyburritos@gmail.com";
$to = "manuel_ortiz_avila@hotmail.com";
$subject = "Checking PHP mail";
$message = "PHP mail works just fine";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The email message was sent.";

