<section id="modocliente" name="modocliente" class=""> 

<div id="registrotienda" name="registrotienda" > 
 <!--  <div id="hd3" name="hd3" class="col-12  badge badge-success btn btn-warning"><h2 class="letra text-white">Estas en el comercio <b> <?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></b> disfruta de sus productos</h2></div>
 -->
  
   <?php

    if(!empty($numregistrotienda)){  
     if ($numregistrotienda!="") {
     echo '<div id="hd3" name="hd3" class="col-12 btn btn-success border border-dark"><h2 class=" text-white" style="font-size:200%">Estas en la Tienda <b>'; if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; } echo '</b> disfruta de sus productos</h2></div>';
        
     
     include ("../conexion/conexion.php");

    $busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal WHERE numRegistroTienda='$numregistrotienda'";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);
      echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';


         while($row = mysqli_fetch_array($nombre)){         
          echo "<header><div class='col-12 float-left badge badge-success'><!-- <h5>Licor</h5> -->
            <img src='../crearTienda/$row[ruta]' style='width:50%; height:300px;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';><img src='../../img/index/body/actualizacion3/logo.gif'style='width:50%; height:300px; float:left;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';'>
             </div></header>";
           }
            
$busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal WHERE numRegistroTienda='$numregistrotienda'";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);
          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;color:black;font-weight: bold;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
       

        while($row = mysqli_fetch_array($nombre)){
            "<!--falta un echo antes de las comillas para que funcione-->

            <!--<img src='../crearTienda/$row[ruta]' width='200px' heigth='100px'>-->
            <tr>
            <td><b>NombreTienda</b></td>
            <td><h3><i class='badge badge-success col-12'>$row[5]</i></h3></td>
            <td><b>Whastapp</b></td>
            <td><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:80px;heigth:100%'>click</a></i></td>
             </tr>\n
            
          <tr>
          <!--<td><b>logo</b></td>-->
          <td><b>Seccion</b></td>          
          <td><b>Ciudad</b></td>
          <td><b>Barrio</b></td>
          <td><b>Direccion</b></td>
          <td><b>cel</b></td>
          <td><b>telefono</b></td>
          
          <td><b>email</b></td>
          <!--<td><b>Descripcion</b></td>
          <!--<td><b>entrar</b></td>-->           
          </tr>\n


            <tr>
            <td><i>$row[6]</i></td>            
            <td><i>$row[20]</i></td>
            <td><i>$row[21]</i></td>
            <td><i><a href='https://www.google.com.co/maps/dir//$row[22]/@4.6390105,-74.176353,12z?hl=es' target='_blank'>$row[21]</a>           
            <td><i>$row[11]</i></td>
            <td><i>$row[12]</i></td>
            
            <td><i>$row[16]</i></td>
           <!-- <td><i>$row[29]</i></td>
            
            <!--<td><i><a href='mostrarproductos.php?id=". $row[0] ."'><input type='button' name='click' value='click' class='btn btn-success'></a></i></td>-->
            </tr>\n"; 
            }  
          echo "</table>\n";

 }
 } 
           ?> 
  </div>

<br>

