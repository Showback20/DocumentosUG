<?php
Require "../Config/ConfigBD.php";

class modelo_pago{ //Creacion de la clase modelo pago
    public $nua_m,$nombre_m,$carrera_m,$semestre_m,$correo_m,$fecha_m,$motivo_m; //definicion de las variables necesarias para la query
    private $conectorBD; //variable  con la clase conexion 
    private $conexion; //variable para la conexion 
    private $instruccion;
    function __construct(){
        $this->conectorBD=new ConfigBD(); //objeto de la clase ConfigBD
        $this->conexion=$this->conectorBD->getconexion(); //Pasandoles los parametros a la variable conexion
    }

    function ingresardatos($nua,$nomb,$carrera,$semest,$correo,$fecha,$motivo){ // funcion para insertar datos en la tabla solicitud para prorroga de pago 

        $folio=$this->obtener_foliom(); //llama a la funcion obtener folio para tener el ultimo folio de las solicitudes
        $folio+=1; //se incrementa el folio para que sea un folio unico
        //Intruccion query
        $this->instruccion="insert into tbl_solicitud(solicitante,NUA,semestre,carrera,fecha_solicitud,correo_solicitud,folio_solicitud,
        estatus_solicitud ,observaciones,id_tiposolicitud)values('".$nomb."','".$nua."',".$semest.",'".$carrera."','".$fecha."','".$correo."',".$folio.",'sin estatus','".$motivo."',1)";   
        
        try {
            $re=mysqli_query($this->conexion,$this->instruccion);// se ejecuta el query 
           
            $folio_new=$this->obtener_foliom();
           if($folio_new==$folio){// compara el ultimo folio con el anterior para verificar que se ejecuto la instruccion query correctamente
               $datos=1;
                return $datos; // retorna el valor de 1 para decir que se completo con exito la opetacion

           }else{
               $datos=0;
                return $datos; // retorna el valor 0 para decir que no se pudo completar la operacion
           }
            
            
        } catch (Exception $e) {
            throw $e;
            
            
        }


    }
    function obtener_foliom(){ // la funcion obtener folio para tener el ultimo folio de las solicitudes
        $query="select folio_solicitud from tbl_solicitud ORDER BY id_solicitud DESC LIMIT 1";
        try {
            $re=mysqli_query($this->conexion,$query);
            while($mostrar=mysqli_fetch_array($re)){
                $folio=$mostrar['folio_solicitud'];// se asiga el valor a la variable 
                $folio=intval($folio);//convierte en entero el valor de folio y lo asigna a si mismo 
                return $folio;

            }
            
            
        } catch (Exception $e) {
            throw $e;
            
            
        }



    }
    
}




