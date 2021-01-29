<?php
session_start();
 include("../conexion/conexion.php"); 
 $id=(isset($_GET['id'])    ? $_GET['id']    : '');
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
  // if ($usuario == "") {
  //     echo "<h5  class='btn-warning'> no estas logueado navegas como invitado  ,que esperas registrate = ) <a href='../registrate/registrate.php'><button class='btn btn-success'> a un click </button></a></h5>";
  //     }else{
  //       echo "<h5 class='btn-warning letrat'style='height:38px'> esta logueado como: ". $usuario."<a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-success'>Finalizar session</button></a><a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-success'></button></a></h5>"; 

  //     } 
  
  if ($usuario == "") {
          echo "<script>alert('usted no tiene autorizacion');window.location='../login/login.php'</script>";
          session_destroy();
           } 
  

$busqueda = "SELECT * FROM registrousuario WHERE documento='$usuario'";
      $nombre = mysqli_query($conexion,$busqueda);

          while ($row = mysqli_fetch_row($nombre)) {
            $documento= $row[4];
            $nombre1= $row[5];
            $nombre2= $row[6];
            $apellido1= $row[7];
            $apellido2= $row[8];

            }

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Tienda</title>
	<link rel="stylesheet" href="../../css/crearTienda/crearTienda.css">
	<link rel="stylesheet" href="../../css/footer/footerglob.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>
    <script src="../../js/crearTienda/verificacion.js"></script>
    <script src="../../js/crearTienda/mostrarimagen.js"></script>
   <!--  <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

  </head>

