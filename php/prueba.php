<?php
/**
 * @author elporfirio.com
 * @copyright 2013
 *
 * #############################
 * Archivo de prueba
 */

//requerimos solo la clase consultas
require_once("class.consultas.php");
// require_once("Persona.php");

/* Para consultar Personas */
try {
	$oConectar = new conectorDB;
	if ($oConectar) {
		$consulta = "SELECT * FROM cliente";

		echo "Conexion exitosa";
	}else{
		echo "No se pudo conectar";
	}
	$oDatosPersonas = new Persona;
	$oDatosPersonas2 = new Persona();
	// $oDatosPersonas3 = new 'Persona';

	$personas_registradas = $oDatosPersonas->obtenerPersonas();

	print_r($oDatosPersonas2);
} catch (Exception $e) {
	echo "Error: ".$e;
}


/* Para registrar Personas */
// $oRegistroPersonas = new Persona;
// $registro = $oRegistroPersonas->registrarPersonas("Juanito","Banana",27);

// if($registro){ echo "Registro Satisfactorio"; }
?>