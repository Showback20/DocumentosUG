<?php
Require "../Config/ConfigBD.php";

class modelo_acp{
    
    private $conectorBD;
    private $conexion;
    private $instruccion;
    function __construct(){
        $this->conectorBD=new ConfigBD(); 
        $this->conexion=$this->conectorBD->getconexion();
    }

    function aceptar($id,$estatus){
        $this->instruccion="update tbl_solicitud set estatus_solicitud='".$estatus."' where id_solicitud=".$id."";   
        
        try {
            $re=mysqli_query($this->conexion,$this->instruccion);

            $qury="select * from tbl_solicitud where id_solicitud=".$id."";
            $regreso=mysqli_query($this->conexion,$qury);
            return $regreso;
            
            
        } catch (Exception $e) {
            throw $e;
            
            
        }


    }

    function director(){
        $query="select * from tbl_datosfirmante_resp where activo=1";
        try {
            $re=mysqli_query($this->conexion,$query);
            $nombre;
            while($mostrar=mysqli_fetch_array($re)){
                $nombre=$mostrar['titulo_datosFirmante_resp'];
                $nombre=$nombre.".".$mostrar['nombres_datosFirmante_resp'];
                $nombre=$nombre." ".$mostrar['apellido_M'];
                $nombre=$nombre." ".$mostrar['apellido_P'];
                return $nombre;


            }
            
            
        } catch (Exception $e) {
            throw $e;
            
            
        }

    }

    
}