<body class="" style="background-color: #DFFAD6; zoom:85%;width:1550px">



		
	<header class="">


		<div class=" col-3 padding badge badge-success"><h3 class="display-5 letrat1" style="font-size: 300%">Ciudad Verde Shop</h3></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="b1" name="b1" class="col-5 tamaño badge badge-secondary btn btn-secondary"><h3 class="display-5 letrat1" style="font-size: 300%">Presiona para Ver Tus registros</h3></div>
		<a href="../login/selecionperfil.php"><div class="col-3 padding badge badge-success btn btn-success float-right"><h3 class="display-5 letrat1" style="font-size: 300%"><= ir a Home</h3></div></a>
		<br><br>

		<div class="col-12 tamaño badge badge-success">
			<div id="b0" name="b0" class="col-4 tamaño badge badge-danger btn btn-danger"><h1 class="letrat1" style="font-size: 300%">Registro Producto ó servicio</h1></div><div id="b2" name="b2" class="col-4 tamaño badge badge-warning btn btn-warning"><h1 class="letrat1" style="font-size: 300%">Registro Tienda</h1></div><div id="b3" name="b3" class="col-4 tamaño badge badge-success btn btn-success"><h1 class="letrat1" style="font-size: 300%">Registro Empresa</h1></div>
		</div>
        
			<br>
		<div  class="container-fluid">
			<marquee  loop="0" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">
			<div class="col-1 float-left"></div>
			 <h1 class="btn btn-success letrat1" style="font-size: 100%">Estas logueado como usuario <?php echo $documento?>, <?php echo $nombre1," ", $nombre2?> Presiona el tipo de comercio que usas y diligencia los datos</h1></marquee>
		 </div>
		

    <!--    empresas  -->
		<form id="f1" name="f1" action="CrearEmpresaBase.php" method="post" enctype="multipart/form-data" class="letrat1">

			<div class="col-6 float-left">
					
                 <label for="usuario2">UsuarioRegistro</label><input required type="text" id="usuario2" name="usuario2" value="<?php include("../conexion/conexion.php"); echo $usuario;?>" class="form-control" readonly="readonly">
                 <div class="col-6 float-left">
				 <label for="nombreempresa">Nombre de la Empresa</label><input required type="text" id="nombreEmpresa" name="nombreEmpresa" class="form-control">
		         <label for="nit"><a href="https://linea.ccb.org.co/CertificadosElectronicosR/Index.html#/inicio" target="_blank" title="¿Que es el nit ve a link de este enlace?">Nit(Registro Camara comercio)</a></label><input required type="text" id="nit" name="nit" class="form-control">
		         </div> 

		         <div class="col-6 float-left">
		         	<label for="nombreempresa">Descripcion de tu Empresa</label>
		         	<textarea style="width: 100%;height: 103px;" required id="descripcion2"  name="descripcion2" maxlength="50"></textarea>
		         </div> 

		          <div class="col-6 float-left inline" style="padding: 0 15px 0 15px;">
		         	<label for="seleccionArchivos" class="col-12 success">Imagen Logo ó producto</label>
		         	<div class=" btn btn-success col-12  float-left" ><img id="imagenPrevisualizacion1" width="100%" height="200"></div>
			        <div style="width:100%;" class="col-12 bordes btn btn-success"><input required type="file" id="seleccionArchivos1" name="imagen1" accept="image/*" class="col-12 bordes" ></div>
				  
				</div> 		         

		         <div class="col-6 float-left">
	             <label for="ciudad2">Ciudad</label><input required type="text" id="ciudad2" name="ciudad2" class="form-control">
	             <label for="barrio2">Barrio</label><input required type="text" id="barrio2" name="barrio2" class="form-control">
	             <label for="direccion2">Direccion</label><input required type="text" id="direccion2" name="direccion2" class="form-control">
		         </div>

		        

				

		         <div class="col-6 float-left">
	             <label for="Coordenadas2">Coordenadas (opcional) <br><a href="https://www.google.com/maps/place/Ciudad+Verde,+Soacha,+Cundinamarca/@4.5981808,-74.2367544,14z/data=" target="blank"> Ve a maps Consigue tu ubicación</a></label><input required type="text" id="coordenadas2" name="coordenadas2" class="form-control">

	             

	             <div class="col-3 float-left inline">
	             <label for="compartir2">Compartir ubicacion?</label>
	             <select name="compartir2" id="compartir2"class="form-control" value="">
						 <option value="" selected></option>
						  <option value="1">Si</option> 
						  <option value="0">no</option>
				 </select>
				 </div>
                <div class="col-3 float-left inline">
				<label for="Domicilios2">Realiza domicilios?</label>
	             <select name="domicilios2" id="domicilios2"class="form-control" value="">
						 <option value="" selected></option>
						  <option value="1">Si</option> 
						  <option value="0">no</option>
				 </select>	

				  </div>	  
	             </div>


	             </div> 
					
				<div class="col-3 float-left">
					 
				<!-- segunda columna -->	
				 <label for="seccion">Seccion</label>
						<select name="seccion2" class="form-control" value="">
						 <option value="" selected></option>
						  <option value="Licores">Licores</option> 
						  <option value="Panaderia" >Panaderia</option>
						  <option value="Comida_Rapidas">Comida_Rapidas</option>
						  <option value="Restaurantes">Restaurantes</option>
						   <option value="Asaderos">Asaderos</option>
						    <option value="Electrodomesticos">Tecnologia</option>
						    <option value="Superemercados">Supermercados</option> 
						  <option value="Droguerias" >Droguerias</option>
						  <option value="Mascotas">Mascotas</option>
						  <option value="Miscelaneas">Miscelaneas</option>
						   <option value="Profesiones">Profesiones</option>						    
						    <option value="Gimnasio">Gimnasio</option> 
						  <option value="Guarderia" >Guarderia</option>
						  <option value="Belleza">Belleza</option>
						  <option value="Vehiculos">Vehiculos</option>
						   <option value="Viviendas">Viviendas</option>
						    
				 </select>

				 </div>

				 <div class="col-3 float-left">
				 	 <label for="adicional2">Que Profesion u otro servicio?</label><input required type="text" id="adicional2" name="adicional2" class="form-control">
                 </div>


				 <div class="col-6 float-left">
				 <label for="celularEmpresa">Celular ó telefono Empresa</label><input required type="text" id="celularEmpresa" name="celularEmpresa" class="form-control"  pattern=".{8,}" minlength="7" maxlength="10" placeholder="ejemplo 031... ó 313... 10 numeros máximo" >
				 <label for="emailEmpresa">Email Empresa</label><input required type="email" id="emailEmpresa" name="emailEmpresa" class="form-control">
				 <label for="paginaweb">Link -> Pagina Web</label><input required type="text" id="paginawebEmpresa" name="paginawebEmpresa" class="form-control">
				 <label for="redsocial2">Link -> red social pionera</label><input required type="text" id="redsocial2" name="redsocial2" class="form-control">
				 
                  </div>

                  <div class="col-6 float-right inlene">
                  <label for="contrasena2">cree su contraseña</label><input required type="password" id="contrasena2" name="contrasena2" class="form-control" onchange="subirusuario()" pattern=".{8,}" minlength="5" maxlength="10">
				 <label for="confirmarContrasena2">Confirme su contraseña</label><input required type="password" id="confirmarContrasena2" name="confirmarContrasena2" class="form-control"  onchange="verificar();subirusuario();" pattern=".{8,}" minlength="5" maxlength="10">
				 </div>
		         
		          <br><br> <br><br>

				<div class="col-6 float-right">
               <input required type="submit" value="enviar" onclick=this.form.action="CrearEmpresaBase.php" class="float-right btn btn-success col-6">
               </div>
               <br> <br> 

	         
				


			   
			</form>


    <!--    Tienda  -->

			<form id="f2" name="f2" action="CrearTiendaBase.php" method="post" enctype="multipart/form-data"  class="letrat1">

				<div class="col-6 float-left">
					
                 <label for="usuario1">UsuarioRegistro</label><input required type="text" id="usuario1" name="usuario1" value="<?php include("../conexion/conexion.php"); echo $usuario;?>" class="form-control" readonly="readonly"EM>
                 <div class="col-6 float-left">
				 <label for="nombretienda">Nombre de la Tienda</label><input required type="text" id="nombreTienda" name="nombreTienda" class="form-control">
		         <label for="rut"><a href="https://muisca.dian.gov.co/WebRutMuisca/DefConsultaEstadoRUT.faces" target="_blank" title="¿Que es el rut ve a link de este enlace? o consulte el suyo">Rut (Registro Único Tributario)</a></label><input required type="text" id="rut" name="rut" class="form-control">
		         </div> 

		         <div class="col-6 float-left">
		         	<label for="nombreempresa">Descripcion de tu Empresa</label>
		         	<textarea style="width: 100%;height: 103px;" required id="descripcion2"  name="descripcion2" maxlength="50"></textarea>
		         </div> 

		          <div class="col-6 float-left inline" style="padding: 0 15px 0 15px;">
		         	<label for="seleccionArchivos" class="col-12 success">Imagen Logo ó producto</label>
		         	<div class=" btn btn-success col-12  float-left" ><img id="imagenPrevisualizacion2" width="100%" height="200"></div>
			        <div style="width:100%;" class="col-12 bordes btn btn-success"><input required type="file" id="seleccionArchivos2" name="imagen2" accept="image/*" class="col-12 bordes" ></div>
				  
				</div> 

		         <div class="col-6 float-left">
	             <label for="ciudad1">Ciudad</label><input required type="text" id="ciudad1" name="ciudad1" class="form-control">
	             <label for="barrio1">Barrio</label><input required type="text" id="barrio1" name="barrio1" class="form-control">
	             <label for="direccion1">Direccion</label><input required type="text" id="direccion1" name="direccion1" class="form-control">
		         </div>

		        

				

		         <div class="col-6 float-left">
	             <label for="coordenadas1">Coordenadas<br><a href="https://www.google.com/maps/place/Ciudad+Verde,+Soacha,+Cundinamarca/@4.5981808,-74.2367544,14z/data=" target="blank"> Ve a maps Consigue tu ubicación</a></label><input required type="text" id="coordenadas1" name="coordenadas1" class="form-control">
	             

				 <div class="col-3 float-left inline">
	             <label for="compartir1">Compartir ubicacion?</label>
	             <select name="compartir1" id="compartir1"class="form-control" value="">
						 <option value="" selected></option>
						  <option value="1">Si</option> 
						  <option value="0">no</option>
						  </select>                  
				 </div>
                <div class="col-3 float-left inline">
				<label for="Domicilios1">Realiza domicilios</label>
	             <select name="domicilios1" id="domicilios1"class="form-control" value="">
						 <option value="" selected></option>
						  <option value="1">Si</option> 
						  <option value="0">no</option>
				 </select>	
	             </div>	
		                       
		            
                 <br>
		                     
		         </div>
		         </div>

		       
					

				<div class="col-3 float-left">
					 
				<!-- segunda columna -->	
				 <label for="seccion">Seccion</label>
						<select name="seccion1" class="form-control" value="">						 
						 <option value="" selected></option>
						  <option value="Licores">Licores</option> 
						  <option value="Panaderia" >Panaderia</option>
						  <option value="Comida_Rapidas">Comida_Rapidas</option>
						  <option value="Restaurantes">Restaurantes</option>
						   <option value="Asaderos">Asaderos</option>
						    <option value="Electrodomesticos">Tecnologia</option>
						    <option value="Superemercados">Supermercados</option> 
						  <option value="Droguerias" >Droguerias</option>
						  <option value="Mascotas">Mascotas</option>
						  <option value="Miscelaneas">Miscelaneas</option>
						   <option value="Profesiones">Profesiones</option>						    
						    <option value="Gimnasio">Gimnasio</option> 
						  <option value="Guarderia" >Guarderia</option>
						  <option value="Belleza">Belleza</option>					  
						    
				 </select>

				 </div>

				 <div class="col-3 float-left">
				 	 <label for="adicional1">Que Profesion u otro servicio?</label><input required type="text" id="adicional1" name="adicional1" class="form-control">
                 </div>


				 <div class="col-6 float-left">
				 <label for="celularTienda">Celular ó telefono Tienda ó persona natural</label><input required type="text" id="celularTienda" name="celularTienda" class="form-control" placeholder="ejemplo 031... ó 313... 10 numeros máximo">
				 <label for="emailTienda">Email Tienda ó persona natural</label><input required type="email" id="emailTienda" name="emailTienda" class="form-control">
				 <label for="redsocial1">Link -> red social pionera</label><input required type="text" id="redsocial1" name="redsocial1" class="form-control">
				
                  </div>
                  
                  <div class="col-3 float-right inline">
                   <label for="contrasena1">cree su contraseña</label><input required type="password" id="contrasena1" name="contrasena1" class="form-control" onchange="subirusuario()" pattern=".{8,}" minlength="5" maxlength="10">
				 <label for="confirmarContrasena1">Confirme su contraseña</label><input required type="password" id="confirmarContrasena1" name="confirmarContrasena1" class="form-control" onchange="verificar1();subirusuario();" pattern=".{8,}" minlength="5" maxlength="10">
				 </div>

		        

				<div class="col-5 float-right">
					<br><br>
               <input required type="submit" value="enviar" onclick=this.form.action="CrearTiendaBase.php" class="float-right btn btn-success col-6">
               </div>
               <br><br> 


				</div>	        

		  </form>

