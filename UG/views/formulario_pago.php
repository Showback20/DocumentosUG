

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Ressourcer/css/estilos_form.css" rel="stylesheet" type="text/css">
    <link href="../Ressourcer/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../Ressourcer/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../Ressourcer/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../Ressourcer/js/popper.min.js" type="text/javascript"></script>
    <title>Creacion de documento</title>
</head>
<body>
<div class="container-fluid">
    
    
<form  class="needs-validation col-sm-7 offset-sm-2" id="formulario" method="post" >
    <div class="col-sm-12">
        <p id="titulo_form">REQUISITOS</p>
    </div>
    
    <hr>
    <div class="form-row ">
<div class="form-group col-sm-3">
    <label for="nua_txt">NUA</label>
    <input class="form-control " id="nua_txt" name="nua_txt" type="text" placeholder="Ingresar el NUA" required>
</div>
<div class="form-group col-sm-9 ">
    <label for="nombre_txt">Nombre del participante</label>
    <input class="form-control " id="nombre_txt" name="nombre_txt" type="text" placeholder="Nombre completo" required>
</div></div>
<div class="form-row ">
<div class="form-group col-sm-9 ">
    <label for="selector_carreras">Programa academico</label>
    <select class="form-control" id="selector_carreras" name="selector_carreras" required>
      <option selected disabled>Seleccione programa academico</option>  
      <option value="0">Licenciatura en Ingeniería en Alimentos</option>
      <option value="1">Licenciatura en Agronomía</option>
      <option value="2">Licenciatura en Agronegocíos</option>
      <option value="3">Licenciatura en Ingeniería Agrónica</option>
      <option value="4">Licenciatura en Enfermería y Obstetricia</option>
      <option value="5">Licenciatura en Ingeniería Ambiental</option>
      <option value="6">Licenciatura en Medicina Veterinaria y Zootecnia</option>
      <option value="7">Licenciatura en Energías Renovables</option>
      <option value="8">Licenciatura en Ingeniería Mecánica Agrícola</option>
      </select>
  
</div>

<div class="form-group col-sm-3">
    <label for="semestre_txt">Semestre actual</label>
    <input class="form-control" id="semestre_txt" name="semestre_txt" type="number" maxlength="2" placeholder="Numero de semestre" required min="1" max="20">
</div>
</div>
<div class="form-row">
<div class="form-group col-sm-9">
    <label for="correo_txt" >Correo Electronico</label>
    <input type="email" class="form-control" id="correo_txt" name="correo_txt" placeholder="nombre@ejemplo.com" required>
     </div>
     <div class="form-group col-sm-3 ">
    <label for="selector_genero">G&eacute;nero</label>
    <select class="form-control" id="selector_genero" name="selector_genero" required>
      <option selected disabled>Seleccione g&eacute;nero</option>  
      <option value="0">Femenino</option>
      <option value="1">Masculino</option>
      
      </select>
  
</div>
  </div>
<div class="form-group">
    <label for="explicacion_txt" name="explicacion_txt">Motivo de la peticion</label>
    <textarea class="form-control" id="explicacion_txt" name="explicacion_txt" rows="3" placeholder="Lo anterio con base en el art&iacute;culo 47 del reglamento acad&eacute;mico de la normatividad universitaria " required></textarea>
  </div>

<hr>

<div class="form-row">
<div class=" form-group col-sm-2 ">      
    <button type="submit" class="btn btn-outline-primary" id="btn1"  >Completado</button>
    </div>
    <div class=" form-group col-sm-2 ">      
    <a href="index.php" class="btn btn-outline-danger" id="boton" > Cancelar </a>
    </div>
<br>
</div>

</form>

<div class="modal fade" id="ventanam" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">VERIFIQUE QUE SUS DATOS SEAN CORRECTOS</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mostrar">
        
      </div>      
    </div>
  </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() { //funcion para validar todos los inputs
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation col-sm-7 offset-sm-2');
  
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



$(document).ready(function(){ 
  $("#formulario").submit(function(){ // funcion que manda los datos a un formulario que se monstrara en el modal
      var envio={nua:$("#nua_txt").val(),nombre:$("#nombre_txt").val(),
      carrera:$("#selector_carreras").val(),semestre:$("#semestre_txt").val(),correo:$("#correo_txt").val(),
      genero:$("#selector_genero").val(),motivo:$("#explicacion_txt").val()} //creacion del objeto json 
      $.post("../Controller/datos_modal.php",envio,respuesta); // envio de la informacion 
       return false;
  });
  function respuesta(dato){// funcion para mostrar el formulario en el modal
    $("#mostrar").html(dato); // inserta los datos en el modal
    $("#ventanam").modal('show'); // muestra el modal
  }

$("#formulario2").submit(function(){
      var envio={nombre:('#nombre').val()}
      $.post("prepdf.php",envio,function(dato){
       
       alert(dato);
      });
       return false;

});
});



</script>



</body>
</html>