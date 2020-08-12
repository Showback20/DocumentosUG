<?php

include('../../Controller/metodo_fecha.php');


function obtener_p($nombre,$carrera,$semestre,$fecha_envio,$fecha_respuesta,$ano,$director,$estatus){
$mes_entrega=mes_entrega();
$formato='<body>
    <div class="cuerpo">
  <div><img src="../Ressourcer/img/logo_ug.jpeg" alt="Error" style="width: 300px;"> </div>
  <br><br>
  
  <div class="mover2"></div>
  <div class="fecha">

      <p>
      
      
      Asunto:AUTORIZACION DE INSCRIPCION EXTEMPORÁNEA A-D' .$ano.'</p>
  </div>
  
<div class="director">
    <p><b>C.'.$nombre.'</b><br>

        Presente <br> <br>   </p>
</div>
<br>
<div class="contexto">
    <p>Atendiendo su solicitud recibida el '.$fecha_envio.', concerniente a la autorización de Inscripción
    extemporánea al '.$semestre.'° Semestre del Programa Educativo de '.$carrera.', en el periodo Escolar '.$ano.'. 
    <br>
    <br>
    La Dirección de la División de Ciencias del Capues Irapuato-Salamanca, en base al calendario Académico '.$ano.',<b> a '.$estatus.' la Inscripción Extemporanea</b>
    hasta antes 4 de '.$mes_entrega.' del presente; en el entendido que durante el lapso no obtendrá la calidad de estudiante de la Universidad de Guanajuato.
    <br>
        </p>
</div>
<br>
<div class="despedida"><p>
Agradezco su amable atención y gestión, reiterando las seguridades de mi atenta concideración.
    </p> </div>

    <div class="mover"></div>
    <br>
   <div class="firma"><p>
                 Atentamente. <br>
                 "LA VERDAD OS HARA LIBRES"<br>
                 Irapuato,Gto, '.$fecha_respuesta.'<br>
                 DIRECTOR DE LA DIVISIÓN DE CIENCIAS DE LA VIDA<br>
                 CAMPUS IRAPUATO-SALAMANCA<br>
                 
                 <img src="../Ressourcer/firma/firma.jpg" alt="Error" style="width: 60px; height: 90px;"><br>
				'.$director.'



 <div class="final">
 <p>
    <b>C.c.p.     M.C. Claudia Celic Guzmán Ruiz-Secretaria Académica de la División de Ciencias de la Vida. -Presente</b> <br>
    <b>C.c.p.     Concecutivo.</b>
    </p>
 </div>             
 
 <div class="final2">
 <p>
    Ex Hacienda El Copal,Km 9 Carretera Irapuato-Silao.<br>
    C.P 36824 A.P 311, Irapuato, Gto, México<br>
    Tel. 01(462)6241889
    </p>
 </div>       



</body>';
return $formato;
}
?>
