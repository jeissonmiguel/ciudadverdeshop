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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="../../css/comercios/interfazcliente.css">  
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

<body class="ba1" style="background-color: #DFFAD6;"> 
<div><a href="../../index.html"><div class="padding badge badge-success btn btn-success col-6 "><h3 class="display-5 letrat1">Ciudad Verde Shop</h3></div></a>
<a href="../Comercios/Comercios.php"><div class="padding badge badge-warning  btn btn-warning float-right col-6"><h3 class="display-5 letrat1">Volver a todas la secciones</h3></div></a></div>
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
              
    
  
  </div>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-eu.amazon-adsystem.com/e/cm?ref=tf_til&t=ciudadaverde1-21&m=amazon&o=30&p=8&l=as1&IS1=1&asins=B089WC6HCK&linkId=4b6632b1ccbc60a3dfdf11f5f468daa5&bc1=FFFFFF&amp;lt1=_top&fc1=333333&lc1=0066C0&bg1=FFFFFF&f=ifr">
    </iframe>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-eu.amazon-adsystem.com/e/cm?ref=tf_til&t=ciudadaverde1-21&m=amazon&o=30&p=8&l=as1&IS1=1&asins=B07Y179QD8&linkId=2fc61a3dabdd028e0ec49f4ca801bae5&bc1=FFFFFF&amp;lt1=_top&fc1=333333&lc1=0066C0&bg1=FFFFFF&f=ifr">
    </iframe>';
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
   
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="padding badge badge-info btn btn-info float-right col-6" id="b2" name="b2"><h3 class="display-5 letrat1"><img src="../../img/index/body/actualizacion1/mouse.jpg" style="width: 50px; height: 35px; border-radius: 50px;"> Click -->para ver  Empresas</h3></div> 
</a><div class="padding badge badge-success btn btn-success col-6" id="b1" name="b1"><h3 class="display-5 letrat1"><img src="../../img/index/body/actualizacion1/mouse.jpg" style="width: 50px; height: 35px; border-radius: 50px;"> Click -->para ver  Tiendas</h3></div>



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
            while($row = mysqli_fetch_row($nombre)){
              // var_dump($nombre);
            echo"
                <section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;' id='section'>

            <table>

              <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-success'><i><label class='label label-success' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

            <tr>                          
              <td style='width:100%;font-size:90%;text-align: center;' colspan='2' class='btn-light'><i><label class='label-success text-uppercase letra' value='Registro' style='font-size:130%;'><i>" .$row[5]. "</i></label></td>       
            </tr>

             
             <a href='mostrarproductos.php?id=". $row[0] ."'><img src='$row[36]' id='imagenPrevisualizacion' style='width:100%;height:250px;'></a>
             <tr>
              <th style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;'></th>
              </th><td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize'>click al icono y hable con nosotros</a></i></label></i></td>     
            </tr>

            
            
             <tr>
              <th style='width:20%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Registro'>Numero De telefono</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i>" .$row[11]. "</i></label></td>     
            </tr>
                       

            <tr>
              <th style='width:20%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Registro'>Ingrese al comercio:</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i><a href='mostrarproductos.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-warning'></label></i></td>     
            </tr>

            <tr>
              <th style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Usuario' style='width:40%;'>Descripcion</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success text-capitalize' value='Usuario'><i>" .$row[28]. "</label></i></td>     
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
            echo"   




             <section class='sectiontamano' style='display: inline-block;border-style: solid;
            border-width: 3px;background-color:white;font-size: 100%;background='../crearTienda/$row[36]';'>

            <table>

             <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-info'><i><label class='label label-info' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

            <tr>                          
              <td style='width:100%;font-size:90%;text-align: center;' colspan='2' class='btn-light'><i><label class='label-success text-uppercase letra' value='Registro' style='font-size:130%;'><i>" .$row[5]. "</i></label></td>       
            </tr>

             
             <a href='mostrarproductos.php?id=". $row[0] ."'><img src='$row[36]' id='imagenPrevisualizacion' style='width:100%;height:250px;'></a>
             <tr>
              <th style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;'></th>
              </th><td style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info text-capitalize'>click al icono y hable con nosotros</a></i></label></i></td>     
            </tr>

            
            
             <tr>
              <th style='width:20%;font-size:130%;' class='btn-info'><i><label class='label label-info' value='Registro'>Numero De telefono</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info text-capitalize' value='Registro'><i>" .$row[11]. "</i></label></td>     
            </tr>
                       

            <tr>
              <th style='width:20%;font-size:130%;' class='btn-info'><i><label class='label label-info' value='Registro'>Ingrese al comercio:</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info text-capitalize' value='Registro'><i><a href='mostrarproductos.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-warning'></label></i></td>     
            </tr>

            <tr>
              <th style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info' value='Usuario' style='width:40%;'>Descripcion</label></i></th>
              <td style='width:40%;font-size:130%;' class='btn-info'><i><label class='label label-info text-capitalize' value='Usuario'><i>" .$row[28]. "</label></i></td>     
            </tr>

                        
      </table>
  
  </section>
  ";
  



      
        
            }  
            
            ?>
   </div>

</body>
</html> 