<!--    Producto o servicio  -->

		  <form id="f3" name="f3" action="CrearProdservBase.php" method="post" enctype="multipart/form-data" class="letrat1">

			<div class="col-6 float-left">
					
                 <label for="usuario3">UsuarioRegistro</label><input required type="text" id="usuario3" name="usuario3" value="<?php include("../conexion/conexion.php"); echo $usuario;?>" class="form-control" readonly="readonly">
                 <div class="col-6 float-left">
				 <label for="nombrepersona">Quien Ofrece Producto o servicio</label><input required type="text" id="nombrepersona" name="nombrepersona" class="form-control" value='<?php echo $nombre1 ." ". $nombre2 ." ".  $apellido1 ." ".  $apellido2 ?>' readonly="readonly">
		         <label for="Cedula">cedula de la persona que ofrece producto o servicio</a></label><input required type="text" id="Cedula" name="Cedula" class="form-control" value='<?php echo $documento?>' readonly="readonly">
		         </div> 
		         <div class="col-6 float-left">
		         	<label for="nombreProdServ">Descripcion del Producto o servicio</label>
		         	<textarea style="width: 100%;height: 120px;" required id="descripcion3"  name="descripcion3" maxlength="100"></textarea>
		         </div>

		         <div class="col-6 float-left inline">
	            
	              <div class=" btn btn-success col-12  float-left"><img id="imagenPrevisualizacion3" width="100%" height="200"></div>
			        <div style="width:100%;" class="col-12 bordes btn btn-success"><input required type="file" id="seleccionArchivos3" name="imagen3"accept="image/*" class="col-12 bordes" ></div> 
			    </div>
	             <!-- <label for="imagen3" class="col-12 success">Imagen Logo servicio ó Producto</label>
		         	<input required  type="file" id="imagen3" name="imagen3" class="form-control col-4 float-left">
	              </div> -->
                 <div class="col-6 float-left inline">		         	
		         <label for="Nproducto">Nombre de Producto</label><input required type="text" id="Nproducto" name="Nproducto" class="form-control">           
	             
		         </div>

		         <div class="col-6 float-left inline">		         	
		         <label for="Valor">Valor</label><input required type="text" id="Valor" name="Valor" class="form-control">            
	             
		         </div> 
		        
	             </div> 
					
				<div class="col-3 float-left">
					 
				<!-- segunda columna -->	
				 <label for="seccion">Seccion</label>
						<select name="seccion3" class="form-control" value="">
						<option value="" selected></option>
						<option value="Ventas_Individuales">Ventas_Individuales</option>
						<option value="Profesiones">Profesiones</option>	
						<option value="Otros_Servicios">Otros_Servicios</option>						 
						  <option value="Vehiculo">Vehiculos</option>
						   <option value="Viviendas">Viviendas</option>
						   <option value="Trueque">Trueque</option>
						    
				 </select>

				 </div>

				 <div class="col-3 float-left">
				 	 <label for="adicional3">Que Profesion u otro servicio?</label><input required type="text" id="adicional3" name="adicional3" class="form-control">
                 </div>


				

                 <div class="col-3 float-left">
	             <label for="ciudad3">Ciudad donde vive</label><input required type="text" id="ciudad3" name="ciudad3" class="form-control">
	             <label for="barrio3">Barrio donde vive</label><input required type="text" id="barrio3" name="barrio3" class="form-control">
	             <br>
	             <label for="direccion3">Direccion</label><input required type="text" id="direccion3" name="direccion3" class="form-control">
	             <label for="Coordenadas3">Coordenadas (opcional) <br><a href="https://www.google.com/maps/place/Ciudad+Verde,+Soacha,+Cundinamarca/@4.5981808,-74.2367544,14z/data=" target="blank"> Ve a maps Consigue tu ubicación</a></label><input required type="text" id="coordenadas3" name="coordenadas3" class="form-control">
		         </div>

		          <div class="col-3 float-left">
				 <label for="celularProductoIndividual">Celular ó telefono de contacto</label><input required type="text" id="celularProductoIndividual" name="celularProductoIndividual" class="form-control"  pattern=".{8,}" minlength="7" maxlength="10" placeholder="ejemplo 031... ó 313... 10 numeros máximo">
				 <label for="emailProductoIndividual">Email contacto</label><input required type="email" id="emailProductoIndividual" name="emailProductoIndividual" class="form-control">
				
				</div>
                  

                 <div class="col-1 float-left inline">
	             <label for="compartir3">Compartir ubicacion?</label>
	             <select name="compartir3" id="compartir3"class="form-control" value="">
						 <option value="" selected></option>
						  <option value="1">Si</option> 
						  <option value="0">no</option>
				 </select>
				 </div>
                <div class="col-1 float-left inline">
				<label for="Domicilios3">Realiza domicilios?</label>
	             <select name="domicilios3" id="domicilios3"class="form-control" value="">
						 <option value="" selected></option>
						  <option value="1">Si</option> 
						  <option value="0">no</option>
				 </select>	

				  </div>



		         
		        <div class="col-3 float-left">
		        	 <label for="contrasena3">cree su contraseña resguarda publicacion</label><input required type="password" id="contrasena3" name="contrasena3" class="form-control" onchange="subirusuario()" pattern=".{8,}" minlength="5" maxlength="10">

		        	 <label for="confirmarContrasena3">Confirme su contraseña resguarda publicacion</label><input required type="password" id="confirmarContrasena3" name="confirmarContrasena3" class="form-control"  onchange="verificar2();subirusuario();" pattern=".{8,}" minlength="5" maxlength="10">
		         
				  <!-- <br><br><br><br><br><br><br><br><br> --> 

               <div class="col-12">
               	<br>
               <input required type="submit" value="enviar" onclick=this.form.action="CrearProductoIndividualBase.php" class="float-right btn btn-success col-6">
               </div>
				
				</div>


	         
				


			   
			</form>

