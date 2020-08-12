<?php
Require "../Model/modelo_ver.php";

$id=$_POST['id'];

$objeto=new modelo_ver1();
$resul=$objeto->retornar($id);

while($mostrar=mysqli_fetch_array($resul)){
$datos='
<div class="col-sm-12">
<h5>Nombre</h5>
<p>'.$mostrar['solicitante'].'</p>
</div>
<div class="col-sm-12">
<h5>Carrera</h5>
<p>'.$mostrar['carrera'].'</p>
</div>
<div class="col-sm-12">
<h5>Semestre</h5>
<p>'.$mostrar['semestre'].'</p>
</div>
<div class="col-sm-12">
<h5>Tipo de solicitud</h5>
<p>'.$mostrar['nombre_tiposolicitud'].'</p>
</div>
<div class="col-sm-12">
<h5>Fecha de envio</h5>
<p>'.$mostrar['fecha_solicitud'].'</p>
</div>
<div class="col-sm-12">
<h5>Observaciones</h5>
<p>'.$mostrar['observaciones'].'</p>
</div>
<div class="col-sm-12">
<h5>Estatus</h5>
<p>'.$mostrar['estatus_solicitud'].'</p>
</div>
<hr>
<div class="col-sm-6">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
</div>';
}
echo $datos;