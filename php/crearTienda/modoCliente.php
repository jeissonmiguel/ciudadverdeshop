<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="../../css/comercios/interfazcliente.css"> 
  <link rel="stylesheet" href="../../css/letra/letra.css"/> 
  <link rel="stylesheet" media="(max-width:1008px)" href="../../css/crearTienda/ingresarTiendaMovil.css"/>
  <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
 <!--  <link rel="stylesheet" href="../../css/comercios/mostrarproductos.css">  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <!-- javascript -->
  <script src="../../js/interfazcliente/interfazcliente.js"></script>      
  
 <!-- Bootstrap -->
    
   
  <title>Interfaz</title>
</head>
<section id="modocliente" name="modocliente" class=""> 

<div id="registrotienda" name="registrotienda" > 
   
   <?php

    if(!empty($numregistrotienda)){  
     if ($numregistrotienda!="") {
     echo '<div id="hd3" name="hd3" class="col-12 btn btn-success border border-dark"><h2 class="text-white" style="font-size:130%;">Estas en la Tienda <b>'; if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; } echo '</b> disfruta de sus productos</h2></div>';
        
     
     /*include ("../conexion/conexion.php");*/

    $busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal WHERE numRegistroTienda='$numregistrotienda'";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);
      // echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
      //   echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
      //   echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';


         while($row = mysqli_fetch_row($nombre)){         
          echo "<header><div class='col-12 float-left badge badge-success'><!-- <h5>Licor</h5> -->
            <a href='../crearTienda/muestraComercioTienda.php?id=". $row[0] ."'><img src='../crearTienda/$row[37]' style='width:50%; height:300px;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';></a><img src='../../img/index/body/actualizacion3/logo.gif'style='width:50%; height:300px; float:left;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';'value=''>
             </div></header>";
           }
            
$busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal WHERE numRegistroTienda='$numregistrotienda'";
     
   
 }
 } 
           ?> 
  </div>

<br>

