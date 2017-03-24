<?php 
	class Persona
{
	private $personas;

	public function obtenerPersonas(){
		$consulta = "SELECT * FROM cliente";
		$valores = null;

		$oConectar = new conectorDB; //instanciamos conector
		$this->personas = $oConectar->consultarBD($consulta,$valores);

		return $this->personas;
		// print_r($this->personas);
	} //Termina funcion obtenerPersonas();

	public function registrarPersonas($nombre,$apellido,$edad){
        $registrar = false; //creamos una variable de control
		$consulta = "INSERT INTO personas
					VALUES (:nombre, :apellido, :edad)";

		//VALORES PARA REGISTRO
		$valores = array("nombre"=>$nombre,
						"apellido"=>$apellido,
						"edad"=>$edad);

		$oConexion = new conectorDB; //instanciamos conector
		$registrar = $oConexion->consultarBD($consulta, $valores);

		if($registrar !== false){
			return true;
		}
		else{
			return false;
		}
    } //Termina funcion registrarUsuarios()
}/// TERMINA CLASE USUARIOS ///

// Van en orden a corde el sql
// campo1 = :valor1, campo2 = :valor2;
 ?>