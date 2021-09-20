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
<link rel="stylesheet" href="../../css/comercios/mostrarproductos.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
    <link rel="stylesheet" media="(max-width:1008px)" href="../../css/comercios/interfazclientemovil.css"/>

     <!-- javascript -->
  <script src="../../js/interfazcliente/interfazcliente.js"></script>      
  
 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
   
  <title>Interfaz productos Ind</title>
</head>

<body class="ba1" style="background-color: #DFFAD6;zoom:100%;" >  
<div><a href="../../index.html"><label class="badge badge-success btn btn-success col-6 "><h5 class="text-light padding letr1 display-5">Ir P. Principal</h5></label></a>
<a href="../Comercios/Comercios.php"><label class="badge badge-warning  btn btn-warning float-right col-6"><h5 class="letr1 padding display-5">ir a Secciones</h5></label></a></div>
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
            <img src='../../img/interfazusuario/gif/licores.gif'style='width:100%; height:300px;' onmouseout='this.style.opacity=1;this.filters.alpha.opacity=100;' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity=20;'>
        </div>
        <div class='carousel-item'>
              <img src='../../img/index/body/actualizacion3/publicidad.gif'style='width:100%; height:300px; float:left;'  onmouseout='this.style.opacity=1;this.filters.alpha.opacity=100;' onmouseover='this.style.opacity=0.7;this.filters.alpha.opacity=20;'>
        </div>      
  <!-- </div> -->
  ";
}
  elseif($traeid=="Panaderia") {
   echo ' <div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/panaderias.gif" style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
    </div>
    <div class="carousel-item">            
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
    </div> ';
  }

   elseif($traeid=="Comida_Rapidas") {
   echo '<div class="carousel-item active">
    <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/comidas_Rapidas.gif" style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
     <div class="carousel-item">        
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
     </div> ';
  }
   elseif($traeid=="Restaurantes") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/restaurantes.gif" style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
          <div class="carousel-item">     
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>';
  }
   elseif($traeid=="Asaderos") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/asaderos.gif" style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>  
          <div class="carousel-item">   
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>';
  }
   elseif($traeid=="Tecnologia") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/tecnologia.gif"style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
          <div class="carousel-item ">
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>';
  }


elseif($traeid=="Supermercados") {
   echo '<div class="carousel-item active">
   <!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/supermercados.gif"style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>
          <div class="carousel-item">  
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div> ';
  }
  elseif($traeid=="Droguerias") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/droguerias.gif"style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
         </div>   
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
         </div>';
  }
  elseif($traeid=="Mascotas") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/mascotas.gif.gif
            " style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>  
          <div class="carousel-item ">  
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
          </div>';
  }
  elseif($traeid=="Miscelaneas") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/miscelaneas.gif"style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div> ';
  }
  elseif($traeid=="Profesiones") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/profesiones.gif"style="width:100%; height:300px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>';
  }
  elseif($traeid=="Otros_Servicios") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/otros.gif"style="width:100%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>';
  }
