<?php
if( !headers_sent() && '' == session_id() ) {
session_start();
}
include("../conexion/conexion.php");
  $logueado2 =$_SESSION['logueado'];
  if ($logueado2 == "") {
     echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
     session_destroy();
      echo "<h5 class='btn-warning'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
      }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla Comando</title>
  <meta charset="UTF-8">
  <title>Administrador</title>
  <link rel="stylesheet" href="../../css/administrador/administrador.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/administrador/tablacomando/tablaComando.js"></script>
</head>
 
  <body class="aua" style="padding:20%;zoom:100%; width:100%;height:70%;padding:20px 20px 20px 20px;word-break: break-all;"> 
    
 <br>
 <?php
$Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : ''); 
if ($Busqueda =="") {
  echo'<script>alert("cuadro de busqueda vacio");</script>';
   $Busqueda ="";   
}else{
echo'
 <header style="padding:0% 1% 2% 8%;align-content: center;">
         
          <button style="width:30%;padding:1%"  id="boton12" name="boton12"  class=" badge btn btn-dark bordes">Advance</button>
           <button style="width:30%;padding:1%"  id="boton12" name="boton12"  class=" badge btn btn-dark bordes">Advance</button>
            <button style="width:30%;padding:1%"  id="boton12" name="boton12"  class=" badge btn btn-dark bordes">Advance</button>

  </header>       
    <br><br>';
  }
    ?>

   
<div id="edicion1" name="edicion1">
 <?php
 // include ("../Conexion/conexion.php");
 $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
    
      $busqueda=  "SELECT * FROM usuariosclave";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
        echo '<link rel="stylesheet" href="../../css/administrador/administrador.css">';
        echo '<script src=""></script>';
        echo '<script src=""></script>'; 

     

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";         
          echo"<tr>
          <td><b>numRegistroGlobal</b></td>         
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Contraseña</b></td>
          <td><b>Confirma</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
                   
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[0])
            {
           
           echo"<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
            
            
            </tr>\n";
           }
          else
            {

            }

          }
         

            
          echo "</table>\n";
    ?>
</div>


<div id="edicion1" name="edicion1">
  <?php
 // include ("../Conexion/conexion.php");
 $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
       
      
    
      $busqueda1="SELECT * FROM registrousuario";
      $resulta1 = mysqli_query($conexion,$busqueda1);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                 
          echo"<tr>
          <td><b>Id</b></td>
          <td><b>RegistroUsuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Tipo</b></td>
          <td><b>Documento</b></td>
          <td><b>Nombre1</b></td>
          <td><b>Nombre2</b></td>
          <td><b>Apellido1</b></td>
          <td><b>Apellido2</b></td>
          <td><b>Genero</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($resulta1)) {
             if($Busqueda==$row[4])
            {
           echo"<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            <td>$row[8]</td>
            <td>$row[9]</td>
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            }
          else
            {

            }

          }
         

            
          echo "</table>\n";
    ?>
</div>    

<div id="edicion3" name="edicion3">
  <?php
 // include ("../Conexion/conexion.php");
 $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
       
     
    
      $busqueda="SELECT * FROM registrotienda";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                
          echo"<tr>
          <td><b>NumRegistroTienda</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>          
          <td><b>Rut</b></td>
          <td><b>NumContrato1</b></td>
          <td><b>NombreTienda</b></td>
          <td><b>Seccion</b></td>
          <td><b>Adicional</b></td>          
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[0])
            {
           echo"<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
           
            
            
            </tr>\n";
             }
          else
            {

            }

          }
         

            
          echo "</table>\n";
    ?>
</div> 




</form>

  



</body>

 
</html>       
</body> 
