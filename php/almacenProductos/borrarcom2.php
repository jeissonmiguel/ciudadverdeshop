<?php
include("../conexion/conexion.php");
  session_start();
  $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');       
        
 	  
 $id=(isset($_GET['id'])    ? $_GET['id']    : '');
 
 $busquedaidcomercio="SELECT * FROM registrotienda WHERE numRegistroTienda='$id'";
  $result = mysqli_query($conexion,$busquedaidcomercio);
 while($row = mysqli_fetch_row($result)){
            $numRegistroGlobal=$row[0];       
            
          }

$busquedaidcomercio1="SELECT * FROM insertimglogo WHERE numRegistroGlobal='$id'";
$result1 = mysqli_query($conexion,$busquedaidcomercio1);
 while($row1 = mysqli_fetch_array($result1)){  
            $image=$row1[4];       
            
          }        
                   
                            $eliminar="DELETE FROM registrotienda WHERE numRegistroTienda='$id'";
                            $mostrareliminar=mysqli_query($conexion,$eliminar); 

                            $eliminar1="DELETE FROM calificacion WHERE numRegistroGlobal='$id'";
                            $mostrareliminar1=mysqli_query($conexion,$eliminar1);

                            $eliminar2="DELETE FROM celular WHERE numRegistroGlobal='$id'";
                            $mostrareliminar2=mysqli_query($conexion,$eliminar2);

                            $eliminar3="DELETE FROM descripcion WHERE numRegistroGlobal='$id'";
                            $mostrareliminar3=mysqli_query($conexion,$eliminar3); 

                            $eliminar4="DELETE FROM direccion WHERE numRegistroGlobal='$id'";
                            $mostrareliminar4=mysqli_query($conexion,$eliminar4);

                            $eliminar5="DELETE FROM email WHERE numRegistroGlobal='$id'";
                            $mostrareliminar5=mysqli_query($conexion,$eliminar5);

                            $eliminar6="DELETE FROM insertimglogo WHERE numRegistroGlobal='$id'";
                            $mostrareliminar6=mysqli_query($conexion,$eliminar6);    

                            $eliminar7="DELETE FROM insertimgproducto WHERE numRegistroGlobal='$id'";
                            $mostrareliminar7=mysqli_query($conexion,$eliminar7);

                            $eliminar8="DELETE FROM paginaweb WHERE numRegistroGlobal='$id'";
                            $mostrareliminar8=mysqli_query($conexion,$eliminar8);

                            $eliminar9="DELETE FROM redsocial WHERE numRegistroGlobal='$id'";
                            $mostrareliminar9=mysqli_query($conexion,$eliminar9);

                            $eliminar10="DELETE FROM registroproductos WHERE numRegistroGlobal='$id'";
                            $mostrareliminar10=mysqli_query($conexion,$eliminar10);

                            $eliminar11="DELETE FROM usuarioclave WHERE numRegistroGlobal='$id'";
                            $mostrareliminar11=mysqli_query($conexion,$eliminar11);
                    
                     $ruta="../../img/archivos/LogoTienda/".$usuario."/".$id."/".$image;
                     unlink($ruta);
                     if(file_exists("../../img/archivos/LogoTienda/".$usuario."/".$id)){
                      rmdir("../../img/archivos/LogoTienda/".$usuario."/".$id);
                      }    

                        
         
          // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarEmpresa.php?id=".$numRegistroGlobal."'</script>";
          echo "<script type='text/javascript'>window.location='modificarestabl.php?id=".$id."'</script>";
          // echo "<script type='text/javascript'>window.location='../crearTienda/ingresarTienda.php'</script>";
          // echo "<script type='text/javascript'>alert('borrado del usuario".$usuario."/".$id')</script>";
                      echo "<script type='text/javascript'>alert('El servidor devolvio  $usuario  $id)</script>";
          
         
            
                    
         
      
?>