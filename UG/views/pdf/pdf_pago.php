<?php




function obtener($nua_p,$nombre_p,$carrera_p,$semestre_p,$fecha_p,$folio,$genero_p,$motivo_p){

$formato='<body>
    <div class="cuerpo">
  <div><img src="../Ressourcer/img/logo_ug.jpeg" alt="Error" style="width: 300px;"> </div>
  <br><br>
  
  <div class="mover2"></div>
  <div class="fecha">

      <p>
      Folio:'.$folio.'<br>
      Irapuato,Gto, '.$fecha_p.'<br>
      Asunto:art.47, Solicitud de inscripci&oacute;n extempor&aacute;nea</p>
  </div>
  
<div class="director">
    <p><b>Dr.JOS&Eacute; MARIO MENDOZA CARRILLO</b><br>
Director de la División de Ciencias de la vida <br>
        Campus Irapuato-Salamanca<br>
        Universidad de Guanajuato<br>
        Presente <br> <br> <br> Respetable Doctor  </p>
</div>
<br>
<div class="contexto">
    <p>'.$genero_p.' que suscribe C.<b  style="text-transform: uppercase;">'.$nombre_p.'</b> con NUA <b>'.$nua_p.'</b> 
        estudiante de <b>'.$semestre_p.'°</b> semestre de la <b>'.$carrera_p.'</b>, me dirijo a usteda fin de 
        solicitar su autorización para realizar mi inscripción extemporánea a la licenciatura.El motivo de 
        esta petición se debe a que <br><br> <b>'.$motivo_p.'</b>
        </p>
</div>
<br>
<div class="despedida"><p>
    Sin otro tema en particular,agradezco la intenci&oacute;n que al presente otorga, reciba un cordial saludo</p> </div>

    <div class="mover"></div>
    <br>
    <br>
<div class="firma"><p>
                 Atentamente. <br>
                 <b style="text-transform: uppercase;">'.$nombre_p.'</b> <br>
				Estudiante de<b> '.$semestre_p.'° </b>
				de la <b>'.$carrera_p.'</b> </p></div>
                </div>
</body>';
return $formato;
}
