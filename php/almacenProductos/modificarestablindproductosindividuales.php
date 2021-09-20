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
  $seleccionar="SELECT * FROM registroproductoindividual INNER JOIN direccion ON registroproductoindividual.numRegistroProductoIndividual=direccion.numRegistroGlobal INNER JOIN descripcion ON registroproductoindividual.numRegistroProductoIndividual=descripcion.numRegistroGlobal INNER JOIN celular ON registroproductoindividual.numRegistroProductoIndividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoIndividual=email.numRegistroGlobal INNER JOIN usuariosclave ON registroproductoindividual.numRegistroProductoIndividual=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoIndividual=insertimglogo.numRegistroGlobal INNER JOIN link ON registroproductoindividual.numRegistroProductoIndividual=link.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

  <div id="b0" name="b0" class="col-12 tamaño badge badge-danger btn btn-danger"><h1 class="" style="font-size: 300%"><img src="../../img/index/footer/producto.ico" style="width: 50px; height: 35px; border-radius: 50px;">--> Click y Edita Producto ó servicio '.$fila['producto'].'</h1></div> ';}}?> 

      <header class="" style="height:100%;text-overflow: ellipsis;overflow: hidden;overflow-y: scroll;overflow-x: scroll;padding-bottom: 20px;border-style: solid;border-color: green;">

         <?php  
  $seleccionar="SELECT * FROM registroproductoindividual INNER JOIN direccion ON registroproductoindividual.numRegistroProductoIndividual=direccion.numRegistroGlobal INNER JOIN descripcion ON registroproductoindividual.numRegistroProductoIndividual=descripcion.numRegistroGlobal INNER JOIN celular ON registroproductoindividual.numRegistroProductoIndividual=celular.numRegistroGlobal INNER JOIN email ON registroproductoindividual.numRegistroProductoIndividual=email.numRegistroGlobal INNER JOIN usuariosclave ON registroproductoindividual.numRegistroProductoIndividual=usuariosclave.numRegistroGlobal INNER JOIN insertimglogo ON registroproductoindividual.numRegistroProductoIndividual=insertimglogo.numRegistroGlobal INNER JOIN link ON registroproductoindividual.numRegistroProductoIndividual=link.numRegistroGlobal";
    $mostrartabla=mysqli_query($conexion,$seleccionar);
  while($fila = mysqli_fetch_array($mostrartabla)){
    if ($traeid==$fila[0]) {

       echo '

  <!--    Producto o servicio  -->

    <form id="" name="" action="CrearProdservBase.php" method="post" enctype="multipart/form-data" class="">

      <aside style="width: 100%;float:left;" class="col-lg-6 col-md-6">

          
        <label for="usuario3">UsuarioRegistro</label><input required type="text" id="usuario3" name="usuario3" class="form-control" readonly="readonly" value="'.$fila['usuario'].'">
       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
             <label for="nombrepersona">Quien Ofrece Producto o servicio</label><input required type="text" id="nombrepersona" name="nombrepersona" class="form-control" value="'.$fila['nombrecomercio'].'" readonly="readonly">
             <label for="Cedula">cedula de la persona que ofrece producto o servicio</label><input required type="text" id="Cedula" name="Cedula" class="form-control" value="'.$fila['cedula'].'" readonly="readonly">
        </div>

             <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
              <label for="nombreProdServ">Descripcion del Producto o servicio</label>
              <textarea style="width: 100%;height: 120px;" required id="descripcion3"  name="descripcion3" maxlength="500">'.$fila['descripcion'].'</textarea>
             </div>

             <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
              
                <div class=" btn btn-success col-12  float-left"><img src="'.$fila['ruta'].'" id="imagenPrevisualizacion3" width="100%" height="200"></div>
              <div style="width:100%;" class="col-12  btn btn-success"><input type="file" id="seleccionArchivos3" name="imagen3"accept="image/*" class="col-12" ></div> 
          </div>

             <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">              
               <label for="Nlink">Ingrese el link de su imagen</label><input required maxlength="2083" type="text" id="Nlink" name="Nlink" class="form-control" placeholder="https://" value="'.$fila['link'].'">
              </div>
               <!-- <label for="imagen3" class="col-12 success">Imagen Logo servicio ó Producto</label>
              <input required  type="file" id="imagen3" name="imagen3" class="form-control col-4 float-left">
                </div> -->
             <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">              
               <label for="Nproducto">Nombre de Producto</label><input required maxlength="100" type="text" id="Nproducto" name="Nproducto" class="form-control" value="'.$fila['producto'].'">           
               
             </div>

             <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">             
               <label for="valor3">Valor</label><input required type="text" id="valor3" name="valor3" class="form-control" value="'.$fila['valor'].'">            
               
             </div> 
            
          </aside> 
          
        <aside style="width: 100%;float:left;" class="col-lg-6 col-md-6">
           
        <!-- segunda columna -->  
        <div style="width: 90%;float:left;" class="col-lg-6 col-md-6">
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

        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
           <label for="adicional3">Que Profesion ,rama u otro servicio?</label><input required  maxlength="40" type="text" id="adicional3" name="adicional3" class="form-control" value="'.$fila['adicional'].'">
          </div>


        

        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
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


        

        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
           <label for="celularProductoIndividual">Celular ó telefono de contacto</label><input required type="text" id="celularProductoIndividual" name="celularProductoIndividual" class="form-control"   pattern="[0-9]*" minlength="7" maxlength="10" placeholder="ejemplo 031... ó 313... 10 numeros máximo" value="'.$fila['celular'].'">
           <label for="emailProductoIndividual">Email contacto</label><input required maxlength="320" type="email" id="emailProductoIndividual" name="emailProductoIndividual" class="form-control" value="'.$fila['email'].'">
        
        </div>
                  

        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
               <label for="compartir3">Compartir ubicacion?</label>
               <select name="compartir3" class="form-control" value="'.$fila['mostrarubicacion'].'">
               <option value="'.$fila['mostrarubicacion'].'" selected>'.$fila['mostrarubicacion'].'</option>
               <option value="Si">Si</option> 
               <option value="No">No</option>
               </select>
         </div>
                

       <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
        <label for="Domicilios3">Realiza domicilios?</label>
               <select name="domicilios3" id="domicilios3"class="form-control" value="'.$fila['domicilios'].'">
             <option value="'.$fila['domicilios'].'" selected>'.$fila['domicilios'].'</option>
              <option value="Si">Si</option> 
              <option value="No">no</option>
         </select>
        </div>



             
        <div style="width: 100%;float:left;" class="col-lg-6 col-md-6">
               <label for="contrasena3">cree su contraseña resguarda publicacion</label><input required type="text" id="contrasena3" name="contrasena3" class="form-control" onchange="subirusuario()"  minlength="8" maxlength="12" value="'.$fila['contrasena'].'">

               <label for="confirmarContrasena3">Confirme su contraseña resguarda publicacion</label><input required type="text" id="confirmarContrasena3" name="confirmarContrasena3" class="form-control"  onchange="verificar2();subirusuario();"  minlength="8" maxlength="12" value="'.$fila['confirmar1'].'">
             
          <!-- <br><br><br><br><br><br><br><br><br> --> 

               <div class="col-12">
                <br>
               <input required type="submit" value="editar actualizar" onclick=this.form.action="../almacenProductos/modificarestableproductosindividuales.php?id=' .$fila[0]. '" class="float-right btn btn-success col-6">
               </div>        
        </div>


     </aside>      
        


         
      </form>';}} ?>
       </header>
 </body>
<br><br><br></html>