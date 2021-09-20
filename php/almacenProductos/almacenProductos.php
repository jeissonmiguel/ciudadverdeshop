<?php 
include("../crearTienda/barraLog.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ingreso de productos</title>
  <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
	<link rel="stylesheet" href="../../css/almacenProductos/almacenProductos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>    
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/almacenarProductos/almacenarProductos.js"></script>
    <?php 
include("../conexion/conexion.php");
    //mensaje de inicio
     $busqueda = "SELECT * FROM registrotienda WHERE usuario='$usuario'";
      $nombre = mysqli_query($conexion,$busqueda);

          while ($row = mysqli_fetch_row($nombre)) {
            $nombretienda=$row[4];
            
           
            }
    
     $usuario =$_SESSION['logueado'];
     echo "<script>alert('Ingrese sus datos manualmente desde la interfaz o en modo lista usuario $usuario ');</script>";

     ?>
</head>
<body class="aua">
	<header class="">
		 <div class="col-2 badge badge-success bordes"><</div>
		 <div class="col-8 badge badge-success bordes">Interfaz Usuario</div>
		 <!-- <a href="../login/login.php" class="btn btn-success letra"></a> -->
		 <form action="">
		 <button type="submit" onclick=this.form.action="../login/selecionperfil.php" class="col-2 badge badge-success bordes btn-success">Salir</button>
         </form>
		 <br>
		          
         <div class="col-4 float-left">.</div>
		 <div class="col-2 badge badge-success bordes">Usuario:</div>
		 <div class="col-2 badge badge-success bordes"><?php echo $usuario; ?></div>


		 
		 

		 
		
	</header>
<br>
	<aside name="">
		
		<!-- 	<div class="col-5 float-left badge badge-success text-center">Logo <br><br><img src="../../img/index/body/Ciudad Verde Shop.gif" width="50%" height="170" style="border-radius:150px;"></div>


			<div class="col-2 float-left">
			   <h1 class="col-12 badge badge-success">Nombre Tienda <?php echo $usuario?></h1><input type="text" id="nTienda" name="nTienda" value="<?php echo $$nombretienda; ?>" class="form-control col-12 bordes text-center"> 
	           <h1 class="col-12 badge badge-success ">Nit</h1><input required type="text" id="nit" name="nit"  value="<?php echo $rut; ?>"c lass="form-control col-12 bordes text-center">
	        </div>
	        <div class="col-5 float-left badge badge-success text-center">Logo <br><br><img src="../../img/index/body/Ciudad Verde Shop.gif" width="50%" height="170" style="border-radius:150px;"></div> -->
	              
		

	</aside>
<br>

       <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" name="b1"  id="b1" class=" badge btn btn-success bordes w-75">crear lista</button></div>
        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" name="b2"  id="b2" class=" badge btn btn-success bordes w-75 ">leer lista</button></div>
        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" name="b3"  id="b3" class=" badge btn btn-success bordes w-75">modificar lista</button></div>
        <div class="col-3 float-left"><button onclick=this.form.action="../login/login.php" name="b4"  id="b4" class=" badge btn btn-success bordes w-75">borrar lista</button></div>


	<br><br>

	
	
	<form action="" method="post" enctype="multipart/form-data">
	
    <section class="col-6 float-left" style="background:;display: inline-block;" id="f1" name="f1">
    	<h1 class="badge badge-success bordes col-12">datos del Producto</h1> 

		    <h1 class="col-4 badge badge-success bordes">Producto</h1><input required placeholder="chocolates" type="text" id="producto" name="producto" class="form-control col-8">

		    <h1 class="col-4 badge badge-success bordes">Descripción</h1><input required placeholder="ferrero 249gr" type="text" id="descripcion" name="descripcion" class="form-control col-8">

               <h1 class="col-4 badge badge-success bordes">Embalaje X</h1><input required placeholder="24" type="text" id="embalaje" name="embalaje" class="form-control col-8">

                 <h1 class="col-4 badge badge-success bordes">Cantidad</h1><input required placeholder="unidades" type="text" id="cantidad" name="cantidad" class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Valor</h1><input required placeholder="24000" type="number" id="valor" name="valor"onchange="sumado();sumado1()"class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Iva</h1><input required type="text" id="iva" name="iva" value="19" disabled class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Total+Iva</h1><input required type="number" id="tiva" name="tiva" disabled class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">Descuento %</h1><input required placeholder="10" type="text" id="descuento" name="descuento" value="" maxlength="2" onchange="sumado1()"class="form-control col-8">

	           <h1 class="col-4 badge badge-success bordes">precio total</h1><input required type="number" id="total" name="total" disabled class="form-control col-8">
                <br>
	            <button onclick=this.form.action="../almacenProductos/almacenProductosBase.php" class="col-2 badge badge-success bordes float-right">enviar</button>
    </section>   

    <section class="col-6 float-left" style="background:;display: inline-block;" id="f2" name="f2">
    	 <div class="bordes badge badge-success col-12 cuadro espacio float-left"><img id="imagenPrevisualizacion" width="100%" height="300"></div>
        <div style="width:100%;" class="col-12 bordes badge badge-success"><input type="file" id="seleccionArchivos" required name="seleccionArchivos"accept="image/*" class="col-12 bordes" ></div>

    </section> 

    </form> 

    <section>
    	
<form action='MostrarTienda.php' method='post'>
	<!-- e.preventDefault(); -->
<div id="registrotienda" name="registrotienda">
	<label class="padding badge badge-success">Estas son tus tiendas registradas =)</label>
  <?php
 // include ("../Conexion/conexion.php");
       
     
    
      $busqueda="SELECT * FROM registrotienda WHERE usuario='$usuario'";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
        echo '<script src="../../Js/codensa/suma_codensa.js"></script>';
        echo '<script src="../../Js/consultaref.js"></script>'; 

     
          
          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>NombreTienda</b></td>
          <td><b>Rut</b></td>
          <td><b>NumContrato1</b></td>
          <td><b>Seccion</b></td>
          <td><b>Ciudad1</b></td>
          
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>


          
          
          </tr>\n";

          while ($row = mysqli_fetch_array($result)) {
           echo "<form action='../crearTienda/MostrarTienda.php' method='post'>";
           echo"<tr>
             
            <td><a href='../crearTienda/MostrarTienda.php?id=". $row[0] ."'>$row[0]</a></td>           
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            echo "</form>";
            }
         

            
          echo "</table>\n";
          
    ?>
    </form>
</div>  
<br>
<div id="registroempresa" name="registroempresa">
	<label class="padding badge badge-success">Estas son tus empresas registradas =)</label>
  <?php
 // include ("../Conexion/conexion.php");
       
     
    
      $busqueda="SELECT * FROM registroempresa WHERE usuario='$usuario'";
      $result = mysqli_query($conexion,$busqueda);
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
        echo '<script src="../../Js/codensa/suma_codensa.js"></script>';
        echo '<script src="../../Js/consultaref.js"></script>'; 

     

          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>NombreEmpresa</b></td>
          <td><b>Nit</b></td>
          <td><b>NumContrato2</b></td>
          <td><b>Seccion</b></td>
          <td><b>Ciudad2</b></td>
          
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          </tr>\n";

          while ($row = mysqli_fetch_row($result)) {
           echo"<tr>
            <td><a href='../crearTienda/mostrarTienda.php'>$row[0]</a></td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
           
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            }
         

            
          echo "</table>\n";
    ?>
</div>  


    </section>


</body>
</html>