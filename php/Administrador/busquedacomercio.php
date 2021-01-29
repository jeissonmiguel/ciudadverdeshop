<?php
  session_start();
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
 <br>
           
         <div class="col-2 float-left"><button id="boton1" name="boton1" class=" badge btn btn-info bordes w-100">Mostrar usuarios</button></div>
          <div class="col-2 float-left"><button id="boton2" name="boton2" class=" badge btn btn-info bordes w-100 ">Mostrar registro de usuario</button></div>
          <div class="col-2 float-left"><button  id="boton3" name="boton3" class=" badge btn btn-info bordes w-100">Mostrar tiendas</button></div>
          <div class="col-2 float-left"><button  id="boton4" name="boton4" class=" badge btn btn-info bordes w-100">Mostrar empresas</button></div>
          <div class="col-2 float-left"><button  id="boton5" name="boton5"  class=" badge btn btn-info bordes w-100">mostrar productos</button></div>
          <div class="col-2 float-left"><button  id="boton11" name="boton11"  class=" badge btn btn-info bordes w-100">pendiente</button></div>
  <br>

          <div class="col-2 float-left"><button id="boton6" name="boton6" class=" badge btn btn-info bordes w-100">Celular</button></div>
          <div class="col-2 float-left"><button id="boton7" name="boton7" class=" badge btn btn-info bordes w-100 ">Email</button></div>
          <div class="col-2 float-left"><button  id="boton8" name="boton8" class=" badge btn btn-info bordes w-100">Intereses</button></div>
          <div class="col-2 float-left"><button  id="boton9" name="boton9" class=" badge btn btn-info bordes w-100">Fecha de registro</button></div>
          <div class="col-2 float-left"><button  id="boton10" name="boton10" class=" badge btn btn-info bordes w-100">Direccion</button></div>
          <div class="col-2 float-left"><button  id="boton12" name="boton12"  class=" badge btn btn-info bordes w-100">pendiente</button></div>
          <!-- <div class="col-2 float-left"><button  id="boton10" name="boton10"  class=" badge btn btn-success bordes w-75">mostra productos</button></div> -->
    <br><br>       
</header>
<body style="background-color: #B0E3F5">
<div id="usuarios" name="usuarios">
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


<div id="registrousuario" name="registrousuario">
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

<div id="registrotienda" name="registrotienda">
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


<div id="registroempresa" name="registroempresa">  
  <?php
 // include ("../Conexion/conexion.php");
 $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
       
     
    
      $busqueda="SELECT * FROM registroempresa";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistroEmpresa</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>NombreEmpresa</b></td>
          <td><b>Nit</b></td>
          <td><b>NumContrato2</b></td>
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


<div id="registroproductos" name="registroproductos">
  <?php
    // include ("../Conexion/conexion.php");
    $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
      
    
      $busqueda="SELECT * FROM registroproductos";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                
          echo"<tr>
          <td><b>Id</b></td>
          <td><b>NumRegistroGlobal</b></td>
          <td><b>NumRegistroProductos</b></td>
          <td><b>Usuario</b></td>
          <td><b>Producto</b></td>
          <td><b>Descripcion</b></td>
          <td><b>Embalaje</b></td>
          <td><b>Valor</b></td>
          <td><b>Iva</b></td>
          <td><b>Tiva</b></td>
          <td><b>Descuento</b></td>
          <td><b>Total</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[1])
            {

          /* if(($nTienda)==$row[2])
              {*/
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
            <td>$row[10]</td>
            <td>$row[11]</td>
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

<div id="celular" name="celular">
  <?php
    // include ("../Conexion/conexion.php");
    $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
      
    
      $busqueda="SELECT * FROM celular";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                
          echo"<tr>
          <td><b>NumRegistroGlobal</b></td>
          <td><b>tabla</b></td>
          <td><b>Usuario</b></td>          
          <td><b>Celular</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[0])
            {

          /* if(($nTienda)==$row[2])
              {*/
           echo"<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>            
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

<div id="email" name="email">
  <?php
    // include ("../Conexion/conexion.php");
    $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
      
    
      $busqueda="SELECT * FROM email";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                
          echo"<tr>
          <td><b>NumRegistroGlobal</b></td>
          <td><b>tabla</b></td>
          <td><b>Usuario</b></td>          
          <td><b>Email</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[0])
            {

          /* if(($nTienda)==$row[2])
              {*/
           echo"<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td> 
            <td>$row[3]</td>            
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


<div id="direccion" name="direccion">
  <?php
    // include ("../Conexion/conexion.php");
    $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
      
    
      $busqueda="SELECT * FROM direccion";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                
          echo"<tr>
          <td><b>NumRegistroGlobal</b></td>
          <td><b>tabla</b></td>
          <td><b>Usuario</b></td>
          <td><b>Ciudad</b></td>
          <td><b>Barrio</b></td>          
          <td><b>direccion</b></td>
          <td><b>Coordenadas</b></td>
          <td><b>Mostrarubicacion</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[0])
            {

          /* if(($nTienda)==$row[2])
              {*/
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

<div id="intereses" name="intereses">
  <?php
    // include ("../Conexion/conexion.php");
    $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
      
    
      $busqueda="SELECT * FROM intereses";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                
          echo"<tr>
          <td><b>Usuario</b></td>
          <td><b>Intereses1</b></td>
          <td><b>Intereses2</b></td>
          <td><b>Intereses3</b></td>
          <td><b>Intereses4</b></td>
          <td><b>Intereses5</b></td>
          <td><b>Intereses6</b></td>
          <td><b>Intereses7</b></td>
          <td><b>Intereses8</b></td>
          <td><b>Intereses9</b></td>
          <td><b>Intereses10</b></td>
          <td><b>Intereses11</b></td>
          <td><b>Intereses12</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[0])
            {

          /* if(($nTienda)==$row[2])
              {*/
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
            <td>$row[10]</td>
            <td>$row[11]</td> 
            <td>$row[12]</td>           
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


<div id="fecha" name="fecha">
  <?php
    // include ("../Conexion/conexion.php");
    $Busqueda = (isset($_REQUEST['Busqueda'])    ? $_REQUEST['Busqueda']    : '');
      
    
      $busqueda="SELECT * FROM fecha";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
           

          echo "<table id='tabla1' border ='20' style='border:10px solid #B0E3F5;' width='100%>\n";
          echo "<td COLSPAN='15'></td>";
                
          echo"<tr>
          <td><b>numregistroGlobal</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>         
          <td><b>fechaDeRegistro</b></td>
          <td><b>Hora</b></td>
          <td><b>Fecha</b></td>          
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
             if($Busqueda==$row[0])
            {

          /* if(($nTienda)==$row[2])
              {*/
           echo"<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>                 
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