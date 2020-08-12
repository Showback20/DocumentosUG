<?php


    function fecha_mostrar(){
        date_default_timezone_set('America/Mexico_City');
        $dia=date("N");
        $mes=date("n");
        switch($dia){
            case 1:
                $dia="Lunes";
            break;
            case 2:
                $dia="Martes";
            break;
            case 3:
                $dia="Miercoles";
            break;
            case 4:
                $dia="Jueves";
            break;
            case 5:
                $dia="Viernes";
            break;
            case 6:
                $dia="Sabado";
            break;
            case 7:
                $dia="Domingo";
            break;
            
        
        }
        
        switch($mes){
            case 1:
                $mes="Enero";
            break;
            case 2:
                $mes="Febrero";
            break;
            case 3:
                $mes="Marzo";
            break;
            case 4:
                $mes="Abril";
            break;
            case 5:
                $mes="Mayo";
            break;
            case 6:
                $mes="Junio";
            break;
            case 7:
                $mes="Julio";
            break;
            case 8:
                $mes="Agosto";
            break;
            case 9:
                $mes="Septiembre";
            break;
            case 10:
                $mes="Octubre";
            break;
            case 11:
                $mes="Noviembre";
            break;
            case 12:
                $mes="Diciembre";
            break;
            
        
        }
        
        $fecha=$dia.", ".date("d")." de ".$mes." del ".date("Y");
        return $fecha;




    }
    function carrera_mostrar($carrera){
        switch($carrera){
            case 0:
                $carrera="Licenciatura en Ingeniería en Alimentos";
                break;
            case 1:
                $carrera="Licenciatura en Agronomía";
                break;
            case 2:
                $carrera="Licenciatura en Agronegocíos";
                break;
            case 3:
                $carrera="Licenciatura en Ingeniería Agrónica";
                break;
            case 4:
                $carrera="Licenciatura en Enfermería y Obstetricia";
                break;
            case 5:
                $carrera="Licenciatura en Ingeniería Ambiental";
                break;
            case 6:
                $carrera="Licenciatura en Medicina Veterinaria y Zootecnia";
                break;
            case 7:
                $carrera="Licenciatura en Energías Renovables";
                break;
            case 8:
                $carrera="Licenciatura en Ingeniería Mecánica Agrícola";
                break;
        }
        
        
        return $carrera;


    }

    function genero_mostrar($genero){
    if($genero==0){$genero="La";}else{$genero="El";}
    return $genero;
    }