////////////////////////////////////////////

   elseif($traeid=="Gimnasio") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/gimnasio.gif"style="width:100%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div> ';
  }

   elseif($traeid=="Ventas_Individuales") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/ventasl.gif"style="width:100%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div> ';
  }



   elseif($traeid=="Belleza") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/belleza.gif"style="width:100%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>';
  }

   elseif($traeid=="Vehiculos") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/vehiculos.gif"style="width:100%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>';
  }

   elseif($traeid=="Viviendas") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/vivienda.gif"style="width:100%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>';
  }

   elseif($traeid=="Trueque") {
   echo '<div class="carousel-item active"><!-- <div class="col-12 float-left badge badge-success"> --><!-- <h5>Licor</h5> -->
            <img src="../../img/interfazusuario/gif/trueque.gif"style="width:100%; height:300px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
           </div>
           <div class="carousel-item "> 
              <img src="../../img/index/body/actualizacion3/publicidad.gif"style="width:100%; height:300px; float:left;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100;" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=20;">
             </div>';
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
   
 
  <!-- <div class="padding badge badge-info btn btn-info float-right col-6 " id="b2" name="b2"><h3 class="display-5"><img src="../../img/index/body/actualizacion1/mouse.jpg" style="width: 50px; height: 35px; border-radius: 50px;"> Click --><!-- para ver  Empresas</h3></div>  --> 
</a><label class="padding badge badge-success btn btn-success col-12 " id="b1" name="b1"><h1 class="display-5"><img src="../../img/index/footer/producto.ico" style="width: 50px; height: 35px; border-radius: 50px;"> Click --><br> Catalogo</h1></label>



  <div id="Productoindividual" name="Productoindividual" class="letrat">
   <?php       
      
     //verificacion de usuario premium
     $premium="SELECT * FROM usuariopremium where usuario='$usuario' and estado='activo'";
     $nombre1 = mysqli_query($conexion,$premium);
     $encontrado=null;
     while($buscar = mysqli_fetch_array($nombre1)){
      
        $encontrado="$buscar[usuario]";  
      }

    $busqueda= "SELECT * FROM registroproductoindividual INNER JOIN celular ON registroproductoindividual.numRegistroProductoindividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoindividual=email.numRegistroGlobal INNER JOIN direccion ON registroproductoindividual.numRegistroProductoindividual=direccion.numRegistroGlobal INNER JOIN descripcion ON registroproductoindividual.numRegistroProductoindividual=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoindividual=insertimglogo.numRegistroGlobal INNER JOIN link ON registroproductoindividual.numRegistroProductoindividual=link.numRegistroGlobal WHERE seccion='$traeid'";



     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);

     $contar=0; 
     $controw=0;
         

           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
  while($row = mysqli_fetch_array($nombre)){
              // var_dump($nombre);
            
                       
             echo"<section class='sectiontamano' id='section' style='display:inline-block;'>
              <table>
               <p> </p>
               
                                
                <p class='label btn-success text-center text-uppercase bg-light text-success' style='overflow-y: auto;word-break: break-all;'>" .$row[5]. " </p>   
              ";
             
     echo"<div id='carouselExampleIndicators" .$contar. "' class='carousel slide' data-ride='carousel'>
            <ol class='carousel-indicators'>
              <li data-target='#carouselExampleIndicators" .$contar. "' data-slide-to='0' class='active'></li>
              <li data-target='#carouselExampleIndicators" .$contar. "' data-slide-to='1'></li>
              <li data-target='#carouselExampleIndicators" .$contar. "' data-slide-to='2'></li>
            </ol>
            <div class='carousel-inner'>
              <div class='carousel-item active'>
                <img  style='width: 100%;height: 300px;padding: 10px;' src='$row[link]' alt='First slide'>
              </div>"; 
            if (($row['ruta']=="no disponible")) {
              echo"<div class='carousel-item'>             
                <img  style='width: 100%;height: 300px;padding: 10px;' src='https://arphapress.com/wp-content/uploads/2017/10/basicologo.jpg' alt='First slide'>

              </div>";
            
            }else{
               echo"<div class='carousel-item'>             
                <img  style='width: 100%;height: 300px;padding: 10px;' src='$row[ruta]' alt='First slide'>
              </div>
              <div class='carousel-item'>
                <img  style='width: 100%;height: 300px;padding: 10px;' src='https://image.freepik.com/vector-gratis/banner-letras-calidad-premium_28633-267.jpg' alt='First slide'>
              </div>"
              ;
            

            }
              echo"               
              
             <!--  <div class='carousel-item'>
                <img  style='width: 100%;height: 300px;padding: 10px;' src='$row[link]' alt='First slide'>
              </div> -->
            <a class='carousel-control-prev' href='#carouselExampleIndicators" .$contar. "' role='button' data-slide='prev'>
              <span class='carousel-control-prev-icon' aria-hidden='false'></span>
              <span class='sr-only'>Previous</span>
            </a>
            <a class='carousel-control-next' href='#carouselExampleIndicators" .$contar. "' role='button' data-slide='next'>
              <span class='carousel-control-next-icon' aria-hidden='true'></span>
              <span class='sr-only'>Next</span>
            </a>                 

          </div>
          </div>







          ";
      
        $contar=$contar+1;

        
           echo"  
             <tr>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[12]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;border-radius:30%;padding:30px;'></td>
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
              <td style='width:40%;font-size:130%;' class='btn-light'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[6]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;font-size:130%;' class='btn-success'><i><label class='label label-success' value='Usuario' style='height:100px;text-align:center;'>Descripcion</label></i></td>
              <td style='width:40%;font-size:130%;padding: 5px;overflow-y: auto;word-break: break-all;' class='btn-light'><i><label class='label label-success text-capitalize barra' value='Usuario'><i>" .$row[30]. "</label></i></td>     
            </tr>

                        
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
              <th style='width:20%;font-size:130%;' class='btn-light'><i><label class='label label-light' value='Registro'>Si Tienes un producto individual que quieras vender para empezar a vender empieza ya registrate</label></i></th>
                 
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

             
             <a href='../registrate/registrate.php'><img src='https://media.istockphoto.com/photos/start-line-on-the-road-ahead-disappearing-into-the-distance-picture-id1140983360?k=20&m=1140983360&s=170667a&w=0&h=8KA5J_5eNvZUcs7eaW1obwuy3w0RfAeFsSM3XxOY0RQ='  style='width:100%;height:250px;' title='Dale click para registrarte'></a>
            
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