<?php
require_once('../Ressourcer/vendor/autoload.php');//llamada a la libreria mpdf
$pdf=new \Mpdf\Mpdf([ ]); // creacion del objeto de la libreria mpdf
include("pdf/pdf_pago.php");// llamada a la plantilla para el pdf
include("../Controller/metodo_fecha.php"); 
include("../Controller/control_pago.php");

$fecha = fecha_mostrar();// variable con la fecha al llamar la funcion fecha_mostrar
// captura de la informacion del usuario
$correo=$_POST['correo'];
$nua=$_POST['nua'];
$nombre=$_POST['nombre'];
$carrera=$_POST['carrera'];
$motivo=$_POST['motivo'];
$genero=$_POST['genero'];
$semestre=$_POST['semestre'];

$envio_control=control_pago($nua,$nombre,$carrera,$semestre,$correo,$fecha,$motivo);//envio de la informacion hacia el control
if($envio_control==1){ // compara el resultado al almacenar la informacion 1 aceptado 0 error en el proceso
    $folio=obtener_folio(); // llama a la funcion para obtener el folio del usuario
    $mostrar=obtener($nua,$nombre,$carrera,$semestre,$fecha,$folio,$genero,$motivo); //manada la informacion a la plantilla y lo regresa como una variable con la informacion del usuario
    $css=file_get_contents("../Ressourcer/css/estilos_pdf.css"); //incluye los archivos css
    $pdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS); 
    $pdf->writeHtml($mostrar,\Mpdf\HTMLParserMode::HTML_BODY); //convierte la plantilla en formato pdf
    $pdf->Output();// muestra el pdf

}else{
echo "Error de conexion";
}
?>


