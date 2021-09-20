<?php
session_start();
include("../conexion/conexion.php");
if(!empty($_SESSION["id"])){

 $usuario=(isset($_SESSION["id"])    ? $_SESSION["id"]    : ''); 
 $id=$usuario;

 $busqueda="SELECT * FROM registrotienda WHERE numRegistroTienda=$id";
      $result = mysqli_query($conexion,$busqueda);
      while($row = mysqli_fetch_row($result)){

        $tienda =$row[6];
        $_SESSION["tienda"]=$tienda;
        // $tienda1 = $_SESSION["tienda"];

        $numregistrotienda =$row[0];
        $numregistrounico =$row[0];
        $_SESSION["numregistrotienda"]=$numregistrotienda;
        $numregistrotienda = $_SESSION["numregistrotienda"];
         }

      //tarer nombre empresa
      $busqueda1="SELECT * FROM registroempresa WHERE numRegistroEmpresa=$id";
      $result1 = mysqli_query($conexion,$busqueda1);
      while($row = mysqli_fetch_row($result1)){
        $empresa=$row[6];
        $_SESSION["empresa"]=$empresa;
        // $empresa1 = $_SESSION["empresa"];

        $numregistroempresa =$row[0];
        $_SESSION["numregistroempresa"]=$numregistroempresa;
        $numregistroempresa = $_SESSION["numregistroempresa"]; }


   if(!empty($tienda)){ 	

   echo $tienda;  

   echo "<script type='text/javascript'>window.location='../crearTienda/muestraComercioTienda.php?id=".$numregistrotienda."'</script>";}

   if(!empty($empresa)){ 
   	echo $empresa;
    echo "<script type='text/javascript'>window.location='../crearTienda/muestraComercioEmpresa.php?id=".$numregistroempresa."'</script>";}

 }else{echo "<script type='text/javascript'>alert('no esta logueado sera direccionado a todas la secciones');window.location='comercios.php?id=".$empresa."'</script>"; }
 ?>