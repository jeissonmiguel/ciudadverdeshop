<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
  $busqueda="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroproducto=insertimgproducto.numRegistroProducto";
 $result = mysqli_query($conexion,$busqueda); 

  $id=(isset($_GET['id'])    ? $_GET['id']    : '');
$traeid=$id;
 
  // if ($usuario == "") {
  //    echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
  //    session_destroy();
  //        echo "<h5 class='btn-warning letrat1'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
  //          }else{



 while($row = mysqli_fetch_row($result)){
            if ($id==$row[2]){

              echo "<div style='height:50px;width:100%;'class='bg-secondary float-left'><h5 class='bg-light float-left' style='padding:5px;color:black;'>". $usuario."</h5><a href='../Comercios/mostrarproductos.php?id=".$row[1]."'><button class='btn btn-warning float-right'>Volver </button></a></div>";
           }}
           // } 



?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"/>
<title>Muestra Comercio Empresa cliente</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/letra/letra2.css"/>
  <link rel="stylesheet" href="../../css/crearTienda/producto1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
</head>

<body class="letrat">
 <?php 

 $busqueda="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroproducto=insertimgproducto.numRegistroProducto INNER JOIN celular ON registroproductos.numRegistroGlobal=celular.numRegistroGlobal";
 $result = mysqli_query($conexion,$busqueda); 

  while($row = mysqli_fetch_row($result)){
            if ($id==$row[2]){

              
            echo"
  <section style=';display: inline-block;font-size:100%;' class='col-12'>

 <table class='col-12 '>

             <tr>
              <td class='btn-secondary'><label class='label label-warning' style= value='Id'>DESCRIPCIÓN:</label></td>    
              <td style='width:100%;height:150px;border-radius:0px 20px 0px 20px;font-size:150%;background-color:white;color:black;'class='text-uppercase'>".$row[4]. "".""." " .$row[5]."</td>
            </tr>

            <tr>
              <th class='btn-secondary fondo' colspan='2'><img src='../almacenProductos/$row[22]' class='ajuste' alt=''></th>
            </tr>            

             
                    
            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='id'>ID</label></i></td>
              <td style='width:25%;background-color: #D3D7E3; text-align: center;font-size:150%'><i><label class='label label-warning' style='color:black' value='Nit'>".$row[2]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Nit'>EMPACADO</label></i></td>
               <td style='width:25%;background-color: #D3D7E3; text-align: center;font-size:150%'><i><label class='label label-warning' style='color:black' value='Nit'>".$row[5]."</label></i></td>                
            </tr>

            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Nit'>CANT EN UNIDADES</label></i></td>
               <td style='width:25%;background-color: #D3D7E3; text-align: center;font-size:150%'><i><label class='label label-warning' style='color:black' value='Nit'>".$row[7]."</label></i></td>                
            </tr>    
          

            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Nit'> EMBALAJE POR</label></i></td>
               <td style='width:25%;background-color: #D3D7E3; text-align: center;font-size:150%'><i><label class='label label-warning' style='color:black' value='Nit'>".$row[6]."</label></i></td>
                 
            </tr>  

            

            <tr>
              <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Nit'>PRECIO DE VENTA</label></i></td>
              <td style='width:25%;background-color: #D3D7E3;text-align: center;font-size:150%'><i><label class='label label-warning' style='color:black' value='Nit'>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></td>     
             </tr>  

             
            <tr>
            <td style='width:25%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'>PIDELO CONTACTO WHATSAPP</label></i></td>
             <td style='width:25%;background-color: #D3D7E3;text-align: center;font-size:150%;'><i  style='color:black'><a href='https://api.whatsapp.com/send?phone=57$row[27]' target='_blank' style='color:Green'><img src='../../img/interfazusuario/whats.jpg' style='width:80px;height:50px;'>click $row[27]</a>ó  al número fijo $row[28]</i></td>
             </tr>                  

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning' value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%;background-color: #D3D7E3;text-align: center;' class='btn-info'><i><input disabled type='button' value='Proximamente' class='btn-secondary' style='font-size:200%;'></i></td>     
            </tr>

           


             
      </table>

   
  </section>";
 
    }}  
    ?>  
</body>
</html>