<div id="registroproductos" name="registroproductos" class="">
  <?php  
   if(!empty($numregistroempresa)){
    if ($numregistroempresa!="") {
        echo '<div id="hd3" name="hd3" class="col-12 btn btn-info border border-dark"><h2 class=" text-white">Estas en la Empresa <b>'; if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; } echo '</b> disfruta de sus productos</h2></div>';
     // include ("../conexion/conexion.php");

     $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal WHERE numRegistroEmpresa='$numregistroempresa'";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);

       
         while($row = mysqli_fetch_array($nombre)){         
          echo "<header><div class='col-12 float-left badge badge-info'><!-- <h5>Licor</h5> -->
            <img src='../crearTienda/$row[ruta]' style='width:50%; height:300px;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';>
              <img src='../../img/index/body/actualizacion3/logo.gif'style='width:50%; height:300px; float:left;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';'>
             </div></header>";
           }

            $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal WHERE numRegistroEmpresa='$numregistroempresa'";
          


          $nombre = mysqli_query($conexion,$busqueda);
          echo "<table id='tabla1' border ='20' style='border:10px solid #35AFFA;color:black;font-weight: bold;' width='100%'>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
         
        while($row = mysqli_fetch_array($nombre)){
                             
            " <!--falta un echo antes de las comillas para que funcione-->

            <!--<img src='../crearTienda/$row[ruta]' width='200px' heigth='100px'>-->
            <tr>
            <td><b>NombreComercio</b></td>
            <td><h3><i class='badge badge-info col-12'>$row[5]</i></h3></td>
            <td><b>Descripcion que hace el comercio:</b></td>
             <td><i>$row[29]</i></td>
            </tr>\n

            <tr>          
          <td><b>Seccion</b></td>          
          <td><b>Ciudad</b></td>
          <td><b>Barrio</b></td>
          <td><b>Direccion</b></td>
          <td><b>cel</b></td>
          <td><b>Whastapp</b></td>
          <td><b>email</b></td>
          <!--<td><b>Descripcion</b></td>
          <td><b>entrar</b></td>-->
          
          
          
          </tr>\n

            <td><i>$row[6]</i></td>            
            <td><i>$row[20]</i></td>
            <td><i>$row[21]</i></td>
            <td><i><a href='https://www.google.com.co/maps/dir//$row[22]/@4.6390105,-74.1763537,12z?hl=es' target='_blank'>$row[21]</a>           
            <td><i>$row[11]</i></td>
            <td><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:80px;heigth:100%'>click</a></i></td>
            <td><i>$row[16]</i></td>
            <!--<td><i>$row[29]</i></td>-->
            
            <!--<td><i><a href='mostrarproductos.php?id=". $row[0] ."'><input type='button' name='click' value='click' class='btn btn-info'></a></i></td>-->
            </tr>\n"; 
            }  
          echo "</table>\n"; 
            
}
}

      $id=(isset($_GET['id'])    ? $_GET['id']    : '');
      $mc="mce"; 
      $busqueda="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroproducto=insertimgproducto.numRegistroProducto";
      $result = mysqli_query($conexion,$busqueda); 
         
                       

                           
           while($row = mysqli_fetch_array($result)){
            if ($id==$row[1]){
              
              # code...
           if(!empty($tienda)){
            echo"

  <section  class='col-xs-12 col-lg-3 letrat' style='display: inline-block;width:49.5%;height:800px;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;'>

      <table class='egt bg-light text-capitalize' style='width:100%;height:100px;'>

            <caption> <tr style=''>
             <td></td><img src='../almacenProductos/$row[22]' id='imagenPrevisualizacion'style='width:100%;height:400px'></td>
             </tr></caption>

            <tr>
              <th scope='col'>Descripcion:</th>    
              <th style='width:30%;border-radius:0px 20px 0px 20px;'class='text-uppercase'>".$row[4]. "".""." " .$row[5]."</th>
            </tr>

           <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Id'>Id:</label></i></td>
              <td style='width:40%;' class='btn-success'><i><label class='label label-warning'  value='Id'>".$row[2]."</label></i></td>     
            </tr>

            <!--<tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Registro'>Registro Comercio:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Registro'>".$row[1]."</label></i></td>     
            </tr>


            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Usuario'>Registro Producto:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Usuario'>".$row[2]."</label></i></td>     
            </tr>
            -->
            
            <!--  
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Nit'>Usuario:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Nit'>".$row[3]."</label></i></td>     
            </tr>
            -->

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Producto'>Producto:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Producto'>".$row[4]."</label></i></td>     
            </tr>

            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Descripcion'>Descripcion:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Descripcion'>".$row[5]."</label></i></td>     
            </tr>
             -->

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Valor'>Empacado x:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Valor'>".$row[6]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Iva'>Cantidad en unidades:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Iva'>".$row[7]."</label></i></td>     
            </tr>

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Iva'>Valor:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Iva'>".$row[8]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Tiva'>iva:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Tiva'>".$row[9]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Descuento'>Tiva:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Descuento'>".$row[10]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Descuento'>Descuento:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Descuento'>".$row[11]."</label></i></td>     
            </tr>
            -->
             
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning'  value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>

            <!--  <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning'  value='ver'> ver Producto</label></i></td>
              <td style='width:40%' class='btn-success'><i><a href='../crearTienda/productoTienda.php?id=". $row[2] ."'><input type='submit' value='ver' class='btn-success'></a></i></td>     
            </tr> -->

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning'  value='Descuento'> Editar</label></i></td>
              <td style='width:40%' class='btn-success'><i><a href='../almacenProductos/modificarpro.php?id=". $row[2] ."'><input type='submit' value='ingresa' class='btn-success'></a></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning'  value='Descuento'> Borrar</label></i></td>
              <td style='width:40%' class='btn-success'><i><a href='../almacenProductos/borrarpro1.php?id=". $row[2] ."&mc=mce '><input type='submit' value='ejecuta' class='btn-success'></a></i></td>     
            </tr>

            

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning'  value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%' class='btn-success'><i><input disabled type='button' value='Proximamente' class='btn-secondary'></i></td>     
            </tr>

           


             
      </table>
      
  
  </section>";

   }
       if(!empty($empresa)){ 
        echo"

        <section  class='col-xs-12 col-lg-3' style='display: inline-block;width:49.5%;height:800px;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;'>

      <table class='egt bg-light text-capitalize' style='width:100%;height:100px;'>

            <caption> <tr style=''>
             <td></td><img src='../almacenProductos/$row[22]' id='imagenPrevisualizacion'style='width:100%;height:400px'></td>
             </tr></caption>

            <tr>
              <th scope='col'>Descripcion:</th>    
              <th style='width:30%;border-radius:0px 20px 0px 20px;'class='text-uppercase'>".$row[4]. "".""." " .$row[5]."</th>
            </tr>

           <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning' value='Id'>Id:</label></i></td>
              <td style='width:40%;' class='btn-info'><i><label class='label-warning'  value='Id'>".$row[2]."</label></i></td>     
            </tr>

            <!--<tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Registro'>Registro Comercio:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Registro'>".$row[1]."</label></i></td>     
            </tr>


            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Usuario'>Registro Producto:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Usuario'>".$row[2]."</label></i></td>     
            </tr>
            -->
            
            <!--  
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Nit'>Usuario:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Nit'>".$row[3]."</label></i></td>     
            </tr>
            -->

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Producto'>Producto:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Producto'>".$row[4]."</label></i></td>     
            </tr>

            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Descripcion'>Descripcion:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Descripcion'>".$row[5]."</label></i></td>     
            </tr>
             -->

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Valor'>Empacado x:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Valor'>".$row[6]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Iva'>Cantidad en unidades:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Iva'>".$row[7]."</label></i></td>     
            </tr>

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Iva'>Valor:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Iva'>".$row[8]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Tiva'>iva:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Tiva'>".$row[9]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Descuento'>Tiva:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Descuento'>".$row[10]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Descuento'>Descuento:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Descuento'>".$row[11]."</label></i></td>     
            </tr>
            -->
             
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label-warning'  value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label-warning'  value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>

            <!--  <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning'  value='ver'> ver Producto</label></i></td>
              <td style='width:40%' class='btn-info'><i><a href='../crearTienda/productoEmpresa.php?id=". $row[2] ."'><input type='submit' value='ver' class='btn-info'></a></i></td>     
            </tr> -->

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label-warning'  value='Descuento'> Editar</label></i></td>
              <td style='width:40%' class='btn-info'><i><a href='../almacenProductos/modificarpro.php?id=". $row[2] ."'><input type='submit' value='ingresa' class='btn-info'></a></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label-warning'  value='Descuento'> Borrar</label></i></td>
              <td style='width:40%' class='btn-info'><i><a href='../almacenProductos/borrarpro1.php?id=". $row[2] ."&mc=mce'><input type='submit' value='ejecuta' class='btn-info'></a></i></td>     
            </tr>

            

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label-warning'  value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%' class='btn-info'><i><input disabled type='button' value='Proximamente' class='btn-secondary'></i></td>     
            </tr>

           


             
      </table>
      
  
  </section>";

   }

       }

          }
  
    ?>     
   <section>
     
          
            
</div>  