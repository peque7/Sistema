<?php 
    require('core/core.php');
    require('Conexion.php');
    // $con = Conexion::con();
    // $res = mysqli_query($con,"SELECT * FROM `estados`");
    // print_r(mysqli_fetch_assoc($res));
    // ini_set("display_errors","On");
    // error_reporting(E_ALL);
    // require_once("php/mysql.php");

    // $mysql = new MySQLPDO();
    // $mysql->connect();

    // $result = $mysql->query("SELECT * FROM cliente");

    // foreach ($result as $key => $value) {
    //     print_r($value);
    // }
    session_start(); 
    // $_SESSION["USER"] = "jesus";
    if (isset($_SESSION["USER"]) || true){ 
         if (isset($_GET['view'])) {
            if (file_exists('core/views/'.strtolower($_GET['view']).'/index.php')) {
               include ('core/views/'.strtolower($_GET['view']).'/index.php');
            }
        }else{
            include('core/views/venta/index.php');
        } 
    }else{ 
         include('core/views/session/seccionView.php');
    }  
?>