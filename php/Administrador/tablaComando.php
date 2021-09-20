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
    <link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" / -->

    <script src="../../js/administrador/tablacomando/tablaComando.js"></script>
</head>

<body class="aua" style="background-color: #DFFAD6; zoom:150%; width:100%;height:70%;padding:20px 20px 20px 20px;word-break: break-all;">

     <div class="col-12 col-lg-12 text-center" style="display: inline-block;">     
            <img src="../../img/index/body/actualizacion3/presentacion2.gif"  class="col-12 col-lg-3" style="border-radius:40px;">
          </div> 

    <header class="cuadro" style="width: 100%;">


       
        <div class="col-12 col-lg-4 badge badge-secondary" style="display: inline-block;"><label class="display-5" style="width: 30%;font-size:100%;color:white;">Ciudad Verde Shop</label> 
        </div>

       

        <div class="col-12 col-lg-4 badge badge-secondary" style="display: inline-block;"><label style="font-size: 100%;color:white;">Pendiente</label>             
        </div>


         <div class="col-12 col-lg-3 badge badge-warning btn-light" style="height:30px;font-size: 100%;display: inline-block"><a href="Administrador.php"><label class="display-5" style="color:white;">Volver</label></a><div>

    </header>    
    
      <!-- <div class="col-1 col-lg-3"  style="display: inline-block;">
            <img src="../../img/index/body/actualizacion3/presentacion1.gif" width="100%" height="170" style="border-radius:40px;">            
          </div>  -->

          

      <aside class="col-12 col-lg-12 badge"style="display: inline-block;">

       

          <div class="col-10 col-lg-6" style="display: inline-block;">

             <form style="background-color: white;border-radius:50px;"class="col-12" method="post" target="frame4" enctype="multipart/form-data" value="registrador">
                      
                    <div class="col-12 col-lg-12" style="background-color: white;border-radius:50px;">
                      <h1  class="badge-secondary" style="font-size: 100%;">Administrador <br><?php echo $logueado2;?></h1> 
                                            
                       <input  name="Busqueda" list="lista" class="btn-toolbar col-12" type="search" autofocus onfocus="this.value=''" title="busqueda por usuarios "  placeholder="Busqueda por Usuarios"  style="width: 100%;float: center;word-break: break-all;">
                              <datalist  id="lista" class="col-12">
                                <option value=""></option>
                                <option value="">Seleccione:</option>
                                <?php
                                  $busqueda=  "SELECT * FROM usuariosclave inner join insertimglogo on usuariosclave.numRegistroGlobal=insertimglogo.numRegistroGlobal
                                  inner join fecha on usuariosclave.numRegistroGlobal=fecha.numRegistroGlobal";
                                   $result = mysqli_query($conexion,$busqueda);
                                   
                                  while ($valores = mysqli_fetch_array($result)) {    
                                    $numero=$numero+1;
                                    
                                    
                                    // $numero1=count($valores);
                                 echo '<option style="word-break: break-all;"value="'.$valores[0].'">#'.$numero.'//'.'<br>'.' User: <br>'.$valores[1].' Nombre: '.$valores["nombrecomercio"].' fecha: '.$valores["fecha"].' //';

                                    // tener en cuenta el error de sincronizacion se no se cargan imagenes <option src="'.$valores[0].'" value="'.$valores[1].'"></option>
                                  }



                                ?>
                              </datalist>

                        </div>
                        <br>
                        <label class="btn-warning col-12" style="font-size: 100%;">Busquedas</label>
                        <div class="col-12">
                            <button id="boton11" name="boton11"  value="buscar" onclick=this.form.action="busquedausuario.php" class="btn btn-warning col-12" style="font-size: 100%;">X usuario</button>
                        </div>
                        <div class="col-12">
                            <button id="boton11" name="boton11"  value="buscar" onclick=this.form.action="busquedacomercio.php" class="btn btn-info col-12" style="font-size: 100%;">X comercio</button>
                        </div>                      
                        <div class="col-12"> 
                            <button id="boton11" name="boton11"  value="buscar" onclick=this.form.action="busquedatodo.php" class="btn btn-danger col-12" style="font-size: 100%;">todo</button>
                       </div>
                       <div class="col-12">
                            <button id="boton11" name="boton11"  value="buscar" onclick=this.form.action="busquedaavanzada.php" class="btn btn-success col-12" style="font-size: 100%;">X avazada</button> 
                       </div>
                         
                </div>
                      
                      

            </form>
          </div>


    
   
</aside>
  
    


<aside class="col-12 badge "style="display: inline-block;" id="busqueda" name="busqueda"> 
        <iframe id="frame4" name="frame4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  width="100%" height="1000"  float="center">
        </iframe>
</aside>


</body>
</html>