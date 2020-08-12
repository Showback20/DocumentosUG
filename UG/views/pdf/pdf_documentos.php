<?php




function obtener($nombre_p,$carrera_p,$fecha_p,$folio,$genero_p,$requisitos){

$formato='<body>
    <div class="cuerpo">
  <div><img src="../Ressourcer/img/logo_ug.jpeg" alt="Error" style="width: 300px;"> </div>
  <br><br>
  
  <div class="mover2"></div>
  <div class="fecha">

      <p>
      Folio:'.$folio.'<br>
      Irapuato,Gto, '.$fecha_p.'<br>
      Asunto:Solicitud prórroga de cumplimiento de requerimientos de inscripcion</p>
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
    <p>'.$genero_p.' que suscribe C.<b  style="text-transform: uppercase;">'.$nombre_p.'</b>  de la <b>'.$carrera_p.'</b>, me permito solicitar a Usteda de la
    manera más atenta su autorizacion para "la prórroga de cumplimiento de los requisitos de inscripción a un programa educativo" como indica el Artículo 46
    del Reglamento Académico Vigente.
    <br>
    <br>
    (El/Los) requito(s) a solicitar prórroga son:<br>
    '.$requisitos.'
    <br>
    <br>
    Así mismo estoy conciente de la <b>cancelación de mi inscripción en caso de no cumplir</b> con los requisitos en el plazo señalado como indica el Artículo 46
    del Reglamento Académico Vigente.
    <br>
    <br>
    El límite de la prórroga en ningún caso podrá exceder treinta días previos al término del periodo es-colar respectivo.
    
        </p>
</div>
<br>
<div class="despedida"><p>
    Sin otro tema en particular,agradezco la atención que al presente otorga y quedo en espera a una respuesta favorable a mi solicitud</p> </div>

    <div class="mover"></div>
    <br>
    <br>
<div class="firma"><p>
                 Atentamente. <br>
                 <b style="text-transform: uppercase;">'.$nombre_p.'</b> <br>
				Estudiante de<b>  </b>
				de la <b>'.$carrera_p.'</b> </p></div>
                </div>


</body>';
return $formato;
}
