<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal";
     
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
            echo "<h5 class='btn-info letrat1'style='height:38px'>". $usuario."<a href='../Comercios/mostrarproductos.php?id=".$row[0]."'><button style='float:right;'class='btn btn-warning'>Volver</button></a></h5>";}}
           // } 



?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/crearTienda/producto1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<body class="letrat">
 <?php 

  $busqueda= "SELECT * FROM  registroempresa  INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal INNER JOIN redsocial ON registroempresa.numRegistroEmpresa=redsocial.numRegistroGlobal INNER JOIN paginaweb ON registroempresa.numRegistroEmpresa=paginaweb.numRegistroGlobal";
     
     // $busqueda = "SELECT * FROM registrotienda WHERE seccion='$licores'";
     $result = mysqli_query($conexion,$busqueda);
  while($row = mysqli_fetch_row($result)){
            if ($id==$row[0]){

              
            echo"
  <section style=';display: inline-block;font-size:100%;' class='col-12'>

 <table class='col-12 '>

            <tr>
              <th class='btn-secondary fondo' colspan='2'><img src='../crearTienda/$row[36] ' class='ajuste' alt=''></th>
            </tr>

            
            <tr>
              <th class='btn-secondary'><label class='label label-warning' style= value='Id'>Nombre de la tienda</label></th>    
              <th style='width:100%;height:150px;border-radius:0px 20px 0px 20px;font-size:150%;background-color:white;'class='text-uppercase'>" .$row[5]."</th>
            </tr>   
            
             <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'>Contacto Whatsapp</label></i></td>
             <td style='width:40%' class='btn-info'><i><a href='https://api.whatsapp.com/send?phone=57$row[11]' target='_blank' style='color:white'><img src='../../img/interfazusuario/whats.jpg' style='width:80px;heigth:100%;'>click</a></i></td>
             </tr>

            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Usuario'> Seccion</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Usuario'>".$row[6]."</label></i></td>     
            </tr>


            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Nit'>Numero de contacto</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Nit'>".$row[11]."</label></i></td>     
            </tr>

           
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Producto'>Ubicación</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Producto'>".$row[19]. ""."/"." " .$row[20]."</label></i></td>     
            </tr>

            
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descripcion'>Direccion</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Descripcion'>".$row[21]."</label></i></td>     
            </tr>

           <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Id'>Id:</label></i></td>
              <td style='width:40%;' class='btn-info'><i><label class='label label-warning' value='Id'>".$row[0]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Rut'>Nit:</label></i></td>
              <td style='width:40%;' class='btn-info'><i><label class='label label-warning' value='Id'>".$row[3]."</label></i></td>     
            </tr>             
             

           
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Valor'>Email</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Valor'>".$row[15]."</label></i></td>     
            </tr>

            <tr>
              <td  colspam='2'style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>Ver sus Productos</i></td> 
              <td style='width:40%;padding:10px 10px 10px 10px;' class='btn-info'><i><a href='http://localhost/proyectos%20HTML/ciudadverdeshop/php/Comercios/mostrarproductos.php?id=".$row[0]."'><button class='btn btn-secondary' style='width:100%;'>ingresar</button></a></i></td>                 
            </tr>

             <tr>
              <td  colspam='2'style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>Califícame</i></td> 
              <td style='width:40%;padding:10px 10px 10px 10px;' class='btn-info'><i><a href='../calificame/calificame.php?id=".$row[0]."&id1=".$row[5]."&id2=".$row[2]."'><button class='btn btn-secondary' style='width:100%;'>ingresar</button></a></i></td>                 
            </tr> 
            
            <tr>
              <td  colspam='2'style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>link de tu comercio para que lo compartas</i></td> 
              <td style='width:40%;padding:10px 10px 10px 10px;' class='btn-info'><i><textarea style='width:80%;height:50px;' class='label label-warning' value='Tiva'>https://ciudadverdeshop.000webhostapp.com/php/crearTienda/muestraComercioTienda.php?id=".$row[0]."</textarea></i></td>                 
            </tr> 


             <tr>
              <td  colspam='2'style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>Red Social</i></td> 
              <td style='width:40%;padding:10px 10px 10px 10px;' class='btn-info'><i><a href='$row[41]' target='_blank'><textarea style='width:80%;height:50px;' class='label label-warning' value='Tiva'>".$row[41]."</textarea></a></i></td>                 
            </tr> 

              <tr>
              <td  colspam='2'style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Tiva'>Pagina web</i></td> 
              <td style='width:40%;padding:10px 10px 10px 10px;' class='btn-info'><i><a href='$row[45]' target='_blank'><textarea style='width:80%;height:50px;' class='label label-warning' value='Tiva'>".$row[45]."</textarea></a></i></td>                 
            </tr> 

                       
          
             <!--
            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Tiva:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Descuento'>".$row[0]."</label></i></td>     
            </tr>

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Descuento:</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Descuento'>".$row[0]."</label></i></td>     
            </tr>
            
             
             <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-secondary'><i><label class='label label-warning' value='Descuento'>Precio de venta</label></i></td>
              <td style='width:40%' class='btn-info'><i><label class='label label-warning' value='Descuento'><i></b>$";?>

              <?php error_reporting(0);$numero=number_format($row[12]); echo $numero;
                    echo "</i></label></i></td>     
            </tr>
                      

            <tr>
              <td style='width:40%;border-radius:0px 20px 0px 20px;' class='btn-danger'><i><label class='label label-warning' value='Descuento'>Agregar al Carrito</label></i></td>
              <td style='width:40%' class='btn-info'><i><input disabled type='button' value='Proximamente' class='btn-secondary' style='font-size:200%;'></i></td>     
            </tr>
            -->
           


             
      </table>";
    echo "<label style='width:100%;'class='btn-info text-center'>comentarios ↓ </label><br>";
        include('busquedaComentario.php');

   
  echo"</section>";
 
    }}  
    ?>  
</body>
</html>