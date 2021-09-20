<?php
 session_start(); 
 include ("../conexion/conexion.php"); 
 session_unset(); session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="../../css/administrador/administrador.css" type="text/css"/>
	<link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png"/>
    <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"/> -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
</head>


<body style="zoom:135%;" class="jumbotron container-fluid col-lg-5 col-xs-6 col-md-6 letrat">

	 <br> 

	 <form action="../../index.html" class="letra">
		 <button type="submit" onclick=this.form.action="../../index.html" class="padding badge badge-secondary btn btn-warning float-right col-12"><= Ir pantalla principal</button>
      </form>

	<br><br>	
	<div>
		<div class="padding badge badge-secondary col-12"><h3 class="display-6">Administrador</h3></div>
	 
		   <form  method="post" action="">		   
		    <br>
			<input class="trans" type="text" placeholder="Usuario" id="usuario" name="usuario" minlength="8" maxlength="12" autofocus>
			<br><br>
			<input class="trans"  type="password" placeholder="Contraseña" id="contrasena" name="contrasena"  minlength="8" maxlength="12" title="ocho digitos alphanumericos max 12">
			<br><br>
			
			<button type="submit" class="trans btn btn-secondary" onclick=this.form.action="administradorval.php">Ingresar</button>		
			<br>
			<br>

			
	   </form>
<div>
   <a href="recuperarclave.php" class="blanco" style="color:white;">· Olvide mi contraseña</a>
   <br>
	<a href="" class="blanco" style="color:white;">· ¿Aun no te has registrado? ¡registrate!</a>
</div>
   </div>

         
	
</body>
</html>