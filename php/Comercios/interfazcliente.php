<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : ''); 
  if ($usuario == "") {
      echo "<div style='height:80px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;'>Navegas como invitado,que esperas registrate !! </h5><a href='../login/login.php'><button class='btn btn-success float-right'>iniciar session</button></a><a href='../registrate/registrate.php'><button class='btn btn-light float-right'>Registrate </button></a></div>";
      }else{
        echo "<div style='height:80px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;'> esta logueado como usuario: ". $usuario."<a href='../almacenProductos/desloguearte.php'></h5><button class='btn btn-danger float-right'>Cerrar</button></a></div>";     
      } 
$id=(isset($_GET['id'])    ? $_GET['id']    : '');
$traeid=$id;

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="../../css/comercios/interfazcliente.css">
  <link rel="stylesheet" href="../..css/letra/letra.css"/> 
  <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/*" />
  <link rel="stylesheet" media="(max-width:1008px)" href="../../css/comercios/interfazclientemovil.css"/>
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

<body class="ba1" style="background-color: #DFFAD6;zoom:100%;" > 
<div><a href="../../index.html"><div class="badge badge-success btn btn-success col-6 "><h5 class="text-light padding letr1">Ir P. Principal</h5></div></a>
<a href="../Comercios/Comercios.php"><div class="badge badge-warning  btn btn-warning float-right col-6"><h5 class="letr1 padding">ir a Secciones</h5></div></a></div>
<br>

 <div id="demo1" class="carousel slide col-12 col-xs-6 col-md-6" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators padding">
          <li data-target="#demo1" data-slide-to="0" class="active"></li>
          <li data-target="#demo1" data-slide-to="1"></li>
          <li data-target="#demo1" data-slide-to="2"></li>

        </ul>
        <div class="carousel-inner ">

<?php  
  // include ("../conexion/conexion.php");
 // echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
 //        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
 //        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
echo'<link rel="shortcut icon" href="img/index/body/Ciudad Verde Shop.gif"/>';
 
  if ($traeid=="Licores") {       
  echo " 
  <!-- <div class='col-12 float-left badge badge-success'> --><!-- <h5>Licor</h5> -->
       <div class='carousel-item active'>
            <img src='../../img/interfazusuario/gif/licores.gif'style='width:100%; height:420px;' onmouseout='this.style.opacity=1;this.filters.alpha.opacity=100;' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity=20;'>
        </div>
        <div class='carousel-item'>
              <img src='../../img/index/body/actualizacion3/publicidad.gif'style='width:100%; height:420px; float:left;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity=100;' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity=20;'>
        </div>      
  <!-- </div> -->
  ";
}
  elseif($traeid=="Panaderia") {
   echo '
   <div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/panaderias.gif" style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
    </div>
    <div class="carousel-item">            
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
    </div>           
  ';
  }

   elseif($traeid=="Comida_Rapidas") {
   echo '<div class="carousel-item active">
    <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/comidas_Rapidas.gif" style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
     <div class="carousel-item">        
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
     </div>          
  ';
  }
   elseif($traeid=="Restaurantes") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/restaurantes.gif" style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
          <div class="carousel-item">     
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>     
  ';
  }
   elseif($traeid=="Asaderos") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/asaderos.gif" style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>  
          <div class="carousel-item">   
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>    

  ';
  }
   elseif($traeid=="Tecnologia") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/tecnologia.gif"style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
          <div class="carousel-item ">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>       
  ';
  }


elseif($traeid=="Supermercados") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/supermercados.gif"style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
          <div class="carousel-item">  
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>     
  ';
  }
  elseif($traeid=="Droguerias") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/droguerias.gif"style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
         </div>   
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
         </div>      
  ';
  }
  elseif($traeid=="Mascotas") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/mascotas.gif.gif
            " style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>  
          <div class="carousel-item ">  
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>     
  ';
  }
  elseif($traeid=="Miscelaneas") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/miscelaneas.gif"style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }
  elseif($traeid=="Profesiones") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/profesiones.gif"style="width:100%; height:420px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }
  elseif($traeid=="Otros_Servicios") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/otros.gif"style="width:100%; height:420px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }
////////////////////////////////////////////

   elseif($traeid=="Gimnasio") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/gimnasio.gif"style="width:100%; height:420px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }

   elseif($traeid=="Ventas_Individuales") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/ventasl.gif"style="width:100%; height:420px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }

   elseif($traeid=="Belleza") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/belleza.gif"style="width:100%; height:420px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }

   elseif($traeid=="Vehiculos") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/vehiculos.gif"style="width:100%; height:420px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }

   elseif($traeid=="Viviendas") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/vivienda.gif"style="width:100%; height:420px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }

   elseif($traeid=="Trueque") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/trueque.gif"style="width:100%; height:420px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:420px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>  
  ';
  }

  
  ?>

   <a class="carousel-control-prev" href="#demo1" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>
</div>      
   
  <br>
  
</a><div class="padding badge badge-success btn btn-success col-6" id="b1" name="b1" style="height: 60px;"><h5 class="display-5 text-light letr1"><img src="../../img/index/footer/tienda.ico" style="width: 50px; height: 35px; border-radius: 50px;"> Click <br>ver  Tiendas</h5></div>
<div class="padding badge badge-info btn btn-info float-left col-6" id="b2" name="b2" style="height: 60px;background-color: #D3D7E3; border: black 1px solid;"><h5 class="display-5 letr1"><img src="../../img/index/footer/edificio.ico" style="width: 50px; height: 35px; border-radius: 50px;"> Click <br>ver  Empresas</h5></div> 



  <div id="tienda" name="tienda" class="letrat">
   <?php       
      
     // include ("../conexion/conexion.php");

     $busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal WHERE seccion='$traeid'";


     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);

        
         

           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
            while($row = mysqli_fetch_array($nombre)){
              // var_dump($nombre);
            echo"<section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;' id='section'>

            <table>

              <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-success'><i><label class='label label-success' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

            <tr>                          
              <td style='width:100%;font-size:90%;text-align: center;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label-success text-uppercase letra' value='Registro' style='font-size:100%;'><i>" .$row[5]. "</i></label></td>       
            </tr>

             
             <a href='../crearTienda/muestraComercioTienda.php?id=". $row[0] ."'><img src='$row[ruta]' id='imagenPrevisualizacion' style='width:100%;height:250px;' title='Dale click para ir a la tienda'></a>
            
             <tr>";
            

            //   <th style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;height:1px;display:inline-block;background-size: cover;'></th>
            //   </th><td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize'>click al icono y hable con nosotros. cel $row[11]</a></i></label></i></td>     
            // </tr>
                       
            echo"
           <!--   <tr>
              <th style='width:20%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Registro'>Numero De telefono fijo</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i>" .$row[12]. "</i></label></td>     
            </tr> -->
                       

            <tr>
              <th style='width:20%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Registro'>Ingrese al comercio:</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i><a href='../crearTienda/muestraComercioTienda.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-warning'></label></i></td>     
            </tr>

           <!--  <tr>
              <th style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Usuario' style='width:40%;'>Descripcion</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize' value='Usuario'><i>" .$row[29]. "</label></i></td>     
            </tr> -->

                        
      </table>
  
  </section>";

           
            }
            $numero = mysqli_num_rows($nombre);
            if ($numero>0) 
         {
       
        //alert('mayor a 0');</script> 
          echo"<section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;' id='section'>

            <table>

              <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-light'><i><label class='label label-light' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

               <tr>                          
                 <td style='width:100%;font-size:90%;text-align: center;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label-light text-uppercase letra' value='Registro' style='font-size:100%;'><i>Registrate</i></label></td>       
               </tr>

             
             <a href='../registrate/registrate.php'><img src='https://www.reginavelasquez.com/wp-content/uploads/boton-registrate-ahora.png'  style='width:100%;height:250px;' title='Dale click para ir a la tienda'></a>
            
             <tr>             
          
                       

            <tr>
              <th style='width:20%;font-size:130%;' class='btn-light'><i><label class='label label-light' value='Registro'>Si Tienes un Comercio Tienda o un producto para empezar a vender empieza ya registrate</label></i></th>
                 
            </tr>

           

                        
      </table>
  
  </section>";  
               
       
        }
        else
        {      
            
         //alert('sin datos');</script>";
          echo"<section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;' id='section'>

            <table>

              <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-light'><i><label class='label label-light' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

               <tr>                          
                 <td style='width:100%;font-size:90%;text-align: center;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label-light text-uppercase letra' value='Registro' style='font-size:100%;'><i>Registrate</i></label></td>       
               </tr>

             
             <a href='../registrate/registrate.php'><img src='https://media.istockphoto.com/photos/start-line-on-the-road-ahead-disappearing-into-the-distance-picture-id1140983360?k=20&m=1140983360&s=170667a&w=0&h=8KA5J_5eNvZUcs7eaW1obwuy3w0RfAeFsSM3XxOY0RQ='  style='width:100%;height:250px;' title='Dale click para ir a la tienda'></a>
            
             <tr>             
          
                       

            <tr>
              <th style='width:20%;font-size:130%;' class='btn-light'><i><label class='label label-light' value='Registro'>No hay nada Se el primero  empieza ya registrate</label></i></th>
                 
            </tr>

           

                        
      </table>
  
  </section>";  
               
               
        }



                 ?> 
          </div>

          <div  id="empresa" name="empresa" class="letrat">
         <?php  
          ///////////////empresas/////////////////////


           $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal WHERE seccion='$traeid'";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

   
           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
             while($row = mysqli_fetch_row($nombre)){
            echo"<section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;background='../crearTienda/$row[37]>
           
            <table>

             <tr>
              <td style='width:100%;text-align: center;background-color: #D3D7E3;' colspan='2' class='btn-info'><i><label class='label label-info' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

            <tr>                          
              <td style='width:100%;font-size:90%;text-align: center;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label-success text-uppercase letra' value='Registro' style='font-size:100%;'><i>" .$row[5]. "</i></label></td>       
            </tr>

            <!--  <tr>                          
              <td style='width:100%;font-size:90%;text-align: center;background-color: #D3D7E3;' colspan='2' class='btn-light'><i><label class='label-success text-uppercase letra' value='Registro' style='font-size:100%;'><i>" .$row[29]. "</i></label></td>       
            </tr> -->

             
             <a href='../crearTienda/muestraComercioEmpresa.php?id=". $row[0] ."'><img src='$row[37]' id='imagenPrevisualizacion' style='width:100%;height:250px;' title='Dale click para ir a la empresa'></a>
             <tr> ";
               


            //   <th style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;'></th>
            //   </th><td style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info text-capitalize'>click al icono y hable con nosotros. cel $row[11]</a></i></label></i></td>     
            // </tr>
                       
            echo"
            <!--  <tr>
              <th style='width:20%;font-size:130%;background-color: #D3D7E3;' class='btn-info'><i><label class='label label-info' value='Registro'>Numero De telefono fijo</label></i></th>
              <td style='width:40%;font-size:130%;background-color: #D3D7E3;' class='btn-info'><i><label class='label label-info text-capitalize' value='Registro'><i>" .$row[12]. "</i></label></td>     
            </tr> -->
                       

            <tr>
              <th style='width:20%;font-size:130%;background-color: #D3D7E3;' class='btn-info'><i><label class='label label-info' value='Registro'>Ingrese al comercio:</label></i></th>
              <td style='width:40%;font-size:130%;background-color: #D3D7E3;' class='btn-info'><i><label class='label label-info text-capitalize' value='Registro'><i><a href='../crearTienda/muestraComercioEmpresa.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-warning'></label></i></td>     
            </tr>
             
             <!--
            <tr>
              <th style='width:40%;font-size:130%;background-color: #D3D7E3;' class='btn-info'><i><label class='label label-info' value='Usuario' style='width:40%;'>Descripcion</label></i></th>
              <td style='width:40%;font-size:130%;background-color: #D3D7E3;' class='btn-info'><i><label class='label label-info text-capitalize' value='Usuario'><i>" .$row[29]. "</label></i></td>     
            </tr>
             -->
                        
      </table>
  
  </section>
  ";
  



      
        
            }

             $numero = mysqli_num_rows($nombre);
            if ($numero>0) 
         {
       
        //alert('mayor a 0');</script> 
          echo"<section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;' id='section'>

            <table>

              <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-light'><i><label class='label label-light' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

               <tr>                          
                 <td style='width:100%;font-size:90%;text-align: center;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label-light text-uppercase letra' value='Registro' style='font-size:100%;'><i>Registrate</i></label></td>       
               </tr>

             
             <a href='../registrate/registrate.php'><img src='https://www.reginavelasquez.com/wp-content/uploads/boton-registrate-ahora.png'  style='width:100%;height:250px;' title='Dale click para ir a la tienda'></a>
            
             <tr>             
          
                       

            <tr>
              <th style='width:20%;font-size:130%;' class='btn-light'><i><label class='label label-light' value='Registro'>Si Tienes un Comercio Empresa o un producto para empezar a vender empieza ya registrate</label></i></th>
                 
            </tr>

           

                        
      </table>
  
  </section>";  
               
       
        }
        else
        {      
            
         //alert('sin datos');</script>";
          echo"<section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;' id='section'>

            <table>

              <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-light'><i><label class='label label-light' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

               <tr>                          
                 <td style='width:100%;font-size:90%;text-align: center;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label-light text-uppercase letra' value='Registro' style='font-size:100%;'><i>Registrate</i></label></td>       
               </tr>

             
             <a href='../registrate/registrate.php'><img src='https://media.istockphoto.com/photos/start-line-on-the-road-ahead-disappearing-into-the-distance-picture-id1140983360?k=20&m=1140983360&s=170667a&w=0&h=8KA5J_5eNvZUcs7eaW1obwuy3w0RfAeFsSM3XxOY0RQ='  style='width:100%;height:250px;' title='Dale click para ir a la tienda'></a>
            
             <tr>             
          
                       

            <tr>
              <th style='width:20%;font-size:130%;' class='btn-light'><i><label class='label label-light' value='Registro'>No hay nada Se el primero  empieza ya registrate</label></i></th>
                 
            </tr>

           

                        
      </table>
  
  </section>";  
               
               
        } 
            
            ?>
   </div>

</body>
</html> 