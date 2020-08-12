<?php
Require "../Model/model_documentos.php";
function control_documentos($nombre,$carrera,$semestre,$correo,$fecha,$documentos){
    $objeto=new modelo_documentos();
    $resul=$objeto->ingresardatos($nombre,$carrera,$semestre,$correo,$fecha,$documentos);
    if($resul==1){
        $datos=1;
        return $datos;
    }else{
        $datos=0;
        return $datos;
    }
    
}


    function obtener_folio(){
        $objeto=new modelo_documentos();
        $folio=$objeto->obtener_foliom();
        return $folio;}

    

