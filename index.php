<?php 
    session_start(); 
    require('core/core.php');
    require('php/config.php');
    
    $mysql2 = new Configuracion;
    
    $mysql = $mysql2->connect();

    if (isset($_POST['user']) && isset($_POST['pass'])) {
            $sql = "SELECT * FROM user WHERE user=? AND pass=?";
            $res = $mysql->prepare($sql);

            $res->execute(array($_POST['user'],$_POST['pass']));

            if ($res) {
                 foreach ($res as $value) {
                    $_SESSION["USER"] = $value['user'];
                }
            }else{
                echo "No Se encpontro usuario";
            }
    }
   
   
    
    
    if (isset($_SESSION["USER"])){ 
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