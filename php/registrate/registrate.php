<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrate</title>
	<link rel="stylesheet" href="../../css/registrate/registrate.css">
	<link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>
	<!-- <link rel="stylesheet" href="../../css/comercios/mostrarproductos.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

    <script src="../../js/registrate/registrate.js"></script>

  </head>

<body class="container-fluid letrat1">


	<header >
		<div class="col-12 btn btn-success letrat1">
			
		

		<a href="../../index.html"><div class="badge badge-success btn btn-warning col-12 col-lg-3"><h3 class="display-5 letrat1 col-12 col-lg-3" style="font-size: 300%">Ciudad Verde Shop</h3></div></a>
		<img src="../../img/index/body/actualizacion3/logo.gif" alt="logo" style="width: 80px">		
		<a href="../login/selecionperfil.php"><div class="col-6 col-lg-3 padding badge badge-warning btn btn-success"><h3 class="display-5 letrat1 col-12 col-lg-3" style="font-size: 300%">Home</h3></div></a>
		<h1 >Registro Usuario</h1>
		</div>
		<br>     
					

		<!-- <div class="padding badge badge-success"><h3 class="display-5 letrat1" style="font-size: 300%">Ciudad Verde Shop</h3></div>
		<a href="../../index.html"><div class="padding btn btn-success btn btn-warning float-right"><h3 class="display-5 letrat1" style="font-size: 200%">Volver</h3></div></a>
		<br>	 -->
		<!-- <div  class="container-fluid">
			<marquee  loop="0" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">
			<div class="col-1 float-left"></div>
			 <h1 class="btn btn-success letrat1">Diligencia tus datos la Creación del usuario</h1></marquee>
		 </div>	  -->		
		<!-- <div class="col-12 btn btn-success letrat1">
			<h1 >Registro Usuario</h1>
		</div> -->
	</header>				
		
	<body class="bordes">
			
			
      <form action="registratebase.php" method="post" class="letrat1">
			<div class="col-12 col-lg-4 float-left">
		    <br>		
			<label for="nombre1">Primer Nombre</label><input required maxlength="100" type="text" id="nombre1" name="nombre1" class="form-control" >
			<label for="nombre2">Segundo Nombre</label><input required maxlength="100" type="text" id="nombre2" name="nombre2"class="form-control">
			<label for="apellido1">Primer Apellido</label><input required maxlength="100" type="text" id="apellido1" name="apellido1"class="form-control">
			<label for="apellido2">Segundo Apellido</label><input required maxlength="100" type="text" id="apellido2" name="apellido2"class="form-control">
             
            
			
			</div>

			<div class="col-12 col-lg-4 float-left">
           
			<br>
 
			<label for="celular">Celular</label><input required maxlength="10"  pattern="[0-9]*" type="number" id="celular" name="celular" class="form-control">
			<label for="email">Email</label><input required maxlength="320" type="email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
			<label for="genero">Genero</label>
			<select name="genero" class="form-control" value="">
			 <option value="" selected></option>
			  <option value="Masculino">Masculino</option> 
			  <option value="Femenino" >Femenino</option>
			  <option value="Indefinido">Undefined</option>
			</select>
			
			
			
						
			<!-- <label for="nombre">fecha</label><input required type="datatime" id="nombre" class="form-control case"> -->
			<!-- <label for="nombre">color</label><input required type="color" id="nombre" class="form-control"> -->
			
			
			<!-- <label for="recordar" class="form-check-label"><input required type="checkbox" class="form-check-input required"></label> -->
			</div>

			

			<div class="col-12 col-lg-4 float-right">

		    <br>

            <label for="tipo">Tipo</label>
			<select name="tipo" class="form-control" value="" class="col-6">
			 <option value="" selected></option>
			  <option value="Cedula">Cedula</option> 
			  <option value="tarjeta identidad">Tarjeta identidad</option>
			  <option value="cedula extranjeria">Cedula extranjeria</option>
			  <option value="permiso especial">Permiso especial</option>
			  
			</select>
			
			<label for="documento">Documento</label><input  required  type="text" id="documento" name="documento" class="form-control" onchange="subirusuario();"  minlength="5" maxlength="12">

			

		
			<label for="usuario">Usuario</label><input required minlength="8" maxlength="12" type="text" id="usuario" name="usuario" class="form-control" readonly="readonly">
			<label for="contrasena">Contraseña</label><input required type="password" id="contrasena" name="contrasena"class="form-control" minlength="8"  maxlength="12" title="contraseña mayor a 8 caracteres max 12">
			
			<label for="confirmar1">Confirmar Contraseña</label><input required type="password" id="confirmar1" name="confirmar1"class="form-control" minlength="8"  maxlength="12" title="contraseña mayor a 8 caracteres max 12" onchange="verificar();subirusuario();">
             
					
			</div>
			<br><br>			
            
			<label for="Intereses" class="col-12 text-center btn-success" style="font-size: 120%">Seleciona tus Intereses</label>
			<!-- <textarea name="descripcion" id="" cols="100" rows="10"></textarea> -->
			<div  class="col-12" style="padding:0 15% 0 15%">	
			<label for="todos" style="font-size: 120%">( todos )<input  type="checkbox" value="todos" id="todos" name="todos" class="form-control"></label>&nbsp;
			<label for="Licores" style="font-size: 120%">( licores )<input  type="checkbox" value="Licores" id="Licores" name="Licores"class="form-control case"></label>&nbsp;		
			<label for="Panaderia"  style="font-size: 120%">(Panaderia)<input  type="checkbox" value="Panaderia" id="Panaderia" name="Panaderia"class="form-control case"></label>&nbsp;
			<label for="Comidas Rapidas"  style="font-size: 120%">(Comida <br> Rapida)<input  type="checkbox" value="Comidasr" id="Comidasr" name="Comidasr"class="form-control case"></label>&nbsp;
			<label for="Restaurante"  style="font-size: 120%">(Restaurante)<input  type="checkbox" value="Restaurante" id="Restaurante" name="Restaurante"class="form-control case"></label>&nbsp;
			<label for="Asaderos"  style="font-size: 120%">(Asadero)<input  type="checkbox" value="Asaderos" id="Asaderos" name="Asaderos"class="form-control case"></label>&nbsp;			
			<label for="Tecnologia"  style="font-size: 120%">(Tecnologia)<input  type="checkbox" value="Tecnologia" id="Tecnologia" name="Tecnologia"class="form-control case"></label>&nbsp;
			<label for="Supermercados" style="font-size: 120%">(Super <br>	mercado)<input  type="checkbox" value="Supermercados" id="Supermercados" name="Supermercados"class="form-control case"></label>&nbsp;
			<label for="Droguerias" style="font-size: 120%">(Drogueria)<input  type="checkbox" value="Droguerias" id="Droguerias" name="Droguerias"class="form-control case"></label>&nbsp;
			<label for="Mascotas" style="font-size: 120%">(Mascota)<input  type="checkbox" value="Mascotas" id="Mascotas" name="Mascotas"class="form-control case"></label>&nbsp;
			<label for="Miscelaneas" style="font-size: 120%">(Miscelanea)<input  type="checkbox" value="Miscelaneas" id="Miscelaneas" name="Miscelaneas"class="form-control case"></label>&nbsp;						
			<label for="Profesiones" style="font-size: 120%">(Gimnasio)<input  type="checkbox" value="Gimnasio" id="Gimnasio" name="Gimnasio"class="form-control case"></label>&nbsp;
			<label for="Profesiones" style="font-size: 120%">(Guarderia)<input  type="checkbox" value="Guarderia" id="Guarderia" name="Guarderia"class="form-control case"></label>&nbsp;
			<label for="Profesiones" style="font-size: 120%">(Belleza)<input  type="checkbox" value="Belleza" id="Belleza" name="Belleza"class="form-control case"></label>&nbsp;
			<label for="Profesiones" style="font-size: 120%">(Vehiculos)<input  type="checkbox" value="Vehiculos" id="Vehiculos" name="Vehiculos"class="form-control case"></label>&nbsp;
			<label for="Profesiones" style="font-size: 120%">(Vivienda)<input  type="checkbox" value="Vivienda" id="Vivienda" name="Vivienda"class="
				form-control case"></label>&nbsp;
				<label for="Profesiones" style="font-size: 120%">(Trueque)<input  type="checkbox" value="Trueque" id="Trueque" name="Trueque"class="form-control case"></label>&nbsp;
				<label for="Profesiones" style="font-size: 120%">(Profesion)<input  type="checkbox" value="Profesiones" id="Profesiones" name="Profesiones"class="form-control case"></label>&nbsp;			
			<label for="Otros" style="font-size: 120%">(    -Otros-    )<input  type="checkbox" value="Otros" id="Otros" name="Otros"class="form-control case"></label>&nbsp;
			</div>	
			<br>
			
			<div class="col-8"><input style="font-size: 120%" type="submit" value="enviar" onclick=this.form.action="registratebase.php" class="float-right btn btn-success col-6"></div>
            <br><br>		
		    

		</form>
	</body>		

  	<!-- //footer -->
				<?php
				include("../footer/footer.php")
				?>

	
</body>
</html>
