   <div  id="empresa" name="empresa">
         <?php  
          ///////////////empresas/////////////////////


           $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal WHERE seccion='$traeid'";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);


          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          
         <td><b>logo</b></td>
          <td><b>NombreTienda</b></td>
          <td><b>Seccion</b></td>          
          <td><b>Ciudad</b></td>
          <td><b>Barrio</b></td>
          <td><b>Direccion</b></td>
          <td><b>cel</b></td>
          <td><b>Whastapp</b></td>
          <td><b>email</b></td>
          <td><b>Descripcion</b></td>
          <td><b>entrar</b></td>
          
          
          
          </tr>\n";

           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
             while($row = mysqli_fetch_row($nombre)){
            echo"<tr>
            
            <td><i><img src='$row[36]' width='200px' heigth='100px'></i></td>
            <td><h3><i class='badge badge-danger col-12'>$row[5]</i></h3></td>
            <td><i>$row[6]</i></td>
            <td><i>$row[19]</i></td>
            <td><i>$row[20]</i></td>
            <td><i><a href='https://www.google.com.co/maps/dir//$row[21]/@4.6390105,-74.1763537,12z?hl=es' target='_blank'>$row[21]</a>
            <td><i>$row[11]</i></td>
            <td><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:80px;heigth:100%'>click</a></i></td>
            <td><i>$row[15]</i></td>
            <td><i>$row[28]</i></td>
            <td><i><a href='mostrarproductos.php?id=". $row[0] ."'><input type='button' name='click' value='click' class='btn btn-success'></a></i></td>
            </tr>\n";
            }  
          echo "</table>\n";  



      
               
         
            
            ?>
	 </div>