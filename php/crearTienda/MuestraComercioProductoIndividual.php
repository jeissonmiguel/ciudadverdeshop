<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 $busqueda= "SELECT * FROM  registroproductoindividual INNER JOIN celular ON registroproductoindividual.numRegistroProductoIndividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoIndividual=email.numRegistroGlobal INNER JOIN direccion ON registroproductoindividual.numRegistroProductoIndividual=direccion.numRegistroGlobal INNER JOIN descripcion ON  registroproductoindividual.numRegistroProductoIndividual=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoIndividual=insertimglogo.numRegistroGlobal";
     
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
      echo "<div style='height:50px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;color:black;'>Navegas como invitado,que esperas registrate !! </h5><a href='../Comercios/interfazcliente.php?id=".$row[6]."'><button class='btn btn-warning float-right'>Volver </button></a><a href='../login/login.php'><button class='btn btn-success float-right'>iniciar session</button></a><a href='../registrate/registrate.php'><button class='btn btn-light float-right'>Registrate </button></a></div>";
      }else{
        echo "<div style='height:60px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;color:black;'> esta logueado como usuario: ". $usuario."</h5><a href='../login/selecionperfil.php'><button class='btn btn-warning float-right'>Volver </button></a></div>";     
      }}} 



?>
<!DOCTYPE html>
<html lang="es">
<head>  
<meta charset="UTF-8"/>
<title>Muestra Producto Individual</title>
<!--   <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link rel="stylesheet" href="../../css/crearTienda/producto1.css">
  <link rel="stylesheet" href="../../css/letra/letra2.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
<body class="letrat">
 <?php 

 $busqueda= "SELECT * FROM  registroproductoindividual INNER JOIN celular ON registroproductoindividual.numRegistroProductoIndividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoIndividual=email.numRegistroGlobal INNER JOIN direccion ON registroproductoindividual.numRegistroProductoIndividual=direccion.numRegistroGlobal INNER JOIN descripcion ON  registroproductoindividual.numRegistroProductoIndividual=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoIndividual=insertimglogo.numRegistroGlobal INNER JOIN link ON registroproductoindividual.numRegistroProductoIndividual=link.numRegistroGlobal";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $result = mysqli_query($conexion,$busqueda);
     $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  while($row = mysqli_fetch_array($result)){
            if ($id==$row[0]){

              
            echo"
            <section style='display: inline-block;font-size:150%;' class='col-12 '>
     <div class='btn-secondary fondo' colspan='2' ><img src='../crearTienda/$row[ruta]' class='ajuste' alt=''></div>

   <table class='col-12 text-center'>
                        
            <tr style='width:10%;'>
              <td class='btn-secondary'><label class='label label-warning' style= value='Id'>Nombre del producto</label></td>    
              <th style='width:50%;height:150px;border-radius:0px 20px 0px 20px;font-size:150%;background-color:white;color:black;'class='text-uppercase'>" .$row['producto']."</th>
            </tr>   
            
            <tr>
            <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'>Contacto Whatsapp</label></i></td>
             <td style='width:25%' class='btn-danger'><i><a href='https://api.whatsapp.com/send?phone=57$row[celular]' target='_blank' style='color:white'><img src='../../img/interfazusuario/whats.jpg' style='width:80px;height:50px;'>click $row[celular]</a></i></td>
             </tr>

            
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'> Seccion</label></i></td>
              <td style='width:25%' class='btn-danger'><i><label class='label label-warning' value='Usuario'>".$row['seccion']."</label></i></td>     
            </tr>

 
            
           
           
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'> ubicacion</label></i></td>
              <td style='width:25%' class='btn-danger'><i><label class='label label-warning' value='Usuario'>".$row['barrio']."</label></i></td>     
            </tr>

            
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'> Direccion</label></i></td>
              <td style='width:25%' class='btn-danger'><i><label class='label label-warning' value='Usuario'>".$row['direccion']."</label></i></td>     
            </tr>

           <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'> ID: </label></i></td>
              <td style='width:25%' class='btn-danger'><i><label class='label label-warning' value='Usuario'>".$row['0']."</label></i></td>     
            </tr>

            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'> Cedula</label></i></td>
              <td style='width:25%' class='btn-danger'><i><label class='label label-warning' value='Usuario'>".$row['cedula']."</label></i></td>     
            </tr>
             
             
             <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'> Email </label></i></td>
              <td style='width:25%' class='btn-danger'><i><label class='label label-warning' value='Usuario'>".$row['email']."</label></i></td>     
            </tr>

                       
             <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Precio de venta</label></i></td>
              <td style='width:25%;' class='btn-danger'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row['valor']); echo $numero;
                    echo "</i></label></i></td>     
            </tr>

            
          <!--   <tr>
              <td  colspam='2'style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>Ver sus Productos</i></td> 
              <td style='width:40%;padding:10px 10px 10px 10px;' class='btn-danger'><i><a href='http://localhost/ciudadverdeshop/php/Comercios/mostrarproducto.php?id=".$row[0]."'><button class='btn btn-secondary' style='width:100%;'>ingresar</button></a></i></td>                 
            </tr>
           --> 

           <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>Califícame</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-danger'><i><a href='../calificame/calificame.php?id=".$row[0]."&id1=".$row[5]."&id2=".$row[2]."'><button class='btn btn-secondary' style='width:50%;'>ingresar</button></a></i></td>                 
            </tr> 

                

               <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>link de tu comercio para que lo compartas</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-danger'><i><textarea style='width:50%;height:60px;' class='label label-warning text-dark' value='Tiva'>$url</textarea></i></td>                 
            </tr> 

           <tr>
              <td  colspam='2'style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>Descripcion</i></td> 
              <td style='width:25%;padding:10px 10px 10px 10px;' class='btn-danger'><i><textarea style='width:50%;height:150px;' class='label label-warning text-dark' value='Tiva'>".$row['descripcion']."</textarea></i></td>                 
            </tr>          

          
             <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Tiva:</label></i></td>
              <td style='width:40%' class='btn-danger'><i><label class='label label-warning' value='Descuento'>".$row[0]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Descuento:</label></i></td>
              <td style='width:40%' class='btn-danger'><i><label class='label label-warning' value='Descuento'>".$row[0]."</label></i></td>     
            </tr>
            
             
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%' class='btn-danger'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>
                      

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning' value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%' class='btn-danger'><i><input disabled type='button' value='Proximamente' class='btn-secondary' style='font-size:200%;'></i></td>     
            </tr>
            -->
           


             
      </table>";
      echo "<label style='width:100%;color:black;'class='btn-danger text-center'>comentarios ↓</label><br>";
        include('busquedaComentario.php');
   
  echo"</section>";
 
    }} 
           
    ?>  
</body>
</html>