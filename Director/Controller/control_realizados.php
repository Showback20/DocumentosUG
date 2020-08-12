<?php
Require "../Model/modelo_realizados.php";
function llamada(){
    $objeto=new modelo_realizado();
    $resul=$objeto->retornar();
    return $resul;

} 