<!-- <form action='MostrarTienda.php' method='post'> -->
		<!-- e.preventDefault(); -->
<div id="registrotienda" name="registrotienda"  class="letrat">
			<label class="padding btn btn-success">Estas son tus tiendas registradas =)</label>
 <?php
 // include ("../Conexion/conexion.php");
       
     
    
      $busqueda="SELECT * FROM registrotienda WHERE usuario='$usuario'";
      $result = mysqli_query($conexion,$busqueda);

      $busqueda1="SELECT * FROM direccion WHERE usuario='$usuario'";
      $result1 = mysqli_query($conexion,$busqueda1);   

          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Rut</b></td>
          <td><b>NumContrato1</b></td>
          <td><b>NombreTienda</b></td>
          <td><b>Seccion</b></td>
          <td><b>NumRegistro</b></td>
          <td><b>Ciudad1</b></td>
          <td><b>Barrio1</b></td>
          <td><b>Direccion1</b></td>
          <td><b>coordenadas</b></td>
          <td><b>compartir</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>


          
          
          </tr>\n";

          while ($row = mysqli_fetch_array($result) and ($row1 = mysqli_fetch_array($result1))) {
           echo "<form action='MostrarTienda.php' method='post'>";
           echo"<tr>
             
            <td><a href='MostrarTienda.php?id=". $row[0] ."'>$row[0]</a></td>           
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td><a href='MostrarTienda.php?id=". $row1[0] ."'>$row[0]</a></td> 
            <td>$row1[3]</td>
            <td>$row1[4]</td>
            <td>$row1[5]</td>
            <td>$row1[6]</td>
            <td>$row1[7]</td>
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            echo "</form>";
            }
         

            
          echo "</table>\n";	
          
    ?>
    
