<?php
Require "../Model/model_documentos_archivo.php";
function control_documentos($nombre,$carrera,$semestre,$correo,$fecha,$documentos,$archivo){
    $objeto=new modelo_documentos_archivos();
    $resul=$objeto->ingresardatos($nombre,$carrera,$semestre,$correo,$fecha,$documentos,$archivo);
    if($resul==1){
        $datos=1;
        return $datos;
    }else{
        $datos=0;
        return $datos;
    }
    
}


    function obtener_folio(){
        $objeto=new modelo_documentos_archivos();
        $folio=$objeto->obtener_foliom();
        return $folio;}

    

