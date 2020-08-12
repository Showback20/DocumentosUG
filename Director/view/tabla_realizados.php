<?php
include("../Controller/control_realizados.php");
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

    </tr>
  </thead>
 
  <tbody>
<?php
     while($mostrar=mysqli_fetch_array($ver)){
?>
 
<tr>
       
      <td><?php echo $mostrar['solicitante'];?></td>
      <td><?php echo $mostrar['carrera'];?></td>
      <td><?php echo $mostrar['semestre'];?></td>
      <td><?php echo $mostrar['nombre_tiposolicitud'];?></td>
      <td><?php echo $mostrar['fecha_solicitud'];?></td>
      <td><?php echo $mostrar['estatus_solicitud'];?></td>
     
      
    </tr>
    <?php
}?>
  </tbody>
</table>

</body>