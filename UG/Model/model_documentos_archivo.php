<?php
Require "../Config/ConfigBD.php";

class modelo_documentos_archivos{
    
    private $conectorBD;
    private $conexion;
    private $instruccion;
    function __construct(){
        $this->conectorBD=new ConfigBD(); 
        $this->conexion=$this->conectorBD->getconexion();
    }

    function ingresardatos($nomb,$carrera,$semestre,$correo,$fecha,$documentos,$archivo){

        $folio=$this->obtener_foliom();
        $folio+=1;
        $this->instruccion="insert into tbl_solicitud(solicitante,semestre,carrera,fecha_solicitud,correo_solicitud,folio_solicitud,
        estatus_solicitud ,observaciones,id_tiposolicitud)values('".$nomb."',".$semestre.",'".$carrera."','".$fecha."','".$correo."',".$folio.",'sin estatus','".$documentos."',2)";   
        
        try {
            $re=mysqli_query($this->conexion,$this->instruccion);
            $folio_new=$this->obtener_foliom();
           if($folio_new==$folio){
               $id=$this->id_solicitud($folio_new); // pide a la funcion, el id del folio correspondiente para usarlo como parametro en el query
               $query="insert into tbl_solicitud_enviada 
               (id_solicitud,nombre_solicitud_enviada,ruta_archivo)values(".$id.",'Documentos 
               para prorroga de requerimientos de inscripcion','".$archivo."')";// Guarda los datos de la imagen en la tabla solicitud_enviada
               $re=mysqli_query($this->conexion,$query);
               $datos=1;
               return $datos;

           }else{
               $datos=0;
                return $datos;
           }
            
            
        } catch (Exception $e) {
            throw $e;
            
            
        }


    }
    function obtener_foliom(){
        $query="select folio_solicitud from tbl_solicitud ORDER BY id_solicitud DESC LIMIT 1";
        try {
            $re=mysqli_query($this->conexion,$query);
            while($mostrar=mysqli_fetch_array($re)){
                $folio=$mostrar['folio_solicitud'];
                $folio=intval($folio);
                return $folio;
           }} catch (Exception $e) {throw $e;      
        }
   }
    function id_solicitud($folio){
        $query="select id_solicitud from tbl_solicitud where folio_solicitud=".$folio."";
        try{
        $re=mysqli_query($this->conexion,$query);
        while($mostrar=mysqli_fetch_array($re)){
            $id=$mostrar['id_solicitud'];
            $id=intval($id);
            return $id;
        }

    }catch (Exception $e) {
        throw $e;  }
    }
    
}




