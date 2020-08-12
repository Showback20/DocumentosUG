<?php

Require "../Model/modelo_firmante.php";
$nombre=$_POST['nombre'];
$apll_m=$_POST['apll_m'];
$apll_p=$_POST['apll_p'];
$titulo=$_POST['titulo'];

$objeto=new modelo_firmantes();
$resul=$objeto->ingresar($nombre,$apll_m,$apll_p,$titulo);
echo "datos guardados";
 














?>
