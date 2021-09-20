<?php 
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');

 if ($usuario == "") {
          echo "<script>alert('usted no tiene autorizacion');window.location='../login/login.php'</script>";
          session_destroy();
           } 
  if ($usuario == "") {
        echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
        echo "<h5 class='btn-warning'> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h1>";
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
	<link rel="stylesheet" href="../../css/almacenProductos/modificarestabl.css">
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
  
	
		<link rel="stylesheet" href="../../css/crearTienda/crearTienda.css">
    <link rel="stylesheet" href="../../css/footer/footerglob.css">
  
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>
    <!-- javascript -->
    <script src="../../js/crearTienda/creartienda.js"></script>
    <script src="../../js/crearTienda/verificacion.js"></script>
    <script src="../../js/crearTienda/mostrarimagen.js"></script>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
		 <!-- <a href="../login/login.php" class="btn btn-success letra"></a> -->
 </head>

   <body class="aua" style="background-color: #DFFAD6; zoom:85%; width:100%;height:70%;padding:20px 20px 20px 20px;word-break: break-all;">

    

     <div style="width: 100%;float:left;" class="col-lg-3 col-md-6 padding badge badge-success"><h3 class="display-5 text-light" style="font-size: 300%">Cdad Verde Shop</h3></div><div style="width: 100%;float:left;" id="b1" name="b1" class="col-lg-6 col-md-6  tamaño badge badge-secondary btn btn-secondary"><h3 class="display-5" style="font-size: 300%;">Press para ver tus comercios</h3></div>
     <a href="../login/selecionperfil.php"><div style="width: 100%;float:left;" class="col-lg-3 col-md-6  padding badge badge-success btn btn-success float-right"><h3 class="display-5 text-light" style="font-size: 300%"><= ir a Home</h3></div></a>
     <br><br>

   <!--    mensaje movible  
<div  class="container-fluid">
      <marquee  loop="0" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">
      <div class="col-1 float-left"></div>
       <h1 class="btn btn-success letrat1" style="font-size: 100%">Estas logueado como usuario <?php echo $documento?>, <?php echo $nombre1," ", $nombre2?> Presiona el tipo de comercio que usas y diligencia los datos</h1></marquee>
     </div>--> 

   
  <!--    cajas de opciones  -->
    <div class="col-12 tamaño badge badge-success">
    </div>
        
      <br>

       <?php  
  $seleccionar="SELECT * FROM registroempresa INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN paginaweb ON registroempresa.numRegistroEmpresa=paginaweb.numRegistroGlobal INNER JOIN redsocial ON registroempresa.numRegistroEmpresa=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registroempresa.numRegistroEmpresa=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo ' 
        <div id="b3" name="b3" class="col-12 tamaño badge badge-success btn btn-success"><h1 class="text-light" style="font-size: 300%"><img src="../../img/index/footer/edificio.ico" style="width: 50px; height: 35px; border-radius: 50px;">--> Click y Edita Empresa '.$fila['nombreEmpresa'].'</h1></div>';}}?> 

   <?php  
  $seleccionar1="SELECT * FROM registrotienda INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda .numRegistroTienda=email.numRegistroGlobal  INNER JOIN redsocial ON registrotienda.numRegistroTienda=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registrotienda.numRegistroTienda=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar1);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

      
 <div id="b2" name="b2" class="col-12 tamaño badge badge-warning btn btn-warning"><h1 class="" style="font-size: 300%"><img src="../../img/index/footer/tienda.ico" style="width: 50px; height: 35px; border-radius: 50px;">--> Click y Edita Tienda '.$fila['nombreTienda'].'</h1></div> ';}}?> 



      <?php  
  $seleccionar="SELECT * FROM registroproductoindividual INNER JOIN direccion ON registroproductoindividual.numRegistroProductoIndividual=direccion.numRegistroGlobal INNER JOIN descripcion ON registroproductoindividual.numRegistroProductoIndividual=descripcion.numRegistroGlobal INNER JOIN celular ON registroproductoindividual.numRegistroProductoIndividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoIndividual=email.numRegistroGlobal INNER JOIN usuariosclave ON registroproductoindividual.numRegistroProductoIndividual=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoIndividual=insertimglogo.numRegistroGlobal INNER JOIN link ON registroproductoindividual.numRegistroProductoIndividual=link.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

  <div id="b0" name="b0" class="col-12 tamaño badge badge-danger btn btn-danger"><h1 class="" style="font-size: 300%"><img src="../../img/index/footer/producto.ico" style="width: 50px; height: 35px; border-radius: 50px;">--> Click y Edita Producto ó servicio '.$fila['producto'].'</h1></div> ';}}?> 

      <header class="" style="height:100%;text-overflow: ellipsis;overflow: hidden;overflow-y: scroll;overflow-x: scroll;padding-bottom: 20px;border-style: solid;border-color: green;">


				         
	
	<?php  
 	$seleccionar="SELECT * FROM registroempresa INNER JOIN direccion ON registroempresa.numRegistroEmpresa=direccion.numRegistroGlobal INNER JOIN descripcion ON registroempresa.numRegistroEmpresa=descripcion.numRegistroGlobal INNER JOIN celular ON registroempresa.numRegistroEmpresa=celular.numRegistroGlobal INNER JOIN email ON registroempresa.numRegistroEmpresa=email.numRegistroGlobal INNER JOIN paginaweb ON registroempresa.numRegistroEmpresa=paginaweb.numRegistroGlobal INNER JOIN redsocial ON registroempresa.numRegistroEmpresa=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registroempresa.numRegistroEmpresa=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroempresa.numRegistroEmpresa=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
 	while($fila = mysqli_fetch_array($mostrartabla)){
 		if ($traeid==$fila[0]) {

 			 echo ' 
  <!--    empresas  -->

  <form id="f1" name="f1" action="CrearEmpresaBase.php" method="post" enctype="multipart/form-data" class="">
  
      

<!-- primera columna -->  
<!--   caja izquierda -->
      <aside style="width: 50%;float:left;">
       
<!--  primera caja interna arriba izq -->
        <div style="width: 50%;float:left;">
          <label for="usuario2">UsuarioRegistro</label><input style="width: 90%;"required type="text" id="usuario2" name="usuario2" value="'.$fila['usuario'].'" class="form-control" readonly="readonly">
        </div> 
<!--  primera caja interna arriba der -->
       <div style="width: 50%;float:left;">
         <label for="nombreempresa">Nombre de la Empresa</label><input style="width: 90%;"required type="text" id="nombreEmpresa" name="nombreEmpresa" class="form-control"  value="'.$fila['nombreEmpresa'].'" readonly="readonly">
         <label for="nit"><a href="https://linea.ccb.org.co/CertificadosElectronicosR/Index.html#/inicio" target="_blank" title="¿Que es el nit ve a link de este enlace?">Nit(Registro Camara comercio)</a></label><input style="width: 90%;"required type="text" id="nit" name="nit" class="form-control" value="'.$fila['nit'].'" readonly="readonly">
      </div> 
     
<!--   segunda caja interna centro izq -->  
       <div style="width: 50%;float:left;">
        <div class="col-6 float-left">
        
       </div>
         <br>
        <div class="col-12 float-left">
               <label for="ciudad2">Ciudad</label><input required maxlength="100" type="text" id="ciudad2" name="ciudad2" class="form-control" value="'.$fila['ciudad'].'" readonly="readonly">
               <label for="barrio2">Barrio</label><input required maxlength="100" type="text" id="barrio2" name="barrio2" class="form-control" value="'.$fila['barrio'].'" readonly="readonly">
               <label for="direccion2">Direccion</label><input required maxlength="150" type="text" id="direccion2" name="direccion2" class="form-control" value="'.$fila['direccion'].'" readonly="readonly">
        </div>

      </div>

<!--   segunda caja interna centro der-->
       <div style="width: 50%;float:left;">
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
     <div style="width: 50%;float:left;padding:10px">
              <label for="seleccionArchivos" class="col-12 success">Imagen Logo ó producto</label>
              <div class=" btn btn-success col-12  float-left" ><img id="imagenPrevisualizacion1" width="100%" height="180" src="'.$fila['ruta'].'"></div>
              <div style="width:100%;" class="col-12 btn btn-success"><input type="file" id="seleccionArchivos1" name="imagen1" accept="image/*" class="col-12" >
              </div>
          
      </div> 
<!-- tercera caja interna abajo der -->
        <div style="width: 50%;float:right;padding:10px">
           <label for="nombreempresa">Descripcion de tu Empresa</label>
           <textarea style="width: 90%;height:23%" required id="descripcion2"  name="descripcion2" maxlength="500" value="'.$fila['descripcion'].'">'.$fila['descripcion'].'</textarea>
        </div>
       
       
     </aside> <!-- fin caja derecha --> 
<!-- segunda columna -->
<!-- caja derecha -->  
      
      <aside style="width:50%;float: right;">
<!-- primera caja interna arriba izq -->     
        <div style="width: 50%;float: left;">
           
        
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
      <div style="width: 50%;float: left;">
          <label for="adicional2">Que Profesion u otro servicio?</label><input style="width:90%;" required maxlength="40" type="text" id="adicional2" name="adicional2" class="form-control" value="'.$fila['adicional'].'">
      </div>

<!-- segunda caja interna centro izq --> 
       <div style="width: 50%;float: left;">
        <div style="width:90%;padding: 5%;">
         <label for="celularEmpresa">Celular Empresa</label><input required type="text" id="celularEmpresa" name="celularEmpresa" class="form-control"  pattern="[0-9]*" minlength="7" maxlength="10" placeholder="ejemplo 313... 10 numeros máximo" value="'.$fila['celular'].'">
         <label for="celularEmpresa">Telefono Empresa</label><input required type="text" id="telefonoEmpresa" name="telefonoEmpresa" class="form-control"  pattern="[0-9]*" minlength="7" maxlength="10" placeholder="ejemplo 031... poner indicatico ciudad 10 numeros máximo" value="'.$fila['telefono'].'">
         <label for="emailEmpresa">Email Empresa</label><input required maxlength="320" type="email" id="emailEmpresa" name="emailEmpresa" class="form-control" value="'.$fila['email'].'">
         <label for="paginaweb">Link -> Pagina Web</label><input required maxlength="2083" type="text" id="paginawebEmpresa" name="paginawebEmpresa" class="form-control" value="'.$fila['paginaweb'].'">
         <label for="redsocial2">Link -> red social pionera</label><input required maxlength="2083" type="text" id="redsocial2" name="redsocial2" class="form-control" value="'.$fila['redsocial'].'">
        </div>

      </div>

<!-- segunda caja interna centro der --> 
       <div style="width: 50%;float: left;">
        <br>
          <label for="contrasena2">cree su contraseña</label><input required type="text" id="contrasena2" name="contrasena2" class="form-control" onchange="subirusuario()" pattern=".{8,}" minlength="8" maxlength="12" value="'.$fila['contrasena'].'">
         <label for="confirmarContrasena2">Confirme su contraseña</label><input required type="text" id="confirmarContrasena2" name="confirmarContrasena2" class="form-control"  onchange="verificar2();subirusuario();" pattern=".{8,}" minlength="8" maxlength="12" value="'.$fila['confirmar1'].'">
         <br><br><br>
          
      </div>
    <!-- tercera caja interna baja completa -->
      <div style="width: 100%;float: left;">
        <input required type="submit" value="Editar" onclick=this.form.action="modificarestablempresa.php?id=' .$fila[0]. '" class="float-right btn btn-success col-6">
      </div>
      </aside><!-- fin caja derecha --> 

  </form>';}}?>

        <?php  
  $seleccionar1="SELECT * FROM registrotienda INNER JOIN direccion ON registrotienda.numRegistroTienda=direccion.numRegistroGlobal INNER JOIN descripcion ON registrotienda.numRegistroTienda=descripcion.numRegistroGlobal INNER JOIN celular ON registrotienda.numRegistroTienda=celular.numRegistroGlobal INNER JOIN email ON registrotienda .numRegistroTienda=email.numRegistroGlobal  INNER JOIN redsocial ON registrotienda.numRegistroTienda=redsocial.numRegistroGlobal INNER JOIN usuariosclave ON registrotienda.numRegistroTienda=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registrotienda.numRegistroTienda=insertimglogo.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar1);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

  <!--    Tiendas  -->

  <form id="f2" name="f2" action="CrearTiendaBase.php" method="post" enctype="multipart/form-data"  class="">
  
      

<!-- primera columna -->  
<!--   caja izquierda -->
      <aside style="width: 50%;float:left;">
       
<!--  primera caja interna arriba izq -->
        <div style="width: 50%;float:left;">
          <label for="usuario1">UsuarioRegistro</label><input style="width: 90%;"required type="text" id="usuario1" name="usuario1" value="'.$fila['usuario'].'" class="form-control" readonly="readonly">
        </div> 
<!--  primera caja interna arriba der -->
       <div style="width: 50%;float:left;">
         <label for="nombretienda">Nombre de la Tienda</label><input style="width: 90%;" required type="text" id="nombreTienda" name="nombreTienda" class="form-control" value="'.$fila['nombreTienda'].'" readonly="readonly">
          <label for="rut"><a href="https://muisca.dian.gov.co/WebRutMuisca/DefConsultaEstadoRUT.faces" target="_blank" title="¿Que es el rut ve a link de este enlace? o consulte el suyo">Rut (Registro Único Tributario)</a></label><input style="width: 90%;"required maxlength="30" type="text" id="rut" name="rut" class="form-control" readonly="readonly" value="'.$fila['rut'].'">
      </div>

               
     
<!--   segunda caja interna centro izq -->  
       <div style="width: 50%;float:left;">
                <br>
            <div class="col-12 float-left">
               <label for="ciudad1">Ciudad</label><input required maxlength="100" type="text" id="ciudad1" name="ciudad1" class="form-control" value="'.$fila['ciudad'].'" readonly="readonly">
               <label for="barrio1">Barrio</label><input required maxlength="100" type="text" id="barrio1" name="barrio1" class="form-control" value="'.$fila['barrio'].'" readonly="readonly">
               <label for="direccion1">Direccion</label><input required maxlength="150" type="text" id="direccion1" name="direccion1" class="form-control" value="'.$fila['direccion'].'" readonly="readonly">
             </div>

        </div>

      
<!--   segunda caja interna centro der-->
       <div style="width: 50%;float:left;">
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
     <div style="width: 50%;float:left;padding:10px"> 
              <label for="seleccionArchivos" class="col-12 success">Imagen Logo ó producto</label>
              <div class="btn btn-success col-12  float-left" ><img id="imagenPrevisualizacion2" width="100%" height="180" src="'.$fila['ruta'].'"></div>
              <div style="width:100%;" class="col-12 btn btn-success"><input type="file" id="seleccionArchivos2" name="imagen2" accept="image/*" class="col-12" >
              </div>
              
     </div>
       
<!-- tercera caja interna abajo der -->
        <div style="width: 50%;float:right;padding:10px">
          <label for="nombretienda">Descripcion de tu Tienda</label>
          <textarea style="width: 90%;height:23%" required id="descripcion1"  name="descripcion1" maxlength="500">'.$fila['descripcion'].'</textarea>
        </div>
       
       
     </aside> <!-- fin caja derecha --> 
<!-- segunda columna -->
<!-- caja derecha -->  
      
      <aside style="width:50%;float: right;">
<!-- primera caja interna arriba izq -->     
        <div style="width: 50%;float: left;">
           
        
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
      <div style="width: 50%;float: left;">
          <label for="adicional1">Que Profesion u otro servicio?</label><input style="width:90%;" required type="text" id="adicional1" name="adicional1" class="form-control" value="'.$fila['adicional'].'">
      </div>

<!-- segunda caja interna centro izq --> 
       <div style="width: 50%;float: left;">
        <div style="width:90%;padding: 5%;">
         <label for="celularTienda">Celular Tienda ó persona natural</label><input required  pattern="[0-9]*" minlength="10" maxlength="10" type="text" id="celularTienda" name="celularTienda" class="form-control" placeholder="ejemplo 313... 10 numeros máximo" value="'.$fila['celular'].'"> 
         <label for="emailTienda">Email Tienda ó persona natural</label><input required maxlength="320" type="email" id="emailTienda" name="emailTienda" class="form-control" value="'.$fila['email'].'">
         <label for="redsocial1">Link -> red social pionera</label><input required maxlength="320" type="text" id="redsocial1" name="redsocial1" class="form-control" value="'.$fila['redsocial'].'">
        </div>

      </div>

<!-- segunda caja interna centro der --> 
       <div style="width: 50%;float: left;">
        <br>
          <label for="contrasena1">cree su contraseña</label><input required type="text" id="contrasena1" name="contrasena1" class="form-control" onchange="subirusuario()"  minlength="8" maxlength="12" value="'.$fila['contrasena'].'">
          <label for="confirmarContrasena1">Confirme su contraseña</label><input required type="text" id="confirmarContrasena1" name="confirmarContrasena1" class="form-control" onchange="verificar1();subirusuario();"  minlength="8" maxlength="12" value="'.$fila['confirmar1'].'">
         <br><br><br>
          
      </div>
    <!-- tercera caja interna baja completa -->
      <div style="width: 100%;float: left;">
         <input required type="submit" value="Editar" onclick=this.form.action="modificarestabletienda.php?id=' .$fila[0]. '" class="float-right btn btn-success col-6">
      </div>
      </aside><!-- fin caja derecha --> 

  </form>';}} ?>


      <?php  
  $seleccionar="SELECT * FROM registroproductoindividual INNER JOIN direccion ON registroproductoindividual.numRegistroProductoIndividual=direccion.numRegistroGlobal INNER JOIN descripcion ON registroproductoindividual.numRegistroProductoIndividual=descripcion.numRegistroGlobal INNER JOIN celular ON registroproductoindividual.numRegistroProductoIndividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoIndividual=email.numRegistroGlobal INNER JOIN usuariosclave ON registroproductoindividual.numRegistroProductoIndividual=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoIndividual=insertimglogo.numRegistroGlobal INNER JOIN link ON registroproductoindividual.numRegistroProductoIndividual=link.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

  <!--    Producto o servicio  -->

    <form id="f3" name="f3" action="CrearProdservBase.php" method="post" enctype="multipart/form-data" class="">

      <div class="col-6 float-left">
          
        <label for="usuario3">UsuarioRegistro</label><input required type="text" id="usuario3" name="usuario3" class="form-control" readonly="readonly" value="'.$fila['usuario'].'">
        <div class="col-6 float-left">
             <label for="nombrepersona">Quien Ofrece Producto o servicio</label><input required type="text" id="nombrepersona" name="nombrepersona" class="form-control" value="'.$fila['nombrecomercio'].'" readonly="readonly">
             <label for="Cedula">cedula de la persona que ofrece producto o servicio</label><input required type="text" id="Cedula" name="Cedula" class="form-control" value="'.$fila['cedula'].'" readonly="readonly">
        </div> 
             <div class="col-6 float-left">
              <label for="nombreProdServ">Descripcion del Producto o servicio</label>
              <textarea style="width: 100%;height: 120px;" required id="descripcion3"  name="descripcion3" maxlength="500">'.$fila['descripcion'].'</textarea>
             </div>

             <div class="col-6 float-left inline">
              
                <div class=" btn btn-success col-12  float-left"><img src="'.$fila['ruta'].'" id="imagenPrevisualizacion3" width="100%" height="200"></div>
              <div style="width:100%;" class="col-12  btn btn-success"><input type="file" id="seleccionArchivos3" name="imagen3"accept="image/*" class="col-12" ></div> 
          </div>

             <div class="col-6 float-left inline">              
               <label for="Nlink">Ingrese el link de su imagen</label><input required maxlength="2083" type="text" id="Nlink" name="Nlink" class="form-control" placeholder="https://" value="'.$fila['link'].'">
              </div>
               <!-- <label for="imagen3" class="col-12 success">Imagen Logo servicio ó Producto</label>
              <input required  type="file" id="imagen3" name="imagen3" class="form-control col-4 float-left">
                </div> -->
              <div class="col-6 float-left inline">              
               <label for="Nproducto">Nombre de Producto</label><input required maxlength="100" type="text" id="Nproducto" name="Nproducto" class="form-control" value="'.$fila['producto'].'">           
               
             </div>

             <div class="col-6 float-left inline">              
               <label for="valor3">Valor</label><input required type="text" id="valor3" name="valor3" class="form-control" value="'.$fila['valor'].'">            
               
             </div> 
            
          </div> 
          
        <div class="col-3 float-left">
           
        <!-- segunda columna -->  
         <label for="seccion">Seccion</label>
          <select name="seccion3" class="form-control" value="'.$fila['seccion'].'">
            <option value="'.$fila['seccion'].'" selected hidden>'.$fila['seccion'].'</option>
            <option value="Ventas_Individuales">Ventas_Individuales</option>
            <option value="Profesiones">Profesiones</option>  
            <option value="Otros_Servicios">Otros_Servicios</option>             
            <option value="Vehiculo">Vehiculos</option>
            <option value="Viviendas">Viviendas</option>
            <option value="Trueque">Trueque</option>
                
          </select>

         </div>

         <div class="col-3 float-left">
           <label for="adicional3">Que Profesion ,rama u otro servicio?</label><input required  maxlength="40" type="text" id="adicional3" name="adicional3" class="form-control" value="'.$fila['adicional'].'">
          </div>


        

        <div class="col-3 float-left">
               <label for="ciudad3">Ciudad donde vive</label><input required  maxlength="100" type="text" id="ciudad3" name="ciudad3" class="form-control" value="'.$fila['ciudad'].'" readonly="readonly">
               <label for="barrio3">Barrio donde vive</label><input required maxlength="100" type="text" id="barrio3" name="barrio3" class="form-control" value="'.$fila['barrio'].'" readonly="readonly">
               <br> 
               <label for="direccion3">Direccion</label><input required maxlength="150" type="text" id="direccion3" name="direccion3" class="form-control" value="'.$fila['direccion'].'" readonly="readonly">

            <label for="Coordenadas3">Coordenadas (opcional <a href="https://youtu.be/yd8VbNZFu5U"  target="blank">Mira como hacerlo</a> ) <br><a href="https://www.google.com/maps/place/Ciudad+Verde,+Soacha,+Cundinamarca/@4.5981808,-74.2367544,14z/data=" target="blank"> Ve a maps Consigue tu ubicación</a></label><textarea required maxlength="1000" type="text" id="coordenadas3" name="coordenadas3" class="form-control"  title="
            Abre Google Maps.
            Accede a las indicaciones, al mapa que quieras insertar.
            En la parte superior izquierda, haz clic en Menú, tres lineas horizontales.
            Haz clic en Compartir o incorporar el mapa pestaña derecha.
            Haz clic en Insertar un mapa.
            A la izquierda del cuadro de texto, haz clic en el icono de la flecha hacia abajo Flecha hacia abajo para elegir el tamaño mediano.
            Copia el texto en el cuadro y pégalo en el HTML de tu sitio web o blog solicitado." style="width:90%" value="">'.$fila['coordenadas'].'</textarea>
               
        </div>


        

        <div class="col-3 float-left">
           <label for="celularProductoIndividual">Celular ó telefono de contacto</label><input required type="text" id="celularProductoIndividual" name="celularProductoIndividual" class="form-control"   pattern="[0-9]*" minlength="7" maxlength="10" placeholder="ejemplo 031... ó 313... 10 numeros máximo" value="'.$fila['celular'].'">
           <label for="emailProductoIndividual">Email contacto</label><input required maxlength="320" type="email" id="emailProductoIndividual" name="emailProductoIndividual" class="form-control" value="'.$fila['email'].'">
        
        </div>
                  

        <div class="col-1 float-left inline">
               <label for="compartir3">Compartir ubicacion?</label>
               <select name="compartir3" class="form-control" value="'.$fila['mostrarubicacion'].'">
               <option value="'.$fila['mostrarubicacion'].'" selected>'.$fila['mostrarubicacion'].'</option>
               <option value="Si">Si</option> 
               <option value="No">No</option>
               </select>
         </div>
                

        <div class="col-1 float-left inline">
        <label for="Domicilios3">Realiza domicilios?</label>
               <select name="domicilios3" id="domicilios3"class="form-control" value="'.$fila['domicilios'].'">
             <option value="'.$fila['domicilios'].'" selected>'.$fila['domicilios'].'</option>
              <option value="Si">Si</option> 
              <option value="No">no</option>
         </select>
        </div>



             
        <div class="col-3 float-left">
               <label for="contrasena3">cree su contraseña resguarda publicacion</label><input required type="text" id="contrasena3" name="contrasena3" class="form-control" onchange="subirusuario()"  minlength="8" maxlength="12" value="'.$fila['contrasena'].'">

               <label for="confirmarContrasena3">Confirme su contraseña resguarda publicacion</label><input required type="text" id="confirmarContrasena3" name="confirmarContrasena3" class="form-control"  onchange="verificar2();subirusuario();"  minlength="8" maxlength="12" value="'.$fila['confirmar1'].'">
             
          <!-- <br><br><br><br><br><br><br><br><br> --> 

               <div class="col-12">
                <br>
               <input required type="submit" value="editar actualizar" onclick=this.form.action="modificarestableproductosindividuales.php?id=' .$fila[0]. '" class="float-right btn btn-success col-6">
               </div>        
        </div>


           
        


         
      </form>';}} ?>


<!-- <form action='MostrarTienda.php' method='post'> -->
    <!-- e.preventDefault(); -->
<div id="registrotienda" name="registrotienda"  class="letrat">
  <br>
      <label class="padding btn btn-success">Estas son tus tiendas registradas =)</label>
 <?php
 // include ("../Conexion/conexion.php");
       
     
    
      $busqueda="SELECT * FROM registrotienda WHERE usuario='$usuario'";
      $result = mysqli_query($conexion,$busqueda);

      $busqueda1="SELECT * FROM direccion WHERE usuario='$usuario'";
      $result1 = mysqli_query($conexion,$busqueda1);   

          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%'>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>IR</b></td>
          <td><b>Editar</b></td>          
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Rut</b></td>
          <td><b>NumContrato1</b></td>
          <td><b>NombreTienda</b></td>
          <td><b>Seccion</b></td>
          <td><b>Ciudad1</b></td>
          <td><b>Barrio1</b></td>
          <td><b>Direccion1</b></td>
          <!-- <td><b>coordenadas</b></td> -->
          <td><b>compartir</b></td>
           <td><b>domicilios</b></td>
        
          <!-- <td><b>Borrar</b></td>  --> 

          
          
          </tr>\n";

          while ($row = mysqli_fetch_array($result) and ($row1 = mysqli_fetch_array($result1))) {
           echo "<form action='MostrarTienda.php' method='post'>";
           echo"<tr>

            <td class='text-center'><a href='modificarestabl.php?id=". $row1[0] ."'>Campo 1</a></td> 
            <td class='btn-success text-center'><a href='../crearTienda/MostrarTienda.php?id=". $row[0] ."' style='color: white;'>Campo 2</a></td> 
            <td>$row[0]</td>           
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td><a href='modificarestabl.php?id=". $row1[0] ."'>$row[5]</a></td>    
            <td>$row[6]</td>           
            <td>$row1[3]</td>
            <td>$row1[4]</td>
            <td>$row1[5]</td>
            <!-- <td>$row1[6]</td> -->
            <td>$row1[7]</td>
            <td>$row1[8]</td>
            
           <!--  <td><a href=''>Borrar</a></td> -->
           
            
            
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
     
          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%'>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>IR</b></td>
          <td><b>Editar</b></td>  
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>Nit</b></td>
          <td><b>NumContrato2</b></td>
          <td><b>NombreEmpresa</b></td>
          <td><b>Seccion</b></td>
          <td><b>Ciudad1</b></td>
          <td><b>Barrio1</b></td>
          <td><b>Direccion1</b></td>
          <!-- <td><b>coordenadas</b></td> -->
          <td><b>compartir</b></td>
           <td><b>domicilios</b></td>
          
          <!-- <td><b>Borrar</b></td>  --> 
          
          
          </tr>\n";

          while ($row = mysqli_fetch_array($result) and ($row1 = mysqli_fetch_array($result1))) {
           echo "<form action='../crearTienda/MostrarTienda.php' method='post'>";
           echo"<tr>
             
              <td class='text-center'><a href='modificarestabl.php?id=". $row[0] ."'>Campo 1</a></td>            
            <td class='btn-info text-center'><a href='../crearTienda/MostrarEmpresa.php?id=". $row[0] ."' style='color: white;'>Campo 2</a></td>
            <td>$row[0]</td>           
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td><a href='modificarestabl.php?id=". $row[0] ."'>$row[5]</a></td>   
            <td>$row[6]</td>             
            <td>$row1[3]</td>
            <td>$row1[4]</td>
            <td>$row1[5]</td>
            <!-- <td>$row1[6]</td> -->
            <td>$row1[7]</td>
            <td>$row1[8]</td>
           
          <!--  <td name='pri' id='pri'><a style='color: #FF0000;' onclick='desicion();' href='../almacenProductos/borrarcom1.php?id=".$row[0]."'>Borrar</a></td> -->
                       
           
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
     
          echo "<table id='tabla1' border ='20' style='border:10px solid #28a745;' width='100%'>\n";
          echo "<td COLSPAN='15'><a  href='tablaComando.php' target='_top'></a></td>";
                
          echo"<tr>
          <td><b>IR</b></td>
          <td><b>Editar</b></td>  
          <td><b>NumRegistro</b></td>
          <td><b>Usuario</b></td>
          <td><b>Tabla</b></td>
          <td><b>cedula</b></td>
          <td><b>NumContrato3</b></td>
          <td><b>Nombre Producto</b></td>
          <td><b>valor</b></td>
          <td><b>Ciudad1</b></td>
          <td><b>Barrio1</b></td>
          <td><b>Direccion1</b></td>
          <!-- <td><b>coordenadas</b></td> -->
          <td><b>compartir</b></td>
          <td><b>domicilios</b></td>
          
          <!-- <td><b>Borrar</b></td>  -->  
          
          
          </tr>\n";

          while ($row = mysqli_fetch_array($result) and ($row1 = mysqli_fetch_array($result1))) {
           echo "<form action='../crearTienda/MostrarTienda.php' method='post'>";
           echo"<tr>
             <td class='text-center' ><a href='modificarestabl.php?id=". $row[0] ."'>Campo 1</a></td>            
             <td class='btn-danger text-center'><a href='../crearTienda/MostrarProducto.php?id=". $row[0] ."' style='color: white;'>Campo 2</a></td>
            <td>$row[0]</td>           
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td><a href='modificarestabl.php?id=". $row[0] ."'>$row[5]</a></td>  
            <td>$row[6]</td>             
            <td>$row1[3]</td>
            <td>$row1[4]</td>
            <td>$row1[5]</td>
            <!-- <td>$row1[6]</td> -->
            <td>$row1[7]</td>
            <td>$row1[8]</td>
            
           <!--  <td><a href=''>Borrar</a></td> -->
           
            
            
            </tr>\n";
            }
         

            
          echo "</table>\n";
    ?>
   </div>

  </header>

   <!-- //footer -->
        <?php
        include("../footer/footer.php")
        ?>

<!--
       <label style="font-size:20px;" class="badge badge-success">si no desea modificar imagen selecione casilla <input type="checkbox" name="aprobar" id="aprobar"></label>        
   <form action="" method="post" enctype="multipart/form-data">   
        
      
        	<section class="col-6 float-left" style="background:;display: inline-block;">
       <div class=" badge badge-success col-12  float-left"><img src="' .$fila[22].'" id="imagenPrevisualizacion" id="imagenPrevisualizacion" width="100%" height="320"></div>
       <div style="width:100%;" class="col-12 bordes badge badge-success"><input  type="file" id="seleccionArchivos" name="seleccionArchivos" accept=".jpg, .jpeg, .png" class="col-12 bordes" value="'.$fila[22].'"></div>         
       
        
        
        <br><br>


    </section> 
	
    <section class="col-6 float-left" style="background:;display: inline-block;" id="f" name="f">
    	<h1 class="badge badge-success bordes col-12">datos del Producto</h1>
    	<input type="hidden" id="tienda" name="tienda" class="form-control col-8" value="'.$fila[1].'">

         <h1 class="col-4 badge badge-success bordes">Producto</h1><input required placeholder="chocolates" type="text" id="producto" name="producto" class="form-control col-8" value="'.$fila[4].'">

		    <h1 class="col-4 badge badge-success bordes">Descripción</h1><input required placeholder="ferrero 249gr" type="text" id="descripcion" name="descripcion" class="form-control col-8" value="'.$fila[5].'">

               <h1 class="col-4 badge badge-success bordes">Embalaje X</h1><input required placeholder="24" type="text" id="embalaje" name="embalaje" class="form-control col-8" value="'.$fila[6].'">

               <h1 class="col-4 badge badge-success bordes">Cantidad X</h1><input required placeholder="24" type="text" id="cantidad" name="cantidad" class="form-control col-8" value="'.$fila[7].'">

	           <h1 class="col-4 badge badge-success bordes">Valor</h1><input required placeholder="24000" type="number" id="valor" name="valor"onchange="sumado();sumado1()"class="form-control col-8" value="'.$fila[8].'">

	           <h1 class="col-4 badge badge-success bordes">Iva</h1><input required type="text" id="iva" name="iva" readonly class="form-control col-8" value="'.$fila[9].'">

	           <h1 class="col-4 badge badge-success bordes">Total+Iva</h1><input required type="number" id="tiva" name="tiva" readonly class="form-control col-8" value="'.$fila[10].'">

	           <h1 class="col-4 badge badge-success bordes">Descuento %</h1><input required placeholder="10" type="text" id="descuento" name="descuento" maxlength="2" onchange="sumado1()"class="form-control col-8" value="'.$fila[11].'">

	           
	           <h1 class="col-4 badge badge-success bordes">precio total</h1><input required type="number" id="total" name="total" readonly class="form-control col-8" value="'.$fila[12].'">
                <br>

                 <button onclick=this.form.action="modificarpro1base.php?id=' .$fila[2]. '" class="col-2 badge badge-success bordes float-right">Cambiar</button>
	            
    </section>   



    </form>-->
 


     </body> 
</html>
