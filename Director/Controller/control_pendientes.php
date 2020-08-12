<?php
Require "../Model/modelo_pendientes.php";
function llamada(){
    $objeto=new modelo_pendiente();
    $resul=$objeto->retornar();
    return $resul;

} 