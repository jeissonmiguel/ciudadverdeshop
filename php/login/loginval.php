<?php
include("../conexion/conexion.php");
session_start();
// $conexion=mysqli_connect("localhost","root","","citygreen");

$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');

  
$_SESSION['logueado']=$usuario;
$_SESSION['logueado1']=$contrasena;

$busqueda ="SELECT * FROM usuariosclave where usuario ='$usuario' and contrasena ='$contrasena' and tabla ='registrousuario'";
$result = mysqli_query($conexion,$busqueda);



$numero = mysqli_num_rows($result);



$busqueda = "SELECT *FROM registrousuario WHERE documento='$usuario'";
      $nombre = mysqli_query($conexion,$busqueda);
            while ($row = mysqli_fetch_row($nombre)) {          
              $nombre1= $row[5];
              $nombre2= $row[6];
            }
                    
          

if ($numero>0) 
  {
       
    echo "<script>alert('Bienvenido $nombre1 $nombre2 =} Hoy es un gran dia '); window.location='selecionperfil.php'</script>";   
     		
 
  }
  else
  { 	   
  	   
    echo "<script>alert('datos insertados iconrrectamentamente, si no te haz registrado registrate en el link de registrate de la parte inferior en la pagina del login'); window.location='login.php'</script>"; 
		   
  }



                    
 	


?>