<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
  $busqueda="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroproducto=insertimgproducto.numRegistroProducto";
 $result = mysqli_query($conexion,$busqueda);

  $id=(isset($_GET['id'])    ? $_GET['id']    : '');
  $md=(isset($_GET['md'])    ? $_GET['md']    : '');
  $traeid=$id;
 
  // if ($usuario == "") {
  //    echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
  //    session_destroy();
  //        echo "<h5 class='btn-warning letrat1'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
  //          }else{
 while($row = mysqli_fetch_row($result)){
            if ($id==$row[2]){
               if($md=="md"){              
            echo "<h5 class='btn-warning letrat1'style='height:38px'>".$usuario."<a href='../Comercios/mostrarproductos.php?id=".$row[1]."'><button style='float:right;'class='btn btn-success'>Volver</button></a></h5>";
           // echo "<script>alert('$mc $id')</script>";
           }else{ echo "<h5 class='btn-warning letrat1'style='height:38px'>".$usuario."<a href='MostrarTienda.php?id=".$row[1]."'><button style='float:right;'class='btn btn-success'>Volver</button></a></h5>";
           // echo "<script>alert('$mc $id')</script>";{
            }
          }
        }
        
           // } 



?>
<!DOCTYPE html>
<html lang="es">
<head> 
  <meta charset="UTF-8"/>
  <title>Muestra Producto individual cliente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/crearTienda/producto1.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
 </head>
<body class="letrat">
 <?php 

 $busqueda="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroproducto=insertimgproducto.numRegistroProducto";
 $result = mysqli_query($conexion,$busqueda); 

  while($row = mysqli_fetch_row($result)){
            if ($id==$row[2]){

              
            echo"
  <section style=';display: inline-block;font-size:100%;' class='col-12'>

 <table class='col-12'>

            <tr>
              <th class='btn-secondary fondo' colspan='2'><img src='../almacenProductos/$row[22]' class='ajuste' alt=''></th>
            </tr>

            
            <tr>
              <th class='btn-secondary'><label class='label label-warning' style= value='Id'>Descripcion:</label></th>    
              <th style='width:100%;height:150px;border-radius:0px 20px 0px 20px;font-size:150%;background-color:white;'class='text-uppercase'>".$row[4]. "".""." " .$row[5]."</th>
            </tr>

           <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Id'>Id:</label></i></td>
              <td style='width:40%;' class='btn-success'><i><label class='label label-warning' value='Id'>".$row[2]."</label></i></td>     
            </tr>

           

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Valor'>Empacado x:</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning' value='Valor'>".$row[6]."</label></i></td>     
            </tr>

             

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Valor'>Cantidad en unidades</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning' value='Valor'>".$row[7]."</label></i></td>     
            </tr>

             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Precio Con iva</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[10]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>

                         
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Precio con Descuento</label></i></td>
              <td style='width:40%' class='btn-success'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>
                      

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning' value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%' class='btn-success'><i><input disabled type='button' value='Proximamente' class='btn-secondary' style='font-size:200%;'></i></td>     
            </tr>

           


             
      </table>

   
  </section>";
 
    }}  
    ?>  
</body>
</html>