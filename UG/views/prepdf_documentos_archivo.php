<?php
require_once('../Ressourcer/vendor/autoload.php');
$pdf=new \Mpdf\Mpdf([ ]);
include("pdf/pdf_documentos.php");
include("../Controller/metodo_fecha.php");
include("../Controller/control_documentos_archivo.php");
$fecha = fecha_mostrar();
$documentos=$_POST['doc'];
$nombre=$_POST['nombre'];
$semestre=$_POST['semestre'];
$carrera=$_POST['carrera'];
$genero=$_POST['genero'];
$correo=$_POST['correo'];

$ruta="../Ressourcer/documentos";
$tmpnombre=$_FILES['archivo']['tmp_name'];//nombre temporal del archivo guardado
$nombre_archivo=$_FILES['archivo']['name'];
$tipo=$_FILES['archivo']['type'];
move_uploaded_file($tmpnombre,$ruta."/".$nombre_archivo);
$archivo=$nombre_archivo;

$envio_control=control_documentos($nombre,$carrera,$semestre,$correo,$fecha,$documentos,$archivo);
if($envio_control==1){
    $folio=obtener_folio();
    $arch='<img src="../Ressourcer/documentos/'.$archivo.'" style="width: 100%; background-size: cover;" alt="Error">';
    $mostrar=obtener($nombre,$carrera,$fecha,$folio,$genero,$documentos);
    $css=file_get_contents("../Ressourcer/css/estilos_pdf.css");
    $pdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $pdf->writeHtml($mostrar,\Mpdf\HTMLParserMode::HTML_BODY);
    $pdf->AddPage();
    $pdf->writeHTML($arch,\Mpdf\HTMLParserMode::HTML_BODY);
    $pdf->Output();

}else{
echo "Error de conexion";
}
?>


