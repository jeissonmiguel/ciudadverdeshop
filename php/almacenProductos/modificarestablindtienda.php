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

  $seleccionar1="SELECT * FROM registrotienda INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda .numRegistroTienda=email.numRegistroGlobal  INNER JOIN redsocial ON registrotienda.numRegistroTienda=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registrotienda.numRegistroTienda=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar1);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

      
 <div id="b2" name="b2" class="col-12 tamaño badge badge-warning btn btn-warning"><h1 class="" style="font-size: 300%"><img src="../../img/index/footer/tienda.ico" style="width: 50px; height: 35px; border-radius: 50px;">--> Click y Edita Tienda <br>'.$fila['nombreTienda'].'</h1></div> ';}}?> 

 <header class="" style="height:100%;text-overflow: ellipsis;overflow: hidden;overflow-y: scroll;overflow-x: scroll;padding-bottom: 20px;border-style: solid;border-color: green;">


   <?php  
  $seleccionar1="SELECT * FROM registrotienda INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda .numRegistroTienda=email.numRegistroGlobal  INNER JOIN redsocial ON registrotienda.numRegistroTienda=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registrotienda.numRegistroTienda=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar1);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

  <!--    Tiendas  -->

  <form id="" name="" action="CrearTiendaBase.php" method="post" enctype="multipart/form-data"  class="">
  
      

<!-- primera columna -->  
<!--   caja izquierda -->
     <aside style="width: 100%;float:left;" class="col-lg-6 col-md-6">
       
<!--  primera caja interna arriba izq -->
        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
          <label for="usuario1">UsuarioRegistro</label><input style="width: 90%;"required type="text" id="usuario1" name="usuario1" value="'.$fila['usuario'].'" class="form-control" readonly="readonly">
        </div> 
<!--  primera caja interna arriba der -->
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
         <label for="nombretienda">Nombre de la Tienda</label><input style="width: 90%;" required type="text" id="nombreTienda" name="nombreTienda" class="form-control" value="'.$fila['nombreTienda'].'" readonly="readonly">
          <label for="rut"><a href="https://muisca.dian.gov.co/WebRutMuisca/DefConsultaEstadoRUT.faces" target="_blank" title="¿Que es el rut ve a link de este enlace? o consulte el suyo">Rut (Registro Único Tributario)</a></label><input style="width: 90%;"required maxlength="30" type="text" id="rut" name="rut" class="form-control" readonly="readonly" value="'.$fila['rut'].'">
      </div>

               
     
<!--   segunda caja interna centro izq -->  
      <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
                <br>
            <div class="col-12 float-left">
               <label for="ciudad1">Ciudad</label><input required maxlength="100" type="text" id="ciudad1" name="ciudad1" class="form-control" value="'.$fila['ciudad'].'" readonly="readonly">
               <label for="barrio1">Barrio</label><input required maxlength="100" type="text" id="barrio1" name="barrio1" class="form-control" value="'.$fila['barrio'].'" readonly="readonly">
               <label for="direccion1">Direccion</label><input required maxlength="150" type="text" id="direccion1" name="direccion1" class="form-control" value="'.$fila['direccion'].'" readonly="readonly">
             </div>

        </div>

      
<!--   segunda caja interna centro der-->
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
        <label for="Coordenadas1">Coordenadas (opcional <a href="https://youtu.be/yd8VbNZFu5U"  target="blank">Mira como hacerlo</a> ) <br><a href="https://www.google.com/maps/place/Ciudad+Verde,+Soacha,+Cundinamarca/@4.5981808,-74.2367544,14z/data=" target="blank"> Ve a maps Consigue tu ubicación</a></label><textarea required maxlength="1000" type="text" id="coordenadas1" name="coordenadas1" class="form-control"  title="
        Abre Google Maps.
        Accede a las indicaciones, al mapa que quieras insertar.
        En la parte superior izquierda, haz clic en Menú, tres lineas horizontales.
        Haz clic en Compartir o incorporar el mapa pestaña derecha.
        Haz clic en Insertar un mapa.
        A la izquierda del cuadro de texto, haz clic en el icono de la flecha hacia abajo Flecha hacia abajo para elegir el tamaño mediano.
        Copia el texto en el cuadro y pégalo en el HTML de tu sitio web o blog solicitado." style="width:90%" value="">'.$fila['coordenadas'].'</textarea>
                 
    
        <label for="compartir1">Compartir ubicacion?</label>
          <select name="compartir1" id="compartir1"class="form-control" value="'.$fila['mostrarubicacion'].'" style="width:90%">
            <option value="'.$fila['mostrarubicacion'].'" selected hidden>'.$fila['mostrarubicacion'].'</option>
            <option value="Si">Si</option> 
            <option value="No">No</option>
          </select>   

         <label for="Domicilios1">Realiza domicilios</label>
            <select name="domicilios1" id="domicilios1"class="form-control" value="'.$fila['domicilios'].'" style="width:90%">
             <option value="'.$fila['domicilios'].'" selected hidden>'.$fila['domicilios'].'</option>
             <option value="Si">Si</option> 
             <option value="No">No</option>
         </select> 

       </div>
