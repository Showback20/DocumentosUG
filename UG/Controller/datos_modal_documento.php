<?php
include("metodo_fecha.php");
$documentos="";
$nombre=$_POST['nombre'];
$carrera=$_POST['carrera'];
$genero=$_POST['genero'];
$correo=$_POST['correo'];
$semestre=$_POST['semestre'];
$doc1=$_POST['acta'];
$doc2=$_POST['pago'];
$doc3=$_POST['certificado'];
$carrera=carrera_mostrar($carrera);
$genero=genero_mostrar($genero);
if($doc1==1){
    $documentos='|Acta de nacimiento|';
}else{}
if($doc2==1){$documentos=$documentos.'|Pago de concepto de inscripcion|';}else{}
if($doc3==1){$documentos=$documentos.'|Certificado de bachillerato|';
    
$datos='<form action="prepdf_documentos_archivo.php" id="formulario2" id="needs-validation"method="post" enctype="multipart/form-data" >
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
<label for="genero" id="modalLab">Documento(s) faltante(s)</label>
<input class="form-control" value="'.$documentos.'" id="doc" name="doc" type="text" style="text-transform: uppercase;" readonly="readonly" required> 
</div>
<div class="form-group col-sm-12">
<p style="text-align: justify; color:red;">En caso de solicitar prórroga para la entrega del Certificado de Bachillerato,
anexar Costancia Original de Término de Estudios del Bachillerato.
</p>     
</div> 
<div class="form-group col-sm-12"><div class="custom-file">
      <input type="file" class="custom-file-input" id="archivo" name="archivo" accept=".pdf,.jpg,.png,.jpeg" required>
  <label class="custom-file-label" for="customFile">Seleccionar archivo</label>
</div></div></body> 

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
echo $datos;

}else{
    if($doc1==0 && $doc2==0 && $doc3==0){
        $datos='<h2>Te falto seleccionar los documento(s) faltante(s) porfavor intentelo de nuevo</h2><br>
        <hr>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        ';
        echo $datos;
    }else{
   
$datos='<form action="prepdf_documentos.php" id="formulario2" method="post" >
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
<label for="genero" id="modalLab">Documento(s) faltante(s)</label>
<input class="form-control" value="'.$documentos.'" id="doc" name="doc" type="text" style="text-transform: uppercase;" readonly="readonly"> 
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
echo $datos;
    }
}


/*$ruta="../Ressourer/documentos";
$nombretmp=$_FILES['archivo']['tmp_name'];
$nombre=$_FILES['archivo']['name'];
$tipo=$_FILES['archivo']['type'];
move_uploaded_file($nombretmp,$ruta."/".$nombre);
$archivo=$nombre.$tipo;
*/



?>
