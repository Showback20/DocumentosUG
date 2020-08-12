<?php
include("metodo_fecha.php");// se incluye el controlador metodo_fecha
// creacion de las variables las cuales almacenan los parametros del usuario
$nua=$_POST['nua'];
$nombre=$_POST['nombre'];
$carrera=$_POST['carrera'];
$motivo=$_POST['motivo'];
$genero=$_POST['genero'];
$semestre=$_POST['semestre'];
$correo=$_POST['correo'];
$carrera=carrera_mostrar($carrera); //llamada a la funcion de carrera para obtener el nombre de la carrera
$genero=genero_mostrar($genero); // llamada a la funcion para obtener el genero 


//variable que contiene un formulario y concatena los datos del usuario
$datos='<form action="prepdf.php" id="formulario2" method="post" > 
<div class="form-group">
<label for="nua" id="modalLab">NUA</label>
<input class="form-control" value="'.$nua.'" id="nua" name="nua" type="text"  readonly="readonly"> 
</div>
<div class="form-group">
<label for="nombre" id="modalLab">Nombre del participante</label>
<input class="form-control" value="'.$nombre.'" id="nombre" name="nombre" type="text" style="text-transform: uppercase;" readonly="readonly"> 
</div>
<div class="form-group">
<label for="carrera" id="modalLab">Programa academico</label>
<input class="form-control" value="'.$carrera.'" id="carrera" name="carrera" type="text" style="text-transform: uppercase;" readonly="readonly"> 
</div>
<div class="form-group">
<label for="semestre" id="modalLab">Semestre</label>
<input class="form-control" value="'.$semestre.'" id="semestre" name="semestre" type="text" style="text-transform: uppercase;" readonly="readonly"> 
</div>
<div class="form-group">
<label for="correo" id="modalLab">Correo</label>
<input class="form-control" value="'.$correo.'" id="correo" name="correo" type="text"  readonly="readonly"> 
</div>
<div class="form-group">
<label for="genero" id="modalLab">Genero</label>
<input class="form-control" value="'.$genero.'" id="genero" name="genero" type="text" style="text-transform: uppercase;" readonly="readonly"> 
</div>
<div class="form-group">
<label for="motivo" id="modalLab">Motivo</label>
<input class="form-control" value="'.$motivo.'" id="motivo" name="motivo" type="text" readonly="readonly"> 
</div>
<hr>
<div class="form-row">
<div class="form-group col-sm-3 ">      
    <button type="submit" class="btn btn-primary" id="btn1">Continuar</button>
   
    </div>
<div class="form-group col-sm-3">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
</div>
    
    
    </div>
<br>

</form>';
echo $datos;// respuesta del controlador

?>
