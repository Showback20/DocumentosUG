<?php
Require "../Config/ConfigBD.php";

class modelo_ver1{
    
    private $conectorBD;
    private $conexion;
    private $instruccion;
    function __construct(){
        $this->conectorBD=new ConfigBD(); 
        $this->conexion=$this->conectorBD->getconexion();
    }

    function retornar($id){
        $this->instruccion="select tbl_solicitud.id_solicitud,tbl_solicitud.solicitante,tbl_solicitud.carrera,tbl_solicitud.semestre,
        tbl_tiposolicitud.nombre_tiposolicitud,tbl_solicitud.fecha_solicitud,
        tbl_solicitud.observaciones,tbl_solicitud.estatus_solicitud from tbl_solicitud inner join tbl_tiposolicitud 
        on tbl_solicitud.id_tiposolicitud=tbl_tiposolicitud.id_tiposolicitud where tbl_solicitud.id_solicitud=".$id."";   
        
        try {
            $re=mysqli_query($this->conexion,$this->instruccion);
            return $re;
            
            
        } catch (Exception $e) {
            throw $e;
            
            
        }


    }

    
}