<?php
include("../conexion/conexion.php"); 

          session_start();
       $usuario =$_SESSION['logueado'];       
        
 	
 $id=(isset($_GET['id'])    ? $_GET['id']    : '');
 
 $busquedanumtienda="SELECT * FROM registroproductos WHERE numRegistroProducto='$id'";
  $result = mysqli_query($conexion,$busquedanumtienda);
 while($row = mysqli_fetch_row($result)){
            $numRegistroGlobal=$row[1];       
            
          }
            echo "<script type='text/javascript'>var txt;
            if (confirm(Press a button!')) {
              txt = 'You pressed OK!';
            } else {
              txt = 'You pressed Cancel!';
            }</script>";
          
                            $eliminar="DELETE FROM registroproductos WHERE numRegistroProducto='$id'";
                            $mostrareliminar=mysqli_query($conexion,$eliminar);      

                            $eliminar1="DELETE FROM insertimgproducto WHERE numRegistroProducto='$id'";
                            $mostrareliminar1=mysqli_query($conexion,$eliminar1);

                            $eliminar3="DELETE FROM link WHERE numRegistroGlobal='$id'";
                            $mostrareliminar12=mysqli_query($conexion,$eliminar3);
                              
                          
                         
                        
      
          
                        

          echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$numRegistroGlobal."'</script>";
         
            
                    
         
      
?>