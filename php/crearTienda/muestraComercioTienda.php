<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 $busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $result = mysqli_query($conexion,$busqueda); 

  $id=(isset($_GET['id'])    ? $_GET['id']    : '');
  $_SESSION['id2']=$id;
  $traeid=$id;
 
  // if ($usuario == "") {
  //    echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
  //    session_destroy();
  //        echo "<h5 class='btn-warning letrat1'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
  //          }else{
 while($row = mysqli_fetch_row($result)){
            if ($id==$row[0]){
               if ($usuario == "") {
      echo "<div style='height:50px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;color:black;font-size:300%;'>Navegas como invitado,que esperas registrate !! </h5><a href='../Comercios/interfazcliente.php?id=".$row[6]."'><button class='btn btn-warning float-right' style='padding:5px;color:black;font-size:300%;'>Volver </button></a><a href='../login/login.php'><button class='btn btn-success float-right' style='padding:5px;color:black;font-size:300%;'>iniciar sesion</button></a><a href='../registrate/registrate.php'><button class='btn btn-light float-right' style='padding:5px;color:black;font-size:300%;'>Registrate </button></a></div>";
      }else{
        echo "<div style='height:60px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;color:black;'> esta logueado como usuario: ". $usuario."</h5><a href='../Comercios/interfazcliente.php?id=".$row[6]."'><button class='btn btn-warning float-right' style='padding:5px;color:black;font-size:300%;'>Volver </button></a></div>";     
      }}} 



?>
<!DOCTYPE html>
<html lang="es">
<head>  
<meta charset="UTF-8"/>
<title>Muestra Comercio Tienda</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link rel="stylesheet" href="../../css/crearTienda/producto1.css">
  <link rel="stylesheet" href="../../css/letra/letra2.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
</head>
<body class="">
 <?php 

  $busqueda= "SELECT * FROM  registrotienda  INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda.numRegistroTienda=email.numRegistroGlobal INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal INNER JOIN redsocial ON registrotienda.numRegistroTienda=redsocial.numRegistroGlobal";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $result = mysqli_query($conexion,$busqueda);
     $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  while($row = mysqli_fetch_array($result)){
            if ($id==$row[0]){
              
            echo"
   <section style='display: inline-block;font-size:300%;padding:50px;' class='col-12 '>
     <div class='btn-secondary fondo  text-center' colspan='2'><img src='$row[ruta]' class='ajuste col-12 col-lg-6' style='height:700px;' alt=''></div>

   <table class='col-12 text-center'>
                        
            <tr style='width:10%;'>
              <td class='btn-light'><label class='label label-warning' style='color:black;' value='Id'>Nombre de la tienda</label></td>    
              <th style='width:50%;height:150px;border-radius:0px 20px 0px 20px;font-size:150%;background-color:white;color:black;overflow-x: auto;word-break: break-all;'class='text-uppercase'>" .$row[5]."</th>
            </tr>   
            
            <tr>
            <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Usuario'>Contacto Whatsapp</label></i></td>
             <td style='width:25%' class='btn-success'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank' style='color:white'><img src='../../img/interfazusuario/whats.jpg' style='width:80px;height:50px;color:black;'>click $row[11]</a></i></td>
             </tr>

            
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark text-dark' value='Usuario'> Seccion</label></i></td>
              <td style='width:25%;' class='btn-success'><i><label class='label label' value='Usuario'>".$row[6]."</label></i></td>     
            </tr>


            
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Nit'>Numero de contacto</label></i></td>
              <td style='width:25%' class='btn-success'><i><label class='label label-warning' value='Nit'>".$row[12]."</label></i></td>     
            </tr>

           
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Producto'>Ubicación</label></i></td>
              <td style='width:25%;word-break: break-all;' class='btn-success'><i><label class='label label-warning' value='Producto'>".$row[20]. ""."/"." " .$row[21]."</label></i></td>     
            </tr>

            
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Descripcion'>Direccion</label></i></td>
              <td style='width:25%;word-break: break-all;' class='btn-success'><i><label class='label label-warning' value='Descripcion'>".$row[22]."</label></i></td>     
            </tr>

           <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark'  value='Id'>Id:</label></i></td>
              <td style='width:25%;' class='btn-success'><i><label class='label label-warning' value='Id'>".$row[0]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Rut'>Nit:</label></i></td>
              <td style='width:25%;' class='btn-success'><i><label class='label label-warning' value='Id'>".$row[3]."</label></i></td>     
            </tr>      
             
             

           <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Valor'>Email</label></i></td>
              <td style='width:25%;word-break: break-all;' class='btn-success'><i><label class='label label-warning' value='Valor'>".$row[16]."</label></i></td>     
            </tr> 

             <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Tiva'>Ver sus Productos</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-success'><i><a href='../Comercios/mostrarproductos.php?id=".$row[0]."'><button class='btn btn-light' style='width:50%;font-size:100%'>ingresar</button></a></i></td>                 
            </tr>

                        
              <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Tiva'>Califícame</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-success'><i><a href='../calificame/calificame.php?id=".$row[0]."&id1=".$row[5]."&id2=".$row[2]."'><button class='btn btn-light' style='width:50%;font-size:100%'>ingresar</button></a></i></td>                 
            </tr> 

             <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Tiva'>link de tu comercio para que lo compartas</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-success'><i><textarea style='width:80%;height:180px;' class='label label-warning text-dark' value='Tiva'>$url</textarea></i></td>                 
            </tr> 

             <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Tiva'>Red Social</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-success'><i><a href='$row[42]' target='_blank'><textarea style='width:80%;height:150px;' class='label label-warning text-dark' value='Tiva'>".$row[42]."</textarea></a></i></td>                 
            </tr> 

             <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning text-dark' value='Tiva'>Descripcion</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-success'><i><textarea style='width:80%;height:150px;' class='label label-warning text-dark' value='Tiva'>".$row[29]."</textarea></i></td>                 
            </tr>

           <!--   <tr>
              <td  colspam='1' style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-light'><i></td>             
                             
            </tr>            
 -->
          
             <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning' value='Descuento'>Tiva:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning' value='Descuento'>".$row[0]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning' value='Descuento'>Descuento:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning' value='Descuento'>".$row[0]."</label></i></td>     
            </tr>
            
             
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-light'><i><label class='label label-warning' value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>
                      

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning' value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%' class='btn-success'><i><input disabled type='button' value='Proximamente' class='btn-light' style='font-size:200%;'></i></td>     
            </tr>
            -->";?>

           <?php 
               
          echo " 
          <tr style='padding:20px;width:50px;height: 300px;word-break: break-all;'>

          <td class='btn-light text-center' style='padding:20px;width:50%;' colspan='2'>  
          <label style='width:100%;'class='btn-success text-center'>Ubicación ↓ </label><br>
           $row[coordenadas]
           </td>         
            </tr>                     
              </table>";
         

        echo "<label style='width:100%;color:black;'class='btn-success text-center'>Comentarios ↓ </label><br>";
        include('busquedaComentario.php');

   
        echo"</section>";
 
    }}  
    ?>  
</body><br>
</html>