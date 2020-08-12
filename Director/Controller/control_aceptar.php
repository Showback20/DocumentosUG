<?php

Require "../Model/modelo_aceptar.php";
include("metodo_fecha.php");
include("../Ressourcer/pdf/pdf_pago_aceptado.php");
include("../Ressourcer/pdf/pdf_documento_aceptado.php");
include("control_envio_correo.php");
require_once('../Ressourcer/vendor/autoload.php');
$pdf=new \Mpdf\Mpdf([ ]);
$id=$_POST['id'];
$estatus=$_POST['est'];

$objeto=new modelo_acp();
$resul=$objeto->aceptar($id,$estatus);
$director=$objeto->director();
$fecha_respuesta=fecha_mostrar();
$ano=year();

while($m=mysqli_fetch_array($resul)){
$nombre=$m['solicitante'];
$carrera=$m['carrera'];
$semestre=$m['semestre'];
$fecha_envio=$m['fecha_solicitud'];
$correo=$m['correo_solicitud'];
$documentos=$m['observaciones'];
$folio=$m['folio_solicitud'];
$tipo=$m['id_tiposolicitud'];
}
$tipo=intval($tipo);
if($tipo==1){
    $cuerpo=obtener_p($nombre,$carrera,$semestre,$fecha_envio,$fecha_respuesta,$ano,$director,$estatus); //crea el pdf
    $ruta='../Ressourcer/pdf_envio/'.$folio.'.pdf';
    $css=file_get_contents("../Ressourcer/css/estilos_pdf.css");
    $pdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $pdf->writeHtml($cuerpo,\Mpdf\HTMLParserMode::HTML_BODY);
    $pdf->Output($ruta,'F');
    $respuesta=enviar_correo($nombre,$correo,$ruta,$director);// funcio para mandar al correo del usuario

}else{
    $cuerpo=obtener_d($nombre,$carrera,$semestre,$documentos,$fecha_envio,$fecha_respuesta,$ano,$director,$estatus);
    $ruta='../Ressourcer/pdf_envio/'.$folio.'.pdf';
    $css=file_get_contents("../Ressourcer/css/estilos_pdf.css");
    $pdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $pdf->writeHtml($cuerpo,\Mpdf\HTMLParserMode::HTML_BODY);
    $pdf->Output($ruta,'F');
    $respuesta=enviar_correo($nombre,$correo,$ruta,$director);
}
