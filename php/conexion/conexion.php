<?php
   
    $servidor ="localhost";
    $nombreusuario="root";
    $password="80815886mysql";
    $db="ciudadverdeshop";
    $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    if($conexion->connect_error){
      // die("conexion fallida:". $conexion->connect_error);
         }
 
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

  // if ($usuario == "") {
  //     echo "<h5  class='btn-warning'> no estas logueado navegas como invitado  ,que esperas registrate = ) <a href='../registrate/registrate.php'><button class='btn btn-success'> a un click </button></a></h5>";
  //     }else{
  //       echo "<h5 class='btn-warning letrat'style='height:38px'> esta logueado como: ". $usuario."<a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-success'>Finalizar session</button></a><a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-success'></button></a></h5>"; 

  //     } 
  
 
       
           


   // $servidor ="fdb29.awardspace.net";
   //  $nombreusuario="3671841_CiudadVerdeShop";
   //  $password="CiudadVerdeShop80815886";
   //  $db="3671841_ciudadverdeshop";
   //  $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
   //  if($conexion->connect_error){
   //      die("conexion fallida:". $conexion->connect_error);

?>
