<?php
class ConfigBD
{
	function getConexion()
	{
		$archivo = 'configuracion.ini';
		if (!$ajustes = parse_ini_file($archivo, true)) {
			throw new exception ('No se puede abrir el archivo ' . $archivo . '.');
		}
		$servidor = $ajustes["nombreparametros"]["host"]; //servidor como localhost o 127.0.0.1 usar este ultimo cuando el puerto sea diferente
		$basedatos = $ajustes["nombreparametros"]["basedatos"]; //contrasenia del usuario
		$puerto = $ajustes["nombreparametros"]["port"]; //Puerto de la BD
		$usuario = $ajustes["nombreparametros"]["username"]; //nombre de la base de datos
		$contrasenia = $ajustes["nombreparametros"]["password"]; //contrasenia del usuario
		try {
            $conexionMysqli = new mysqli($servidor, $usuario, $contrasenia, $basedatos);
            if ($conexionMysqli->connect_errno) {
                echo "Falló la conexión con MySQL: (" . $conexionMysqli->connect_errno . ") " . $conexionMysqli->connect_error;
                throw new exception ('No se pudo generar conexión con la base de datos.');
            } else {
                return $conexionMysqli;
            }
        } catch (Exception $e) {
            throw e;
        }
    }

    
}
?>