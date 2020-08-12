<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Ressourcer/css/estilos.css" rel="stylesheet" type="text/css">
    <link href="../Ressourcer/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../Ressourcer/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../Ressourcer/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../Ressourcer/js/popper.min.js" type="text/javascript"></script>
    <title>UG documentation</title>
  
 
</head>
<body>
    <br>
    <div class="container">
    <div class="row">
        
        <div class="btn-group" id="grupo_btn" role="group" aria-label="Basic example">
        <a href="tabla_pendientes.php" class="btn btn-secondary" >Peticiones pendientes</a>
        <a href="tabla_realizados.php" class="btn btn-secondary">Peticiones entregadas</a>        
        </div>
        <div class="col-sm-1 offset-sm-7" id="agregar">
        <a href="../Controller/modal_guardar.php"><img src="../Ressourcer/img/circulo.svg" alt="Error" style="width: 20px; height: 20px;"></a>
        </div>
    </div>
    </div>
 <div class="col-sm-12" id="mostrar"></div>
 <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">INFORMACIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mostrar_modal">
        
      </div>
   
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">AGREGAR NUEVO REPRESENTANTE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mostrar_modal2">
        
      </div>
   
    </div>
  </div>
</div>
</div>
<script>
       
       $(document).ready(function(){
           $("#mostrar").load("tabla_pendientes.php");
           $("#grupo_btn a").click(function(){
               var url=$(this).attr('href');
               $("#mostrar").load(url);
               return false;
           });
           $("#agregar a").click(function(){
               var url=$(this).attr('href');
               $("#mostrar_modal2").load(url);
               $("#modal2").modal('show');
               return false;
           });
       });
   
   </script>

</body>
</html>