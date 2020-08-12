<?php
include("../Controller/control_pendientes.php");
$ver=llamada();
?>
   

<body>
<table class="table table-bordered table-dark" id="tabla1">
  <thead >
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Carrera</th>
      <th scope="col">Semestre</th>
      <th scope="col">Tipo de solicitud</th>
      <th scope="col">Fecha de envio</th>      
      <th scope="col">Estatus de la solicitud</th>
      <th scope="col"></th>
      <th scope="col"></th>  
      <th scope="col">Ver informacion</th>
    </tr>
  </thead>
 
  <tbody>
<?php
     while($mostrar=mysqli_fetch_array($ver)){
?>
 
<tr id="tbl1">
       
      <td><?php echo $mostrar['solicitante'];?></td>
      <td><?php echo $mostrar['carrera'];?></td>
      <td><?php echo $mostrar['semestre'];?></td>
      <td><?php echo $mostrar['nombre_tiposolicitud'];?></td>
      <td><?php echo $mostrar['fecha_solicitud'];?></td>
      <td><?php echo $mostrar['estatus_solicitud'];?></td>
      <td><button type="button" class="btn btn-success btn-sm" value="<?php echo $mostrar['id_solicitud'];?>">Aceptado</button></td>
      <td><button type="button" class="btn btn-danger btn-sm" value="<?php echo $mostrar['id_solicitud'];?>">Rechazado</button></td>
      <td><a type="button" class="btn btn-light btn-sm"  value="<?php echo $mostrar['id_solicitud'];?>"><img src="../Ressourcer/img/ojo3.svg" style="width: 20px; height: 20px;" alt="error"></a></td>
      
    </tr>
    <?php
}?>
  </tbody>
</table>
<script>
  $(document).ready(function(){
          
    $("#tbl1 a").click(function(){
               var url=$(this).attr('value');
               var envio={id:url}
               $.post("../Controller/control_ver.php",envio,mostrar2);
               
           });
           function mostrar2(datos){
             $("#mostrar_modal").html(datos);
               $("#modal").modal('show');

           }
           $("#tbl1 button").click(function(){
               var url=$(this).attr('value');
               var estatus=$(this).text();
               var envio={id:url,est:estatus}
               $.post("../Controller/control_aceptar.php",envio,mostrar);
               
           });
           function mostrar(){
            location.reload();
           }
       });
</script>

</body>