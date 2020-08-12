<?php
require_once('../Ressourcer/vendor/autoload.php');
$pdf=new \Mpdf\Mpdf([ ]);
include("pdf/pdf_documentos.php");
include("../Controller/metodo_fecha.php");
include("../Controller/control_documentos.php");
$fecha = fecha_mostrar();
$documentos=$_POST['doc'];
$semestre=$_POST['semestre'];
$nombre=$_POST['nombre'];
$carrera=$_POST['carrera'];
$genero=$_POST['genero'];
$correo=$_POST['correo'];
$carrera=carrera_mostrar($carrera);//metodo para tener el nombre de la carrera completa
$genero=genero_mostrar($genero);//metodo para que me devuelva el o ella


$envio_control=control_documentos($nombre,$carrera,$semestre,$correo,$fecha,$documentos);
if($envio_control==1){
    $folio=obtener_folio();
    $mostrar=obtener($nombre,$carrera,$fecha,$folio,$genero,$documentos);
    $css=file_get_contents("../Ressourcer/css/estilos_pdf.css");
    $pdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $pdf->writeHtml($mostrar,\Mpdf\HTMLParserMode::HTML_BODY);
    $pdf->Output();

}else{
echo "Error de conexion";
}
?>


