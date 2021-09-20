<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
  $busqueda="SELECT numRegistroUsuario FROM registrousuario";		
  $result = mysqli_query($conexion,$busqueda); 

  $id=(isset($_GET['id'])    ? $_GET['id']    : '');
   $traeid=$id;
 
  // if ($usuario == "") {
  //    echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
  //    session_destroy();
  //        echo "<h5 class='btn-warning letrat1'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
  //          }else{
   $busqueda="SELECT numRegistroUsuario,nombre1,nombre2,apellido1,apellido2,tipo,documento,genero,contrasena,confirmar1,celular,email FROM registrousuario INNER JOIN usuariosclave ON registrousuario.numRegistroUsuario=usuariosclave.numRegistroGlobal 
                 INNER JOIN celular ON registrousuario.numRegistroUsuario=celular.numRegistroGlobal
                 INNER JOIN email ON registrousuario.numRegistroUsuario=email.numRegistroGlobal
                 INNER JOIN intereses ON registrousuario.documento=intereses.usuario";
   $result = mysqli_query($conexion,$busqueda);


 while($row = mysqli_fetch_row($result)){
            if ($id==$row[0]){

              echo "<div style='height:50px;width:100%;'class='bg-secondary float-left'><h5 class='bg-light float-left' style='padding:5px;color:black;'>". $usuario."</h5><a href='close.php'><button class='btn btn-warning float-right'>Volver </button></a></div>";
           }}
           // } 
           ?>
<!DOCTYPE html>
<html lang="en">
<head id="head">
	<meta charset="UTF-8">
	<title>Registrate</title>
	<!-- <link rel="stylesheet" href="../../css/registrate/registrate.css"> -->
	<link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>
	<!-- <link rel="stylesheet" href="../../css/comercios/mostrarproductos.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/registrate/registrate.js"></script>

  </head>

<body class="container-fluid letrat1">

	 <?php
	  $busqueda="SELECT numRegistroUsuario,nombre1,nombre2,apellido1,apellido2,tipo,documento,genero,contrasena,confirmar1,celular,email FROM registrousuario INNER JOIN usuariosclave ON registrousuario.numRegistroUsuario=usuariosclave.numRegistroGlobal 
                 INNER JOIN celular ON registrousuario.numRegistroUsuario=celular.numRegistroGlobal
                 INNER JOIN email ON registrousuario.numRegistroUsuario=email.numRegistroGlobal
                 INNER JOIN intereses ON registrousuario.documento=intereses.usuario";
	 

 // $busqueda="SELECT * FROM registrousuario INNER JOIN usuariosclave ON usuariosclave.usuario where tabla='registrousuario'";
 $result = mysqli_query($conexion,$busqueda); 
