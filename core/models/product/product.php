<?php 

	$code    = $_POST['code'];
	$name    = $_POST['name'];
	$length  = $_POST['length'];


	require('php/config.php');
    
    $mysql2 = new Configuracion;

    $mysql = $mysql2->connect();

    $sql = "INSERT INTO articulo VALUES('?','?','?')";
	$res = $mysql->prepare($sql);

	execute($code,$name,$length);
 ?>