</div>
<!-- </form>  --> 
<br>
<div id="registroempresa" name="registroempresa" class="letrat">
	<label class="padding btn btn-success">Estas son tus empresas registradas =)</label>
  <?php
 // include ("../Conexion/conexion.php");
       
     
    
      $busqueda="SELECT * FROM registroempresa WHERE usuario='$usuario'";
      $result = mysqli_query($conexion,$busqueda);
     
          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Nit</b></td>
          <td><b>NumContrato2</b></td>
          <td><b>NombreEmpresa</b></td>
          <td><b>Seccion</b></td>
          <td><b>NumRegistro</b></td>
          <td><b>Ciudad1</b></td>
          <td><b>Barrio1</b></td>
          <td><b>Direccion1</b></td>
          <td><b>coordenadas</b></td>
          <td><b>compartir</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>
          
          
          </tr>\n";

          while ($row = mysqli_fetch_array($result) and ($row1 = mysqli_fetch_array($result1))) {
           echo "<form action='MostrarTienda.php' method='post'>";
           echo"<tr>
             
            <td><a href='MostrarTienda.php?id=". $row[0] ."'>$row[0]</a></td>           
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td><a href='MostrarTienda.php?id=". $row1[0] ."'>$row[0]</a></td> 
            <td>$row1[3]</td>
            <td>$row1[4]</td>
            <td>$row1[5]</td>
            <td>$row1[6]</td>
            <td>$row1[7]</td>
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            }
         

            
          echo "</table>\n";
    ?>
