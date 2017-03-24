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
	$oDatosPersonas = new Persona;
	$personas_registradas = $oDatosPersonas->obtenerPersonas();

	print_r($personas_registradas);
} catch (Exception $e) {
	echo "Error: ".$e;
}


/* Para registrar Personas */
// $oRegistroPersonas = new Persona;
// $registro = $oRegistroPersonas->registrarPersonas("Juanito","Banana",27);

// if($registro){ echo "Registro Satisfactorio"; }
?>