<?php
  session_start();
  include("../conexion/conexion.php");
  $logueado2 =$_SESSION['logueado'];
  if ($logueado2 == "") {
     echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
     session_destroy();
      echo "<h5 class='btn-warning'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
      }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla Comando</title>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link rel="stylesheet" href="../../css/administrador/administrador.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/administrador/tablacomando/tablaComando.js"></script>
</head>
<header style="zoom:100%">
    <aside class="cuadro">

    <div class="padding badge badge-info" style="width: 70%;"><h5 class="display-5" style="width: 30%;height:25px;">Ciudad Verde Shop</h5></div> 
    <a href="Administrador.php"><div class="padding badge badge-info btn btn-info float-right" style="width: 30%;"><h5 class="display-5">Volver</h5></div></a>
    <br>

      <div class="col-8 badge "style="display: inline-block;">

         <div class="col-6"  style="display: inline-block;">
            <img src="../../img/index/body/Ciudad Verde Shop.gif" width="100%" height="170" style="border-radius:40px;">
            
          </div>  

          <div class="col-6" style="display: inline-block;">
             <form style="background-color: white;border-radius:50px;"class="col-12 float-left" method="post" target="frame4" enctype="multipart/form-data" value="registrador" >
                      
                    <div class="col-12" style="background-color: white;border-radius:50px;">
                      <h1  class="badge badge-info">Administrador <?php echo $logueado2;?></h1> 
                                            
                       <input  name="Busqueda" list="lista" class="btn-toolbar col-12" type="search" autofocus onfocus="this.value=''" title="busqueda por usuarios "  placeholder="Busqueda por Usuarios" maxlength="11" style="width: 100%;float: center;">
                              <datalist  id="lista" class="col-12">
                                <option value=""></option>
                                <option value="">Seleccione:</option>
                                <?php
                                  $busqueda=  "SELECT * FROM usuariosclave inner join insertimglogo on usuariosclave.numRegistroGlobal=insertimglogo.numRegistroGlobal";
                                   $result = mysqli_query($conexion,$busqueda);
                                   
                                  while ($valores = mysqli_fetch_array($result)) {    
                                    $numero=$numero+1; 
                                    echo '<option value="'.$valores[0].'">#'.$numero.'// Usuario: '.$valores[1].' // Nombre comercio: '.$valores[8].'//</option>';
                                    // tener en cuenta el error de sincronizacion se no se cargan imagenes
                                  }



                                ?>
                              </datalist>

                              <!--  -->

                                                        
                                 <!--  -->
                        </div>
                        <br>
                           <div class="col-12">
                             <button id="boton11" name="boton11"  value="buscar" onclick=this.form.action="busquedausuario.php" class="btn btn-info col-6">Buscar por usuario</button>
                            <button id="boton11" name="boton11"  value="buscar" onclick=this.form.action="busquedacomercio.php" class="btn btn-info col-6">Buscar por comercio</button>                       
                         
                      </div>
                      <br>
                       <div class="col-12"> 
                       <button id="boton11" name="boton11"  value="buscar" onclick=this.form.action="busquedatodo.php" class="btn btn-info col-6">todo</button> 
                       </div>

            </form>
          </div>


      <div class="col-6" style="display: inline-block;">     
            <img src="../../img/index/body/Ciudad Verde Shop.gif" width="100%" height="170" style="border-radius:40px;">
         </div>
      </div>
    
<body style="background-color: #B0E3F5">

<div id="busqueda" name="busqueda"> 

 <iframe id="frame4" name="frame4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  width="100%" height="1000"  float="center"></iframe>

</div>


</body>
</html>