</div>
<br>
<div id="registroproductoindividual" name="registroproductoindividual"  class="letrat">
			<label class="padding btn btn-success">Estas son tus Productos individuales registrados =)</label>
 <?php
 // include ("../Conexion/conexion.php");
       
     
    
      $busqueda="SELECT * FROM registroproductoindividual WHERE usuario='$usuario'";
      $result = mysqli_query($conexion,$busqueda);

      $busqueda1="SELECT * FROM direccion WHERE usuario='$usuario'";
      $result1 = mysqli_query($conexion,$busqueda1);   

          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>cedula</b></td>
          <td><b>NumContrato3</b></td>
          <td><b>Nombre Producto</b></td>
          <td><b>valor</b></td>
          <!-- <td><b>NumRegistro</b></td>-->
          <td><b>Ciudad1</b></td>
          <td><b>Barrio1</b></td>
          <td><b>Direccion1</b></td>
          <td><b>coordenadas</b></td>
          <td><b>compartir</b></td>
          <td><b>Editar</b></td>
          <td><b>Borrar</b></td>


          
          
          </tr>\n";

          while ($row = mysqli_fetch_array($result) and ($row1 = mysqli_fetch_array($result1))) {
           echo "<form action='MostrarTienda.php' method='post'>";
           echo"<tr>
             
            <!-- <td><a href='MostrarTienda.php?id=". $row[0] ."'>$row[0]</a></td> -->
            <td>$row[0]</td>           
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <!-- <td>$row[0]</td>-->
            <!-- <td><a href='MostrarTienda.php?id=". $row1[0] ."'>$row[0]</a></td> --> 
            <td>$row1[3]</td>
            <td>$row1[4]</td>
            <td>$row1[5]</td>
            <td>$row1[6]</td>
            <td>$row1[7]</td>
            <td><a href=''>Editar</a></td>
            <td><a href=''>Borrar</a></td>
           
            
            
            </tr>\n";
            echo "</form>";
            }
         

            
          echo "</table>\n";	
          
    ?>
    
</div>
<!-- </form>  --> 
<br>  


	</header>

   <!-- //footer -->
				<?php
				include("../footer/footer.php")
				?>
</body>
</html>
