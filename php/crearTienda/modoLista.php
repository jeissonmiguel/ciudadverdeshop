<div id="modolista" name="modolista" style="height:50%;text-overflow: ellipsis;overflow-y: scroll;overflow-x: scroll;padding-bottom: 20px;border-style: solid;border-color: green;">
<?php if(!empty($tienda)){ echo '<div id="hd3" name="hd3" class="col-12 tamaño badge badge-success btn btn-success"><h2 class="text-light">Estos son los productos <br> registrados en <b><br>'; if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }echo'</b> <br>selecciona para editar</h2></div>';} if(!empty($empresa)){ echo '<div id="hd3" name="hd3" class="col-12 tamaño badge badge-info btn btn-info "><h2>Estos son los productos <br>registrados en <b><br>';if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }echo'</b><br> selecciona para editar</h2></div> '; }?>


  <!-- <div id="hd3" name="hd3" class="col-12 tamaño badge badge-success btn btn-success letrat1"><h2>Estos son los productos registrados en <b> <?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></b> selecciona para editar</h2></div> -->
  <?php  

       if(!empty($tienda)){
      $busqueda="SELECT * FROM registroproductos WHERE numRegistroGlobal='$id'";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>Id</b></td>
          <td><b>Registro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Nit</b></td>
          <td><b>Producto</b></td>
          <td><b>Descripcion</b></td>
          <td><b>Embalaje</b></td>          
          <td><b>Cantidad</b></td>
          <td><b>Valor</b></td>
          <td><b>Iva</b></td>
          <td><b>Tiva</b></td>
          <td><b>Descuento</b></td>
          <td><b>Total</b></td>
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
            <td>$row[8]</td>
            <td>$row[9]</td>
            <td>$row[10]</td>
            <td>$row[11]</td> 
            <td>$row[12]</td>                       
            <td><a style='color: blue;' href='../almacenProductos/modificarpro.php?id=". $row[2] ."'>Editar</a></td>
            <td><a style='color: #FF0000;' href='../almacenProductos/borrarpro1.php?id=". $row[2] ."'>Borrar</a></td>
           
            
            
            </tr>\n";
            }
         

            
          echo "</table>\n";  

 } if(!empty($empresa)){
   $busqueda="SELECT * FROM registroproductos WHERE numRegistroGlobal='$id'";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

          echo "<table id='tabla1' border ='20' style='border:10px solid #35AFFA;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>Id</b></td>
          <td><b>Registro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Nit</b></td>
          <td><b>Producto</b></td>
          <td><b>Descripcion</b></td>
          <td><b>Embalaje</b></td>          
          <td><b>Cantidad</b></td>
          <td><b>Valor</b></td>
          <td><b>Iva</b></td>
          <td><b>Tiva</b></td>
          <td><b>Descuento</b></td>
          <td><b>Total</b></td>
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
            <td>$row[8]</td>
            <td>$row[9]</td>
            <td>$row[10]</td>
            <td>$row[11]</td> 
            <td>$row[12]</td>                       
            <td><a style='color: blue;' href='../almacenProductos/modificarpro.php?id=". $row[2] ."'>Editar</a></td>
            <td><a style='color: #FF0000;' href='../almacenProductos/borrarpro1.php?id=". $row[2] ."'>Borrar</a></td>
           
            
            
            </tr>\n";
            }
         

            
          echo "</table>\n";   }
      
    ?>    
         
            
    <br> <br> <br> <br>        
</div>
