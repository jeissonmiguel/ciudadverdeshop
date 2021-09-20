<?php 
  session_start();
  include("../conexion/conexion.php"); 
if (!empty($_SESSION['logueado'])) {  

 $usuario=$_SESSION['logueado'];
 //   if($usuario == null || $usuario = ''){
  // echo "<script>alert('usted no tiene autorizacion');window.location='../login/login.php'</script>";
 //  session_destroy();
  // die();
 //         }else{}
 if ($usuario == "") {
      echo "<h3 class='btn-warning letrat'> no estas logueado navegas como invitado  ,que esperas registrate = ) <a href='../registrate/registrate.php'><button class='btn btn-success'> a un click </button></a></h3>";
      }else{
        echo "<h2 class='btn-warning letrat' style='height:40px;'> esta logueado como: ". $usuario."<a href='../almacenProductos/desloguearte.php'><button style='float:right;' class='btn btn-success'><b>CERRAR SESSION</b></button></a></h2>";     
      }
       
       }else{
        echo "<h3 class='btn-warning letrat'> no estas logueado navegas como invitado  ,que esperas registrate = ) <a href='../registrate/registrate.php'><button class='btn btn-success'> a un click </button></a></h3>";
       }


?>