echo $id;
  while($row = mysqli_fetch_array($result)){
            if ($id==$row[0]){

              
            echo' 


	<header >
		<div class="col-12 btn btn-success letrat1">
			
		

		<div class=" col-3  badge badge-success"><h3 class="display-5 letrat1" style="font-size: 300%">Ciudad Verde Shop</h3></div><div id="b1" name="b1" class=" col-lg-4 col-5 col-xs-2 col-md-2 tamaño btn btn-success"><img src="../../img/index/body/actualizacion3/logo.gif" alt="logo" style="width: 15%"><img src="../../img/index/body/actualizacion3/logo.gif" alt="logo" style="width: 15%"><img src="../../img/index/body/actualizacion3/logo.gif" alt="logo" style="width: 15%"><img src="../../img/index/body/actualizacion3/logo.gif" alt="logo" style="width: 15%"><img src="../../img/index/body/actualizacion3/logo.gif" alt="logo" style="width: 15%"></div>
		<a href="../login/selecionperfil.php"><div class="col-3 padding badge badge-success btn btn-success"><h3 class="display-5 letrat1" style="font-size: 300%"><= ir a Home</h3></div></a>
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
			
			
      <form action="registrateEdicionBase.php" method="post" class="letrat1">
			<div class="col-4 float-left">
		    <br>
		    <label for="id">ID registro</label><input required readonly="readonly" maxlength="100" type="text" id="idr" name="idr" class="form-control" value='.$row["numRegistroUsuario"].'>		
			<label for="nombre1">Primer Nombre</label><input required maxlength="100" type="text" id="nombre1" name="nombre1"class="form-control" value='.$row["nombre1"].'>
			<label for="nombre2">Segundo Nombre</label><input required maxlength="100" type="text" id="nombre2" name="nombre2"class="form-control" value='.$row["nombre2"].'>
			<label for="apellido1">Primer Apellido</label><input required maxlength="100" type="text" id="apellido1" name="apellido1"class="form-control" value='.$row["apellido1"].'>
			<label for="apellido2">Segundo Apellido</label><input required maxlength="100" type="text" id="apellido2" name="apellido2"class="form-control" value='.$row["apellido2"].'>
             
            
			
			</div>

			<div class="col-4 float-left">
           
			<br>
 
			<label for="celular">Celular</label><input required maxlength="10"  pattern="[0-9]*" type="number" id="celular" name="celular" class="form-control" value='.$row["celular"].'>
			<label for="email">Email</label><input required maxlength="320" type="email" id="email" name="email" class="form-control" value='.$row["email"].' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
			<label for="genero" >Genero</label>
			<select name="genero" class="form-control" >
			 <option value="'.$row["genero"].'" selected>'.$row["genero"].'</option>
			  <option value="Masculino">Masculino</option> 
			  <option value="Femenino" >Femenino</option>
			  <option value="Indefinido">Undefined</option>
			</select>
			
			
			
						
			<!-- <label for="nombre">fecha</label><input required type="datatime" id="nombre" class="form-control case"> -->
			<!-- <label for="nombre">color</label><input required type="color" id="nombre" class="form-control"> -->
			
			
			<!-- <label for="recordar" class="form-check-label"><input required type="checkbox" class="form-check-input required"></label> -->
			</div>

			

			<div class="col-4 float-right">

		    <br>

            <label for="tipo">Tipo</label>
			<select name="tipo" class="form-control" value="" class="col-6">
			 <option value="'.$row["tipo"].'" selected>'.$row["tipo"].'</option>
			  <option value="Cedula">Cedula</option> 
			  <option value="tarjeta identidad">Tarjeta identidad</option>
			  <option value="cedula extranjeria">Cedula extranjeria</option>
			  <option value="permiso especial">Permiso especial</option>
			  
			</select>
			
			<label for="documento">Documento</label><input  required  type="text" id="documento" name="documento" class="form-control" onchange="subirusuario();"  readonly="readonly" minlength="5" maxlength="12" value='.$row["documento"].'>

			

		
			<label for="usuario">Usuario</label><input required minlength="8" maxlength="12" type="text" id="usuario" name="usuario" class="form-control" readonly="readonly" value='.$row["documento"].'>
			<label for="contrasena">Contraseña</label><input required type="password" id="contrasena" name="contrasena"class="form-control" minlength="8"  maxlength="12" title="contraseña mayor a 8 caracteres max 12" value='.$row["contrasena"].'>
			
			<label for="confirmar1">Confirmar Contraseña</label><input required type="password" id="confirmar1" name="confirmar1"class="form-control" minlength="8"  maxlength="12" title="contraseña mayor a 8 caracteres max 12" onchange="verificar();subirusuario();" value='.$row["confirmar1"].'>
            ';
		}} 
		 ?>
			
			 <?php
	$busqueda="SELECT registrousuario.numRegistroUsuario, intereses.* FROM registrousuario inner join intereses on registrousuario.documento=intereses.usuario;";
	 

 // $busqueda="SELECT * FROM registrousuario INNER JOIN usuariosclave ON usuariosclave.usuario where tabla='registrousuario'";
 $result = mysqli_query($conexion,$busqueda); 

  while($row = mysqli_fetch_array($result)){
            if ($id==$row[0]){
              
            echo' 		
			</div>			
            
			<label for="Intereses" class="col-12 text-center btn-success" style="">Seleciona tus Intereses</label>
			<!-- <textarea name="descripcion" id="" cols="100" rows="10"></textarea> -->
			<div  class="col-12" style="padding:0 15% 0 15%">	
			<label for="todos" style="font-size: small">( todos )<input  type="checkbox" value="todos" id="todos" name="todos" class="form-control" case></label>&nbsp;
			 

			<label for="Licores" style="font-size: small">( licores )<input  type="checkbox" value="Licores" id="Licores" name="Licores"class="form-control case"
			';
			 
             if ($row['interes1']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'					
			<label for="Panaderia"  style="font-size: small">(Panaderia)<input  type="checkbox" value="Panaderia" id="Panaderia" name="Panaderia"class="form-control case"
            ';
			 
             if ($row['interes2']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			
			<label for="Comidas Rapidas"  style="font-size: small">(Comida <br> Rapida)<input  type="checkbox" value="Comidasr" id="Comidasr" name="Comidasr"class="form-control case"

			';
			 
             if ($row['interes3']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Restaurante"  style="font-size: small">(Restaurante)<input  type="checkbox" value="Restaurante" id="Restaurante" name="Restaurante"class="form-control case"

			';
			 
             if ($row['interes4']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Asaderos"  style="font-size: small">(Asadero)<input  type="checkbox" value="Asaderos" id="Asaderos" name="Asaderos"class="form-control case"

			';
			 
             if ($row['interes5']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Tecnologia"  style="font-size: small">(Tecnologia)<input  type="checkbox" value="Tecnologia" id="Tecnologia" name="Tecnologia"class="form-control case"

			';
			 
             if ($row['interes6']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Supermercados" style="font-size: small">(Super <br>	mercado)<input  type="checkbox" value="Supermercados" id="Supermercados" name="Supermercados"class="form-control case"

			';
			 
             if ($row['interes7']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Droguerias" style="font-size: small">(Drogueria)<input  type="checkbox" value="Droguerias" id="Droguerias" name="Droguerias"class="form-control case"

			';
			 
             if ($row['interes8']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Mascotas" style="font-size: small">(Mascota)<input  type="checkbox" value="Mascotas" id="Mascotas" name="Mascotas"class="form-control case"

			';
			 
             if ($row['interes9']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Miscelaneas" style="font-size: small">(Miscelanea)<input  type="checkbox" value="Miscelaneas" id="Miscelaneas" name="Miscelaneas"class="form-control case"

			';
			 
             if ($row['interes10']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }

              echo'


				<label for="Profesiones" style="font-size: small">(Profesion)<input  type="checkbox" value="Profesiones" id="Profesiones" name="Profesiones"class="form-control case"

				';
			 
             if ($row['interes11']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Otros" style="font-size: small">(    -Otros-    )<input  type="checkbox" value="Otros" id="Otros" name="Otros"class="form-control case"

			';
			 
             if ($row['interes12']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }					 

             echo'


			<label for="Profesiones" style="font-size: small">(Gimnasio)<input  type="checkbox" value="Gimnasio" id="Gimnasio" name="Gimnasio"class="form-control case"

			';
			 
             if ($row['interes13']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Profesiones" style="font-size: small">(Guarderia)<input  type="checkbox" value="Guarderia" id="Guarderia" name="Guarderia"class="form-control case"

			';
			 
             if ($row['interes14']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Profesiones" style="font-size: small">(Belleza)<input  type="checkbox" value="Belleza" id="Belleza" name="Belleza"class="form-control case"

			';
			 
             if ($row['interes15']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Profesiones" style="font-size: small">(Vehiculos)<input  type="checkbox" value="Vehiculos" id="Vehiculos" name="Vehiculos"class="form-control case"

			';
			 
             if ($row['interes16']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'


			<label for="Profesiones" style="font-size: small">(Vivienda)<input  type="checkbox" value="Vivienda" id="Vivienda" name="Vivienda"class="
				form-control case"
               ';
			 
             if ($row['interes17']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             echo'

				<label for="Profesiones" style="font-size: small">(Trueque)<input  type="checkbox" value="Trueque" id="Trueque" name="Trueque"class="form-control case"


			  ';
			 
             if ($row['interes18']!="") {
              	echo 'checked></label>&nbsp;';
              }else{
              	echo '></label>&nbsp;';
              }			 

             	 

             echo'


			</div>	
			<br>
			
			<div class="col-8"><input type="submit" value="enviar" onclick=this.form.action="registrateEdicionBase.php?id='. $id .'" class="float-right btn btn-success col-6"></div>
            <br><br>		
		    

		</form>';
		}} 
		 ?>
	</body>		

  	<!-- //footer -->
				<?php
				include("../footer/footer.php")
				?>

	
</body>
</html>
