  <div id="modocomercio" name="modocomercio" class="letrat">
  <div id="hd3" name="hd3" class="col-12 tamaño badge badge-warning btn btn-warning letrat1"><h2 class="lead font-weight-bold btn btn-warning letrat1" style="font-size:200%">Estas en modo edicion del comecio <b> <?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></b> interactua con sus opciones</h2></div>
  <?php
 // include ("../Conexion/conexion.php");
       
  if(!empty($tienda)){  
      $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     
      $busqueda="SELECT * FROM registrotienda WHERE numRegistroTienda='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Rut</b></td>
          <td><b>NumContrato1</b></td>
          <td><b>NombreTienda</b></td>
          <td><b>Seccion</b></td>
          <td><b>Profesion</b></td>
          
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          </tr>\n";

           while($row = mysqli_fetch_row($result)){
            echo"<tr>
            <td>$row[0]</td>            
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
           
            <td><a style='color: blue;' href=''>Editar</a></td>
            <td><a style='color: #FF0000;' href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            }
         

            
          echo "</table>\n";  

      }

           $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     if(!empty($empresa)){ 
      $busqueda="SELECT * FROM registroempresa WHERE numRegistroEmpresa='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

          echo "<table id='tabla1' border ='20' style='border:10px solid #35AFFA;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Rut</b></td>
          <td><b>NumContrato1</b></td>
          <td><b>NombreTienda</b></td>
          <td><b>Seccion</b></td>
          <td><b>Profesion</b></td>
          
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          </tr>\n";

           while($row = mysqli_fetch_row($result)){
            echo"<tr>
            <td>$row[0]</td>            
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
           
            <td><a style='color: blue;' href=''>Editar</a></td>
            <td><a style='color: #FF0000;' href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            }
        
         

            
          echo "</table>\n";  

  }
            
            ?>
</div>  