<div id="registroproductos" name="registroproductos" class="">
  <?php  
   if(!empty($numregistroempresa)){
    if ($numregistroempresa!="") {
        echo '<div style="background-color:#D3D7E3;"id="hd3" name="hd3" class="col-12 btn btn-dark border border-dark"><h1 class="text-dark" style="font-size:130%;">Estas en la Empresa <b>'; if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; } echo '</b> disfruta de sus productos</h1></div>';
  
     $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal WHERE numRegistroEmpresa='$numregistroempresa'";
     
     $nombre = mysqli_query($conexion,$busqueda);


          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';

         while($row = mysqli_fetch_row($nombre)){         
          echo "<header><div class='col-12 float-left badge badge-dark'><!-- <h5>Licor</h5> -->
            <a href='../crearTienda/muestraComercioEmpresa.php?id=". $row[0] ."'><img src='../crearTienda/$row[37]' style='width:50%; height:300px;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';></a>
              <img src='../../img/index/body/actualizacion3/logo.gif'style='width:50%; height:300px; float:left;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity='100';' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity='20';'>
             </div></header>";
           }

            $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal WHERE numRegistroEmpresa='$numregistroempresa'";
                  
}
}

      $id=(isset($_GET['id'])    ? $_GET['id']    : '');
      $mc="mc";
      $busqueda="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroproducto=insertimgproducto.numRegistroProducto";
      $result = mysqli_query($conexion,$busqueda); 
           
          
               

          $link='../../img/index/locales/gif/supermercados.png';
          // $link='../../img/index/locales/gif/$row[18]';
          if(!empty($tienda)){ echo "<div  class='col-12 btn btn-success border border-dark'><h2 class='text-white' style='font-size:150%;'>Productos</h2></div>"; } if(!empty($empresa)){ echo "<div style='background-color:#D3D7E3;' class='col-12 btn  border border-dark'><h2 class='text-dark' style='font-size:150%;'>Productos</h2></div>"; }
                 
           while($row = mysqli_fetch_row($result)){
            if ($id==$row[1]){
              # code...
           
           if(!empty($tienda)){ 
            echo"   
  </section>

    <section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;font-size: 100%;'>
            <br>


      <table class='egt bg-light text-capitalize' style='width:100%;height:100px;'>

            <caption> <tr style=''>
            <a href='../crearTienda/productoTienda.php?id=". $row[2] ."'>
             <td></td><img src='../almacenProductos/$row[22]' id='imagenPrevisualizacion'style='width:100%;height:400px'></td>
            </a>
             </tr></caption>

            <tr>
              <th scope='col'>Descripcion:</td>    
              <th style='width:30%;height:100px;border-radius:0px 20px 0px 20px;'class='text-uppercase'>".$row[4]. "".""." " .$row[5]."</td>
            </tr>

           <!-- <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Id'>Id:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' Style='text-align:center;' value='Id'>".$row[2]."</label></i></td>     
            </tr>

           <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Registro'>Registro Comercio:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Registro'>".$row[1]."</label></i></td>     
            </tr>


            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'>Registro Producto:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Usuario'>".$row[2]."</label></i></td>     
            </tr>
            -->
            
            <!--  
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Nit'>Usuario:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Nit'>".$row[3]."</label></i></td>     
            </tr>
            -->

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Producto'>Producto:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Producto'>".$row[4]."</label></i></td>     
            </tr>

            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descripcion'>Descripcion:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Descripcion'>".$row[5]."</label></i></td>     
            </tr>
            

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Valor'>Empacado x:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Valor'>".$row[6]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Iva'>Cantidad en unidades:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Iva'>".$row[7]."</label></i></td>     
            </tr>
             -->

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Iva'>Valor:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Iva'>".$row[8]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>iva:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Tiva'>".$row[9]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Tiva:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Descuento'>".$row[10]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Descuento:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Descuento'>".$row[11]."</label></i></td>     
            </tr>
            -->
             
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%;text-align:center;'><h2><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></h2></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='ver'> ver Producto</label></i></td>
              <td style='width:40%;text-align:center;'><i><a href='../crearTienda/productoTienda.php?id=". $row[2] ."&mc=mc'><input type='submit' value='Ver Detalles'></a></i></td>     
            </tr>         

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%;text-align:center;'><i><input disabled type='button' value='Proximamente' class='btn-secondary'></i></td>     
            </tr>

           


             
      </table>
      
  
  </section>";





       }
       if(!empty($empresa)){ 
        echo"

  
        <section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;font-size: 100%;'>
            <br>


      <table class='egt bg-light text-capitalize' style='width:100%;height:100px;'>

            <caption> <tr style=''>
            <a href='../crearTienda/productoEmpresa.php?id=". $row[2] ."'>
             <td></td><img src='../almacenProductos/$row[22]' id='imagenPrevisualizacion'style='width:100%;height:400px'></td>
            </a>
             </tr></caption>

            <tr>
              <th scope='col'>Descripcion:</td>    
              <th style='width:30%;height:100px;border-radius:0px 20px 0px 20px;'class='text-uppercase'>".$row[4]. "".""." " .$row[5]."</td>
            </tr>

           <!-- <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Id'>Id:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' Style='text-align:center;' value='Id'>".$row[2]."</label></i></td>     
            </tr>

           <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Registro'>Registro Comercio:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Registro'>".$row[1]."</label></i></td>     
            </tr>


            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'>Registro Producto:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Usuario'>".$row[2]."</label></i></td>     
            </tr>
            -->
            
            <!--  
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Nit'>Usuario:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Nit'>".$row[3]."</label></i></td>     
            </tr>
            -->

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Producto'>Producto:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Producto'>".$row[4]."</label></i></td>     
            </tr>

            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descripcion'>Descripcion:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Descripcion'>".$row[5]."</label></i></td>     
            </tr>
            

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Valor'>Empacado x:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Valor'>".$row[6]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Iva'>Cantidad en unidades:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Iva'>".$row[7]."</label></i></td>     
            </tr>
             -->

            <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Iva'>Valor:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Iva'>".$row[8]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>iva:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Tiva'>".$row[9]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Tiva:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Descuento'>".$row[10]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Descuento:</label></i></td>
              <td style='width:40%;text-align:center;'><i><label class='label label-warning' value='Descuento'>".$row[11]."</label></i></td>     
            </tr>
            -->
             
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%;text-align:center;'><h2><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></h2></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning'  value='ver'> ver Producto</label></i></td>
              <td style='width:40%;text-align:center;'><i><a href='../crearTienda/productoEmpresa.php?id=". $row[2] ."&mc=mc'><input type='submit' value='Ver Detalles'></a></i></td>     
            </tr>         

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%;text-align:center;'><i><input disabled type='button' value='Proximamente' class='btn-secondary'></i></td>     
            </tr>

           


             
      </table>
      
  
  </section>";

       } 
    }
    } 
  
    ?>     
   <section>
     
          
            
</div>  
</html>