<?php
// echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}<hr>";
// echo "El nombre del servidor es: {$_SERVER['SERVER_NAME']}<hr>"; 
// echo "Vienes procedente de la página: {$_SERVER['HTTP_REFERER']}<hr>"; 
// echo "Te has conectado usando el puerto: {$_SERVER['REMOTE_PORT']}<hr>"; 
// echo "El agente de usuario de tu navegador es: {$_SERVER['HTTP_USER_AGENT']}<hr>";
// $ip=$_SERVER['REMOTE_ADDR'];
// echo "Tu dirección IP es: $ip<hr>";

// $ip=$_SERVER['REMOTE_ADDR'];
// if($ip=="::1"){

//     $servidor ="localhost";
//     $nombreusuario="root";
//     $password="";
//     $db="ciudadverdeshop";
//     $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
//     if($conexion->connect_error){
//     	// die("conexion fallida:". $conexion->connect_error);
//          }
//    }else{

//     $servidor ="localhost";
//     $nombreusuario="id13902536_root";
//     $password="Colombia2020*-+";
//     $db="id13902536_citygreen";
//     $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
//     if($conexion->connect_error){
//     	die("conexion fallida:". $conexion->connect_error);
//     }
//    } 

   $ip=$_SERVER['REMOTE_ADDR'];
if($ip=="::1"){

    $servidor ="localhost";
    $nombreusuario="root";
    $password="";
    $db="ciudadverdeshop";
    $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    if($conexion->connect_error){
      // die("conexion fallida:". $conexion->connect_error);
         }
   }else{

    $servidor ="localhost";
    $nombreusuario="id15708313_ciudadverdeshop";
    $password="Colombia2020*-+";
    $db="id15708313_ciudadverdeshop1";
    $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    if($conexion->connect_error){
      die("conexion fallida:". $conexion->connect_error);
    }
   } 

   // $servidor ="fdb29.awardspace.net";
   //  $nombreusuario="3671841_CiudadVerdeShop";
   //  $password="CiudadVerdeShop80815886";
   //  $db="3671841_ciudadverdeshop";
   //  $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
   //  if($conexion->connect_error){
   //      die("conexion fallida:". $conexion->connect_error);

?>