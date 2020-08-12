<?php
Require "../Model/model_pago.php";//se incluye el modelo dento del control
function control_pago($nua,$nombre,$carrera,$semestre,$correo,$fecha,$motivo){ //funcion para pasar los parametros al modelo
    $objeto=new modelo_pago(); //Objeto de la clase modelo_pago
    $resul=$objeto->ingresardatos($nua,$nombre,$carrera,$semestre,$correo,$fecha,$motivo);//llamada a la funcion ingresar datos
    if($resul==1){// compara el resultado de la consulta a la base de dato
        $datos=1;
        return $datos;
    }else{
        $datos=0;
        return $datos;
    }
    
}


    function obtener_folio(){ //funcion para obtener el ultimo folio que se ingreso a la bd 
        $objeto=new modelo_pago();
        $folio=$objeto->obtener_foliom();// se llama a la funcion para obtener el ultimo folio 
        return $folio; //retorna el resultado de la consulta




}