<!-- tercera caja interna abajo izq -->
     <div style="width: 100%;float:left;" class="col-lg-6 col-md-6"> 
              <label for="seleccionArchivos" class="col-12 success">Imagen Logo ó producto</label>
              <div class="btn btn-success col-12  float-left" ><img id="imagenPrevisualizacion2" width="100%" height="180" src="'.$fila['ruta'].'"></div>
              <div style="width:100%;" class="col-12 btn btn-success"><input type="file" id="seleccionArchivos2" name="imagen2" accept="image/*" class="col-12" >
              </div>
              
     </div>
       
<!-- tercera caja interna abajo der -->
        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
          <label for="nombretienda">Descripcion de tu Tienda</label>
          <textarea style="width: 90%;height:23%" required id="descripcion1"  name="descripcion1" maxlength="500">'.$fila['descripcion'].'</textarea>
        </div>
       
       
     </aside> <!-- fin caja derecha --> 
<!-- segunda columna -->
<!-- caja derecha -->  
      
      <aside style="width: 100%;float:left;" class="col-lg-6 col-md-6">
<!-- primera caja interna arriba izq -->     
        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
           
        
         <label for="seccion">Seccion</label>
            <select style="width:90%;" name="seccion1" class="form-control" value="">
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
          <label for="adicional1">Que Profesion u otro servicio?</label><input style="width:90%;" required type="text" id="adicional1" name="adicional1" class="form-control" value="'.$fila['adicional'].'">
      </div>

<!-- segunda caja interna centro izq --> 
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
        <div style="width:90%;padding: 5%;">
         <label for="celularTienda">Celular Tienda ó persona natural</label><input required  pattern="[0-9]*" minlength="10" maxlength="10" type="text" id="celularTienda" name="celularTienda" class="form-control" placeholder="ejemplo 313... 10 numeros máximo" value="'.$fila['celular'].'"> 
         <label for="emailTienda">Email Tienda ó persona natural</label><input required maxlength="320" type="email" id="emailTienda" name="emailTienda" class="form-control" value="'.$fila['email'].'">
         <label for="redsocial1">Link -> red social pionera</label><input required maxlength="320" type="text" id="redsocial1" name="redsocial1" class="form-control" value="'.$fila['redsocial'].'">
        </div>

      </div>

<!-- segunda caja interna centro der --> 
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
        <br>
          <label for="contrasena1">cree su contraseña</label><input required type="text" id="contrasena1" name="contrasena1" class="form-control" onchange="subirusuario()"  minlength="8" maxlength="12" value="'.$fila['contrasena'].'">
          <label for="confirmarContrasena1">Confirme su contraseña</label><input required type="text" id="confirmarContrasena1" name="confirmarContrasena1" class="form-control" onchange="verificar1();subirusuario();"  minlength="8" maxlength="12" value="'.$fila['confirmar1'].'">
         <br><br><br>
          
      </div>
    <!-- tercera caja interna baja completa -->
      <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
         <input required type="submit" value="Editar" onclick=this.form.action="../almacenProductos/modificarestabletienda.php?id=' .$fila[0]. '" class="float-right btn btn-success col-6"
       <br><br>
      </div>
      </aside><!-- fin caja derecha --> 

  </form>';}} ?>
 </header>
 </body>
<br><br><br></html>