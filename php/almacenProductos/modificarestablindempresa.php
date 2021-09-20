<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ingreso de productos</title>
	
  <link rel="stylesheet" href="css/letra/letra.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>    
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/> -->

    <script src="../../js/almacenarProductos/almacenarProductos.js"></script>
    <script src="../../js/almacenarProductos/borrarcom1.js"></script>
    </head>
  		
  
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>
    <script src="../../js/crearTienda/verificacion.js"></script>
    <script src="../../js/crearTienda/mostrarimagen.js"></script>
		 <!-- <a href="../login/login.php" class="btn btn-success letra"></a> -->

   <body class="aua" style="background-color: #DFFAD6; zoom:85%; width:100%;height:70%;padding:20px 20px 20px 20px;">

    

   

       <?php  
  $seleccionar="SELECT * FROM registroempresa INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN paginaweb ON registroempresa.numRegistroEmpresa=paginaweb.numRegistroGlobal INNER JOIN redsocial ON registroempresa.numRegistroEmpresa=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registroempresa.numRegistroEmpresa=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo ' 
        <div id="b3" name="b3" class="col-12 tamaño badge badge-info btn btn-info"><h1 class="text-light" style="font-size: 300%"><img src="../../img/index/footer/edificio.ico" style="width: 50px; height: 35px; border-radius: 50px;">--> Edita  Empresa <br>'.$fila['nombreEmpresa'].'</h1></div>';}}?> 


      <header class="" style="height:100%;text-overflow: ellipsis;overflow: hidden;overflow-y: scroll;overflow-x: scroll;padding-bottom: 20px;border-style: solid;border-color: green;">


				         
	
	<?php  
 	$seleccionar="SELECT * FROM registroempresa INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN paginaweb ON registroempresa.numRegistroEmpresa=paginaweb.numRegistroGlobal INNER JOIN redsocial ON registroempresa.numRegistroEmpresa=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registroempresa.numRegistroEmpresa=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
 	while($fila = mysqli_fetch_array($mostrartabla)){
 		if ($traeid==$fila[0]) {

 			 echo ' 
  <!--    empresas  -->

  <form id="" name="" action="CrearEmpresaBase.php" method="post" enctype="multipart/form-data" class="">
  
      

<!-- primera columna -->  
<!--   caja izquierda -->
      <aside style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
       
<!--  primera caja interna arriba izq -->
        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
          <label for="usuario2">UsuarioRegistro</label><input style="width: 90%;"required type="text" id="usuario2" name="usuario2" value="'.$fila['usuario'].'" class="form-control" readonly="readonly">
        </div> 
<!--  primera caja interna arriba der -->
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
         <label for="nombreempresa">Nombre de la Empresa</label><input style="width: 90%;"required type="text" id="nombreEmpresa" name="nombreEmpresa" class="form-control"  value="'.$fila['nombreEmpresa'].'" readonly="readonly">
         <label for="nit"><a href="https://linea.ccb.org.co/CertificadosElectronicosR/Index.html#/inicio" target="_blank" title="¿Que es el nit ve a link de este enlace?">Nit(Registro Camara comercio)</a></label><input style="width: 90%;"required type="text" id="nit" name="nit" class="form-control" value="'.$fila['nit'].'" readonly="readonly">
      </div> 
     
<!--   segunda caja interna centro izq -->  
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
        
       </div>
         <br>
        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
               <label for="ciudad2">Ciudad</label><input required maxlength="100" type="text" id="ciudad2" name="ciudad2" class="form-control" value="'.$fila['ciudad'].'" readonly="readonly">
               <label for="barrio2">Barrio</label><input required maxlength="100" type="text" id="barrio2" name="barrio2" class="form-control" value="'.$fila['barrio'].'" readonly="readonly">
               <label for="direccion2">Direccion</label><input required maxlength="150" type="text" id="direccion2" name="direccion2" class="form-control" value="'.$fila['direccion'].'" readonly="readonly">
        </div>

      </div>

<!--   segunda caja interna centro der-->
      <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
        <label for="Coordenadas2">Coordenadas (opcional <a href="https://youtu.be/yd8VbNZFu5U"  target="blank">Mira como hacerlo</a> ) <br><a href="https://www.google.com/maps/place/Ciudad+Verde,+Soacha,+Cundinamarca/@4.5981808,-74.2367544,14z/data=" target="blank"> Ve a maps Consigue tu ubicación</a></label><textarea required maxlength="1000" type="text" id="coordenadas2" name="coordenadas2" class="form-control"  title="
        Abre Google Maps.
        Accede a las indicaciones, al mapa que quieras insertar.
        En la parte superior izquierda, haz clic en Menú, tres lineas horizontales.
        Haz clic en Compartir o incorporar el mapa pestaña derecha.
        Haz clic en Insertar un mapa.
        A la izquierda del cuadro de texto, haz clic en el icono de la flecha hacia abajo Flecha hacia abajo para elegir el tamaño mediano.
        Copia el texto en el cuadro y pégalo en el HTML de tu sitio web o blog solicitado." style="width:90%" value="">'.$fila['coordenadas'].'</textarea>
         
        <label for="compartir">Desea Compartir ubicacion?</label>
          <select style="width:90%" name="compartir2" class="form-control">
              <option value="'.$fila['mostrarubicacion'].'" selected hidden>'.$fila['mostrarubicacion'].'</option>
              <option value="Si">Si</option> 
              <option value="No">No</option>
            </select>

            <label for="domicilios">Realiza domicilios?</label>
            <select style="width:90%" name="domicilios2" class="form-control"  value="'.$fila['domicilios'].'">
             <option value="'.$fila['domicilios'].'" selected hidden>'.$fila['domicilios'].'</option>
              <option value="Si">Si</option> 
              <option value="No">No</option>
         </select>

       </div>
<!-- tercera caja interna abajo izq -->
     <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
              <label for="seleccionArchivos" class="col-12 info">Imagen Logo ó producto</label>
              <div class=" btn btn-info col-12  float-left" ><img id="imagenPrevisualizacion1" width="100%" height="180" src="'.$fila['ruta'].'"></div>
              <div style="width:100%;" class="col-12 btn btn-info"><input type="file" id="seleccionArchivos1" name="imagen1" accept="image/*" class="col-12" >
              </div>
          
      </div> 
<!-- tercera caja interna abajo der -->
        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
           <label for="nombreempresa">Descripcion de tu Empresa</label>
           <textarea style="width: 90%;height:23%" required id="descripcion2"  name="descripcion2" maxlength="500" value="'.$fila['descripcion'].'">'.$fila['descripcion'].'</textarea>
        </div>
       
       
     </aside> <!-- fin caja derecha --> 
<!-- segunda columna -->
<!-- caja derecha -->  
      
      <aside style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
<!-- primera caja interna arriba izq -->     
        <div style="width: 90%;float:left;" class="col-lg-6 col-md-6"> 
           
        
         <label for="seccion">Seccion</label>
            <select style="width:90%;" name="seccion2" class="form-control" value="'.$fila['seccion'].'">
             <option value="'.$fila['seccion'].'" selected hidden>'.$fila['seccion'].'</option>
              <option value="Licores">Licores</option> 
              <option value="Panaderia" >Panaderia</option>
              <option value="Comida_Rapidas">Comida_Rapidas</option>
              <option value="Restaurantes">Restaurantes</option>
              <option value="Asaderos">Asaderos</option>
              <option value="Tecnologia">Tecnologia</option>
              <option value="Superemercados">Supermercados</option> 
              <option value="Droguerias" >Droguerias</option>
              <option value="Mascotas">Mascotas</option>
              <option value="Miscelaneas">Miscelaneas</option>
              <option value="Profesiones">Profesiones</option>               
              <option value="Gimnasio">Gimnasio</option> 
              <option value="Guarderia">Guarderia</option>
              <option value="Belleza">Belleza</option>
              <option value="Vehiculos">Vehiculos</option>
              <option value="Viviendas">Viviendas</option>
                
           </select>
         </div>
<!-- primera caja interna arriba der-->          
      <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
          <label for="adicional2">Que Profesion u otro servicio?</label><input style="width:90%;" required maxlength="40" type="text" id="adicional2" name="adicional2" class="form-control" value="'.$fila['adicional'].'">
      </div>

<!-- segunda caja interna centro izq --> 
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
        <div style="width:90%;padding: 5%;">
         <label for="celularEmpresa">Celular Empresa</label><input required type="text" id="celularEmpresa" name="celularEmpresa" class="form-control"  pattern="[0-9]*" minlength="7" maxlength="10" placeholder="ejemplo 313... 10 numeros máximo" value="'.$fila['celular'].'">
         <label for="celularEmpresa">Telefono Empresa</label><input required type="text" id="telefonoEmpresa" name="telefonoEmpresa" class="form-control"  pattern="[0-9]*" minlength="7" maxlength="10" placeholder="ejemplo 031... poner indicatico ciudad 10 numeros máximo" value="'.$fila['telefono'].'">
         <label for="emailEmpresa">Email Empresa</label><input required maxlength="320" type="email" id="emailEmpresa" name="emailEmpresa" class="form-control" value="'.$fila['email'].'">
         <label for="paginaweb">Link -> Pagina Web</label><input required maxlength="2083" type="text" id="paginawebEmpresa" name="paginawebEmpresa" class="form-control" value="'.$fila['paginaweb'].'">
         <label for="redsocial2">Link -> red social pionera</label><input required maxlength="2083" type="text" id="redsocial2" name="redsocial2" class="form-control" value="'.$fila['redsocial'].'">
        </div>

      </div>

<!-- segunda caja interna centro der --> 
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
        <br>
          <label for="contrasena2">cree su contraseña</label><input required type="text" id="contrasena2" name="contrasena2" class="form-control" onchange="subirusuario()" pattern=".{8,}" minlength="8" maxlength="12" value="'.$fila['contrasena'].'">
         <label for="confirmarContrasena2">Confirme su contraseña</label><input required type="text" id="confirmarContrasena2" name="confirmarContrasena2" class="form-control"  onchange="verificar2();subirusuario();" pattern=".{8,}" minlength="8" maxlength="12" value="'.$fila['confirmar1'].'">
         <br><br><br>
          
      </div>
    <!-- tercera caja interna baja completa -->
      <div style="width: 100%;float: left;">
        <input required type="submit" value="Editar" onclick=this.form.action="../almacenProductos/modificarestablempresa.php?id=' .$fila[0]. '" class="float-right btn btn-info col-6">
        <br><br>
      </div>
      </aside><!-- fin caja derecha --> 

  </form>';}}?>
  </header>
 </body>
<br><br><br></html>