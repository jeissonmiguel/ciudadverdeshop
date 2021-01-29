<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : ''); 
  if ($usuario == "") {
      echo "<h5 class='btn-warning letrat1'> no estas logueado navegas como invitado  ,que esperas registrate = ) <a href='../registrate/registrate.php'><button class='btn btn-success'> a un click </button></a></h5>";
      }else{
        echo "<h5 class='btn-warning letrat1'style='height:38px'> esta logueado como: ". $usuario."<a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-danger'>Cerrar sesión</button></a><a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-danger'></button></a></h5>";     
      } 
$id=(isset($_GET['id'])    ? $_GET['id']    : '');
$traeid=$id;

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/> 
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <link rel="stylesheet" href="../../css/comercios/interfazcliente.css">  
<link rel="stylesheet" href="../../css/comercios/mostrarproductos.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>

     <!-- javascript -->
  <script src="../../js/interfazcliente/interfazcliente.js"></script>      
  
 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
   
  <title>Interfaz</title>
</head>

<body class="col-12 ba1" style="background-color: #DFFAD6; width:100%;"> 
<a href="../../index.html"><div class="padding badge badge-success btn btn-success col-6 letrat1"><h3 class="display-5 letrat1">Ciudad Verde Shop</h3></div></a>
<a href="../Comercios/Comercios.php"><div class="padding badge badge-warning  btn btn-warning float-right col-6 letrat1"><h3 class="letrat1">Volver a todas la secciones</h3></div></a>
<br> 
<?php  
  // include ("../conexion/conexion.php");
 // echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
 //        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
 //        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
echo'<link rel="shortcut icon" href="img/index/body/Ciudad Verde Shop.gif"/>';
 
 if ($traeid=="Licores") {       
  echo "<div class='col-12 float-left badge badge-success'><!-- <h5>Licor</h5> -->
            <img src='../../img/interfazusuario/gif/licores.gif'style='width:50%; height:300px;' onmouseout='this.style.opacity=1;this.filters.alpha.opacity=100;' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity=20;'>
              <img src='../../img/index/body/actualizacion3/publicidad.gif'style='width:50%; height:300px; float:left;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity=100;' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity=20;'>
  </div>";
}
  elseif($traeid=="Panaderia") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/panaderias.gif" style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }

   elseif($traeid=="Comida_Rapidas") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/comidas Rapidas.gif" style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
   elseif($traeid=="Restaurantes") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/restaurantes.gif" style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
   elseif($traeid=="Asaderos") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/asaderos.gif" style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
   elseif($traeid=="Tecnologia") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/tecnologia.gif"style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }


elseif($traeid=="Supermercados") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/supermercados.gif"style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
  elseif($traeid=="Droguerias") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/droguerias.gif"style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
  elseif($traeid=="Mascotas") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/mascotas.gif"style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
  elseif($traeid=="Miscelaneas") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/miscelaneas.gif"style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
  elseif($traeid=="Profesiones") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/profesiones.gif"style="width:50%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
  elseif($traeid=="Otros_Servicios") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/otros.gif"style="width:50%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }
////////////////////////////////////////////

   elseif($traeid=="Gimnasio") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/gimnasio.gif"style="width:50%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }

   elseif($traeid=="Ventas_Individuales") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/ventasl.gif"style="width:50%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }

   elseif($traeid=="Belleza") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/belleza.gif"style="width:50%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }

   elseif($traeid=="Vehiculos") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/vehiculos.gif"style="width:50%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }

   elseif($traeid=="Viviendas") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/vivienda.gif"style="width:50%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }

   elseif($traeid=="Trueque") {
   echo '<div class="col-12 float-left badge badge-success"><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/trueque.gif"style="width:50%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:50%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;"> 
  </div>';
  }

  
  ?>
   
  <br><br><br><br> 
  <!-- <div class="padding badge badge-info btn btn-info float-right col-6 letrat1" id="b2" name="b2"><h3 class="display-5"><img src="../../img/index/body/actualizacion1/mouse.jpg" style="width: 50px; height: 35px; border-radius: 50px;"> Click --><!-- para ver  Empresas</h3></div>  --> -->
</a><div class="padding badge badge-success btn btn-success col-12 letrat1" id="b1" name="b1"><h3 class="letrat1"><img src="../../img/index/body/actualizacion1/mouse.jpg" style="width: 50px; height: 35px; border-radius: 50px;"> Click --> Catalogo</h3></div>



  <div id="Productoindividual" name="Productoindividual" class="letrat">
   <?php       
      
     // include ("../conexion/conexion.php");

     $busqueda= "SELECT * FROM registroproductoindividual INNER JOIN celular ON registroproductoindividual.numRegistroProductoindividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoindividual=email.numRegistroGlobal INNER JOIN direccion ON registroproductoindividual.numRegistroProductoindividual=direccion.numRegistroGlobal INNER JOIN descripcion ON registroproductoindividual.numRegistroProductoindividual=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoindividual=insertimglogo.numRegistroGlobal  WHERE seccion='$traeid'";


     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);

        
         

           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
            while($row = mysqli_fetch_row($nombre)){
              // var_dump($nombre);
            echo" 

           <section class='ajuste' id='section' style='display:inline-block;'>
            <table>
             <p> </p>
             <tr>
              <td style='width:20%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Registro'>Nombre del servicio ó Producto</label></i></td>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-uppercase' value='Registro'><i>" .$row[5]. "</i></label></td>     
            </tr>

             
            <!--  <a href='../crearTienda/productoTienda.php?id=". $row[0] ."&md=md'><img src='$row[37]' id='imagenPrevisualizacion' style='width:100%;height:250px;'></a> -->
            <img src='../crearTienda/$row[37]' id='imagenPrevisualizacion' style='width:100%;height:250px;'>

             <tr>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[12]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;'></td>
              </td><td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize'>click al icono y hable con el vendedor</a></i></label></i></td>     
            </tr>

            
            
             <tr>
              <td style='width:20%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Registro'>Numero De telefono</label></i></td>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i>" .$row[12]. "</i></label></td>     
            </tr>
                       

           <!--  <tr>
              <td style='width:20%;' class='btn-success'><i><label class='label label-success' value='Registro'>Ingrese al comercio:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i><a href='mostrarproductos.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-warning'></label></i></td>     
            </tr> -->

            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;font-size:130%;' class='btn-success'><i><label class='label label-warning' value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[6]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success ' value='Usuario' style='height:100px;text-align:center;'>Descripcion</label></i></td>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize barra' value='Usuario'><i>" .$row[29]. "</label></i></td>     
            </tr>

                        
      </table>
  
  </section>";

           
            }  
                 ?> 
          </div>

       
</body>
</html> 