<?php
Require "../Config/ConfigBD.php";

class modelo_firmantes{
    
    private $conectorBD;
    private $conexion;
    private $instruccion;
    function __construct(){
        $this->conectorBD=new ConfigBD(); 
        $this->conexion=$this->conectorBD->getconexion();
    }

    function ingresar($nombre,$apll_m,$apll_p,$titulo){
        $this->instruccion="insert into tbl_datosfirmante_resp (nombres_datosFirmante_resp,apellido_M,apellido_P,titulo_datosFirmante_resp,activo)values(
            '".$nombre."','".$apll_m."','".$apll_p."','".$titulo."',1)";   
        
        try {
            $re=mysqli_query($this->conexion,$this->instruccion);
            
            
        } catch (Exception $e) {
            throw $e;
            
            
        }


    }

    
}