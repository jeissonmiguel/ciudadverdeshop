<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : ''); 
  if ($usuario == "") {
        echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
        session_destroy();
      echo "<h5 class='btn-warning'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
      }else{
     echo "<h5 class='btn-warning 'style='height:38px'> esta logueado como: ". $usuario."<a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-success'>Cerrar Sesión</button></a><a href='../almacenProductos/desloguearte.php'></a></h5>";
      } 
$id=(isset($_GET['id'])    ? $_GET['id']    : '');
$traeid=$id;


$busqueda = "SELECT * FROM registrousuario WHERE documento='$usuario'";
      $nombre = mysqli_query($conexion,$busqueda);

          while ($row = mysqli_fetch_row($nombre)) {
            $documento= $row[4];
            $nombre1= $row[5];
            $nombre2= $row[6];
            }


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
 <!--  <link rel="stylesheet" href="../../css/almacenProductos/mostrarproductos.css"> -->
  <!-- <link rel="stylesheet" href="../../css/interfazUsuario/interfazusario.css"> -->
  <link rel="stylesheet" href="../../css/crearTienda/ingresarTienda.css">
  <link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>
  <link rel="stylesheet" media="(max-width:1008px)" href="../../css/crearTienda/ingresarTiendaMovil.css"/> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />

     <!-- javascript -->
  <script src="../../js/interfazcliente/interfazcliente.js"></script>      
   <script src="../../js/crearTienda/ingresarTienda.js"></script>
  
  
 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
   
  <title>Interfaz</title>
</head>

<body style="background-color: #DFFAD6; width:100%;padding:5px;"> 
<a href="../../index.html"><div class="padding badge badge-success btn btn-success float-left col-lg-6 col-md-6"><h3 class="text-light letr1"><= Volver a CVshop inicio</h3></div></a>
<a href="../login/selecionperfil.php"><div class="padding badge badge-warning btn btn-warning col-lg-6 col-md-6"><h3 class="letr1"><= Volver a Home</h3></div></a>
<br> 
<div  class="container-fluid">
      <marquee  loop="0" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">
      <div class="col-1 float-left"></div>
       <h1 class="btn btn-success " style="font-size:150%;">Hola <?php echo $nombre1," ", $nombre2?> estos son todos tus comercios dale click para ver mas</h1></marquee>
</div>

<aside class="container-fluid">   
<div class="padding badge badge-info btn btn-success float-left col-lg-3 col-md-6" style="width: 100%;" id="b2" name="b2"><h3 class="letr2"><img src="../../img/index/footer/edificio.ico" style="width: 50px; height: 35px; border-radius: 50px;"> --> Empresa</h3></div>   
  
<div class="padding badge badge-success btn btn-success float-left col-lg-3 col-md-6" style="width: 100%;"id="b1" name="b1"><h3 class="text-light letr2"><img src="../../img/index/footer/tienda.ico" style="width: 50px; height: 35px; border-radius: 50px;font-size: 100%;"> --> Tienda</h3></div> 

<div class="padding badge badge-danger btn btn-danger float-left col-lg-3 col-md-6" id="b0" name="b0" style="width: 100%;"><h3 class="letr2"><img src="../../img/index/footer/producto.ico" style="width: 50px; height: 35px; border-radius: 50px;"> --> Productos</h3></div> 

<a href="../almacenProductos/modificarestabl.php"><div class="padding badge badge-light btn btn-danger float-left col-lg-3 col-md-6" id="b0" name="b0" style="width: 100%;"><h3 class="letr2"><!-- <img src="" style="width: 50px; height: 35px; border-radius: 50px;"> -->Avanzado</h3></div></a> 
</aside> 
 
