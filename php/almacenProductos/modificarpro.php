<?php 
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 
  if ($usuario == "") {
        echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
        echo "<h5 class='btn-warning'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'</a><button class='btn btn-success'>a un click</button></h1>";
           }else{
             echo "<h5 class='btn-warning'> esta logueado como: ". $usuario."</h1>";
           } 

$id=(isset($_GET['id'])    ? $_GET['id']    : '');
$traeid=$id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ingreso de productos</title>
	<link rel="stylesheet" href="../../css/almacenProductos/almacenProductos.css">
	<link rel="stylesheet" href="../../css/almacenProductos/modificarpro.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>    
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/almacenarProductos/almacenarProductos.js"></script>
    </head>
     <body class="aua">
	<header class="">
		 <div class="col-2 badge badge-success bordes"><</div>
		 <div class="col-8 badge badge-success bordes">Interfaz Usuario</div>
		 <!-- <a href="../login/login.php" class="btn btn-success letra"></a> -->

		 <form action="" method="post" enctype="multipart/form-data">
		<?php 
         $seleccionar="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroProducto=insertimgproducto.numRegistroProducto";
       $mostrartabla=mysqli_query($conexion,$seleccionar);
       while($fila = mysqli_fetch_array($mostrartabla)){
 		if ($traeid==$fila[2]){
      echo'<button onclick=this.form.action="volver1.php?id='.$fila[1].'" class="col-2 badge badge-success bordes float-right">volver</button>';
}}
		 ?>


         </form>
		 <br>
		          
         <div class="col-4 float-left">.</div>
		 <div class="col-2 badge badge-success bordes">Usuario:</div>
		 <div class="col-2 badge badge-success bordes"><?php echo $usuario; ?></div>
		 <div class="col-4 float-right">.</div>
		
	</header>
	<br><br><br>
     <?php  
 	$seleccionar="SELECT * FROM registroproductos INNER JOIN insertimgproducto ON registroproductos.numRegistroProducto=insertimgproducto.numRegistroProducto";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
 	while($fila = mysqli_fetch_array($mostrartabla)){
 		if ($traeid==$fila[2]) {

 			 echo '<!-- <label style="font-size:20px;" class="badge badge-success">si no desea modificar imagen selecione casilla <input type="checkbox" name="aprobar" id="aprobar"></label>  -->  
             <br>   <br>  <br>    
   <form action="" method="post" enctype="multipart/form-data">   
        
      
        	<section class="col-6 float-left" style="background:;display: inline-block;">
       <div class=" badge badge-success col-12  float-left"><img src="' .$fila[22].'" id="imagenPrevisualizacion" id="imagenPrevisualizacion" width="100%" height="320"></div>
       <div style="width:100%;" class="col-12 bordes badge badge-success"><input  type="file" id="seleccionArchivos" name="seleccionArchivos" accept=".jpg, .jpeg, .png" class="col-12 bordes" value="'.$fila[22].'"></div>         
       
        
        
        <br><br>


    </section> 
	
    <section class="col-6 float-left" style="background:;display: inline-block;" id="f" name="f">
    	<h1 class="badge badge-success bordes col-12">datos del Producto</h1>
    	<input type="hidden" id="tienda" name="tienda" class="form-control col-8" value="'.$fila[1].'">

         <h1 class="col-4 badge badge-success bordes">Producto</h1><input required maxlength="50" placeholder="chocolates" type="text" id="producto" name="producto" class="form-control col-8" value="'.$fila[4].'">

		    <h1 class="col-4 badge badge-success bordes">Descripción</h1><input required maxlength="50" placeholder="ferrero 249gr" type="text" id="descripcion" name="descripcion" class="form-control col-8" value="'.$fila[5].'">

               <h1 class="col-4 badge badge-success bordes">Embalaje X</h1><input required pattern="[0-9]*" placeholder="24" type="text" id="embalaje" name="embalaje" class="form-control col-8" value="'.$fila[6].'">

               <h1 class="col-4 badge badge-success bordes">Cantidad X</h1><input required pattern="[0-9]*" placeholder="24" type="text" id="cantidad" name="cantidad" class="form-control col-8" value="'.$fila[7].'">

	           <h1 class="col-4 badge badge-success bordes">Valor</h1><input required pattern="[0-9]*" placeholder="24000" type="number" id="valor" name="valor"onchange="sumado();sumado1()"class="form-control col-8" value="'.$fila[8].'">

	           <h1 class="col-4 badge badge-success bordes">Iva</h1><input required type="text" id="iva" name="iva" readonly class="form-control col-8" value="'.$fila[9].'">

	           <h1 class="col-4 badge badge-success bordes">Total+Iva</h1><input required pattern="[0-9]*" type="number" id="tiva" name="tiva" readonly class="form-control col-8" value="'.$fila[10].'">

	           <h1 class="col-4 badge badge-success bordes">Descuento %</h1><input required pattern="[0-9]*" placeholder="10" type="text" id="descuento" name="descuento" maxlength="2" onchange="sumado1()"class="form-control col-8" value="'.$fila[11].'">

	           
	           <h1 class="col-4 badge badge-success bordes">precio total</h1><input required pattern="[0-9]*" type="number" id="total" name="total" readonly class="form-control col-8" value="'.$fila[12].'">
                <br>

                 <button onclick=this.form.action="modificarpro1base.php?id=' .$fila[2]. '" class="col-2 badge badge-success bordes float-right">Cambiar</button>
	            
    </section>   



    </form>';

 	
 		}
 	}
 	?>
 
 </form>


     </body> 
</html>
