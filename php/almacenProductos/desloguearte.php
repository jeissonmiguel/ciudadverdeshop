<?php
 include("../conexion/conexion.php");
 session_start();
 // error_reporting(0);
 $usuario=$_SESSION['logueado'];
   if($usuario == null || $usuario = ''){
  echo "<script>alert('No esta registrado');window.location='../../index.html'</script>";
  session_destroy();
  die();
   }else{    
  echo "<script>alert('Usted acaba de finalizar sessión será dirigido a la pagina principal');window.location='../../index.html'</script>";
  session_destroy();
  die();
         }
   
?>