<br><br><br><br><br>

  <div id="tienda" name="tienda" style="padding:1 1 1 1;" class="letrat">
   <?php       
      
     // include ("../conexion/conexion.php");

     $busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal";


     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);

        
         

           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
            while($row = mysqli_fetch_row($nombre)){
                      
            

              if ($usuario==$row[1]) {
                # code...
             
              // var_dump($nombre);
            echo" 

             
             <section class='sectiontamano' style='padding:10px;display: inline-block;border-style: solid;
             border-width: 3px;font-size: 100%;background='../crearTienda/$row[37]';word-break: break-all;'>

            <table>

             <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-success'><i><label class='label label-success' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

            <tr>
              <td style='width:100%;font-size:90%;text-align: center;overflow-y: auto;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label label-success' value='Registro' style='width:100%;font-size:150%;'>" .$row[5]. "</label></i></td>
            </tr>      

             
             <a href='MostrarTienda.php?id=". $row[0] ."''><img src='../crearTienda/$row[37]' id='imagenPrevisualizacion' style='width:100%;height:250px;'  ></a>
             <tr>
              <td style='width:40%;' class='btn-success'><i><label class='label label-success' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;border-radius:30%;padding:30px;'></td>
              </td><td style='width:40%;' class='btn-success'><i><label class='label label-success text-capitalize'>click al icono y hable con nosotros</a></i></label></i></td>     
            </tr>

            
            
             <tr>
              <td style='width:20%;' class='btn-success'><i><label class='label label-success' value='Registro'>Numero De telefono</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i>" .$row[11]. "</i></label></td>     
            </tr>
                       
            <tr>
              <td style='width:20%;' class='btn-success'><i><label class='label label-success' value='Usuario' style='height:100px;'>Descripcion:</label></i></td>
              <td style='width:40%;word-break: break-all;' class='btn-success'><i><label class='label label-success text-capitalize barra' value='Usuario'><i>" .$row[29]. "</label></i></td>     
            </tr>  

             <tr>
              <td style='width:20%;' class='btn-success'><i><label class='label label-success' value='Registro'>Ingrese al comercio:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i><a href='../crearTienda/muestraComercioTienda.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-light text-success' onclick='verificar(event)'>></label></i></td>     
            </tr>

           

            <tr>
              <td style='width:20%;' class='btn-success text-danger'><i><label class='label label-danger' value='Registro'>Editar</label></i></td>
              <td style='width:40%' class='btn-success'><i><label text-capitalize' value='Registro'><i><a href='MostrarTienda.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-danger'></label></i></td>     
            </tr>
                      
      </table>  
  </section>";
 }
           
            }  
                 ?> 
          </div>

          <div  id="empresa" name="empresa" class="letrat">
         <?php  
          ///////////////empresas/////////////////////


           $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

   
           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
             while($row = mysqli_fetch_row($nombre)){

                if ($usuario==$row[1]) {
            echo"   




             <section class='sectiontamano' style='padding:10px;display: inline-block;border-style: solid;
            border-width: 3px;font-size: 100%;background='../crearTienda/$row[37]';word-break: break-all;'>
            
            <table>

            <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-info'><i><label class='label label-info' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>
             <tr>
              <td style='width:100%;font-size:90%;text-align: center;overflow-y: auto;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label label-success' value='Registro' style='width:100%;font-size:150%;'>" .$row[5]. "</label></i></td>
            </tr>            

             
             <a href='MostrarEmpresa.php?id=". $row[0] ."'><img src='../crearTienda/$row[37]' id='imagenPrevisualizacion' style='width:100%;height:250px;'></a>
             <tr>
              <td style='width:40%;' class='btn-info'><i><label class='label label-info' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;border-radius:30%;padding:30px;'></td>
              </td><td style='width:40%;' class='btn-info'><i><label class='label label-info text-capitalize'>click al icono y hable con nosotros</a></i></label></i></td>     
            </tr>

            
            
             <tr>
              <td style='width:20%;' class='btn-info'><i><label class='label label-info text-capitalize' value='Registro'>Numero De telefono</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-info text-capitalize' value='Registro'><i>" .$row[12]. "</i></label></td>     
            </tr>

             <tr>
              <td style='width:40%;text-align: center;' class='btn-info'><i><label class='label label-info text-capitalize' value='Usuario' style='height:100px;'>Descripcion:</label></i></td>
              <td style='width:40%;word-break: break-all;' class='btn-info'><i><label class='label label-info text-capitalize barra' value='Usuario'><i>" .$row[29]. "</label></i></td>     
            </tr>                       

            <tr>
             <td style='width:20%;' class='btn-info'><i><label class='label label-info' value='Registro'>Ingrese al comercio:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-info text-capitalize' value='Registro'><i><a href='../crearTienda/muestraComercioEmpresa.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-light text-info' onclick='verificar(event)'></label></i></td>         
            </tr>

           

            <tr>
              <td style='width:50%;' class='btn-info text-danger'><i><label class='label label-danger' value='Registro'>Editar</label></i></td>
              <td style='width:50%' class='btn-info'><i><label text-capitalize' value='Registro'><i><a href='MostrarEmpresa.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-danger'></label></i></td>      
            </tr>

                        
      </table>
  
  </section>";



      }
        
            }  
            
            ?>
   </div>

   <div id="productoindividual" name="productoindividual" style="padding:1 1 1 1;" class="letrat">
   <?php       
      
     // include ("../conexion/conexion.php");

     $busqueda= "SELECT * FROM registroproductoindividual INNER JOIN celular ON registroproductoindividual.numRegistroProductoIndividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoIndividual=email.numRegistroGlobal INNER JOIN direccion ON registroproductoindividual.numRegistroProductoIndividual=direccion.numRegistroGlobal INNER JOIN descripcion ON registroproductoindividual.numRegistroProductoIndividual=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoIndividual=insertimglogo.numRegistroGlobal";


     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $nombre = mysqli_query($conexion,$busqueda);

     // $celular="2000000001";

     // $busqueda1 = "SELECT * FROM celular WHERE numRegistroGlobal='$celular'";
     // $nombre1 = mysqli_query($conexion,$busqueda1);

        
         

           // while(($row = mysqli_fetch_row($nombre)) and($row1 = mysqli_fetch_row($nombre1)) ){
            while($row = mysqli_fetch_row($nombre)){

              if ($usuario==$row[1]) {
                # code...
             
              // var_dump($nombre);
            echo" 


             <section class='sectiontamano' style='display: inline-block;border-style: solid;             
            border-width: 3px;font-size: 100%;background='../crearTienda/$row[38]';word-break: break-all;'>

            <table>

             <tr>
              <td style='width:100%;text-align: center;' colspan='2' class='btn-success'><i><label class='label label-success' value='Registro' style='width:100%;'>Nombre del comercio</label></i></td>
            </tr>

           <tr>
              <td style='width:100%;font-size:90%;text-align: center;overflow-y: auto;word-break: break-all;' colspan='2' class='btn-light'><i><label class='label label-success' value='Registro' style='width:100%;font-size:150%;'>" .$row[5]. "</label></i></td>
            </tr>      

             
             <a href='MuestraComercioProductoIndividual.php?id=". $row[0] ."'><img src='../crearTienda/$row[38]' id='imagenPrevisualizacion' style='width:100%;height:250px;'  ></a>
             <tr>
              <td style='width:40%;' class='btn-success'><i><label class='label label-success' value='Id'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank'><img src='../../img/interfazusuario/whats.jpg' style='width:100%;heigth:1px;display:inline-block;background-size: cover;border-radius:30%;padding:30px;'></td>
              </td><td style='width:40%;' class='btn-success'><i><label class='label label-success text-capitalize'>click al icono y hable con nosotros</a></i></label></i></td>     
            </tr>

            
            
             <tr>
              <td style='width:20%;' class='btn-success'><i><label class='label label-success' value='Registro'>Numero De telefono</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i>" .$row[12]. "</i></label></td>     
            </tr>
                       
            <tr>
              <td style='width:20%;' class='btn-success'><i><label class='label label-success' value='Usuario' style='height:100px;'>Descripcion:</label></i></td>
              <td style='width:40%;word-break: break-all;' class='btn-success'><i><label class='label label-success text-capitalize barra'><i>" .$row[30]. "</label></i></td>     
            </tr>  

             <tr>
              <td style='width:20%;' class='btn-success'><i><label class='label label-success' value='Registro'>Ingrese al comercio:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-success text-capitalize' value='Registro'><i><a href='MuestraComercioProductoIndividual.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-light text-success' onclick='verificar(event)'>></label></i></td>     
            </tr>

           

            <tr>
              <td style='width:20%;' class='btn-success text-danger'><i><label class='label label-danger' value='Registro'>Editar</label></i></td>
              <td style='width:40%' class='btn-success'><i><label text-capitalize' value='Registro'><i><a href='MostrarProducto.php?id=". $row[0] ."'><input type='button' name='click1' value='Ingresar' class='btn btn-danger'></label></i></td>     
            </tr>
                      
      </table>  
  </section>";
 }
           
            }  
                 ?> 
</div>
</body>
</html>