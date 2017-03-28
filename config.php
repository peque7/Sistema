<?php
	class Configuracion {

		// protected $datahost;
		public connect(){

			if (!$ajustes = parse_ini_file('configuracion.ini', true)) throw new exception ('Que crees No puede abrir el archivo perdon :( pero ayudame revisando la direccion del archivo' . $archivo . '.');
			$controlador = $ajustes["database"]["driver"]; //controlador (MySQL la mayoría de las veces)
			$servidor = $ajustes["database"]["host"]; //servidor como localhost o 127.0.0.1 usar este ultimo cuando el puerto sea diferente
			$puerto = $ajustes["database"]["port"]; //Puerto de la BD
			$basedatos = $ajustes["database"]["schema"]; //nombre de la base de datos

			try{
				return $PDOConexio = new PDO (
											"mysql:host=$servidor;port=$puerto;dbname=$basedatos",
											$ajustes['database']['username'], //usuario
											$ajustes['database']['password'], //constrasena
											array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
											);
				}
			catch(PDOException $e){
					echo "Error en la conexión: ".$e->getMessage();
				} //creo una variable con la conexión									
		}
}
?>