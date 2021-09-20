<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 //cedula 
 $id1=(isset($_GET['id1'])    ? $_GET['id1']    : '');
 //tabla
 $id2=(isset($_GET['id2'])    ? $_GET['id2']    : '');
 //comerio
 $id=(isset($_GET['id'])    ? $_GET['id']    : '');
 $_SESSION['id3']=$id;

  
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
 <title>Document</title>
 <link rel="stylesheet" href="../../css/crearTienda/producto1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../js/calificame/calificame.js">
  <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
  </head>

<body class="letrat" style="font-size:150%;width:100%;">
<label class="badge-warning text-center col-8" style="font-size:150%;width:100%;">Estas Calificando el comercio <?php echo $id1;?></label>
<button class="badge-warning text-center col-4 float-right" onclick="javascript:window.history.back();" autofocus style="font-size:130%;width:100%;" >Volver</button> 
<label class=" badge-warning text-center" style="font-size:100%;width:100%;">Califica según las siguientes especificaciones  de 5 estrellas, <br> siendo 1 la más baja calificación y 5 la más alta </label>

<?php if($id2=="registroTienda"){echo '<form  class="" action="respuesta.php?" method="post" name="en1">';}else{echo '<form  class="" action="respuestaE.php?" method="post" name="en1">';}?>
	<label class="badge-success col-12 text-center" style="font-size:100%;">1) La atención que haz recibido es :</label>
	
     <br>           
			<div class="form-check form-check-inline" style="font-size:80%;padding: 0 17% 0 17%;">
			  <label class="form-check-label" for="inlineRadio1">( 1 ✰)<input class="form-control" type="radio" name="check_list[]" id="1uno" value="1"></label>
			  
			  
			&nbsp;&nbsp;&nbsp;
			 <label class="form-check-label" for="inlineRadio2">( 2 ✰)<input class="form-control form-check-input" type="radio" name="check_list[]" id="inlineRadio2" value="2"></label>
			
			
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 3 ✰)<input class="form-control form-check-input" type="radio" name="check_list[]" id="inlineRadio2" value="3"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 4 ✰)<input class="form-control form-check-input" type="radio" name="check_list[]" id="inlineRadio2" value="4"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 5 ✰)<input class="form-control form-check-input" type="radio" name="check_list[]" id="inlineRadio2" value="5"></label>
			</div>

			<!-- <label class="btn btn-success col-12 text-center" style="font-size:80%;padding: 0 17% 0 17%;height:50px;">enviar encuesta<input type="submit" name="submit" class="badge badge-success" value="Enviar encuesta"></label> -->
			
		
 <br><br>

			<label class="badge-success col-12 text-center" style="font-size:100%;">2) la respuesta a sido rapida:</label>
	     <br>

			<div class="form-check form-check-inline" style="font-size:80%;padding: 0 17% 0 17%;">
			  <label class="form-check-label" for="inlineRadio1">( 1 ✰)<input class="form-check-input form-control" type="radio" name="check_list1[]" id="inlineRadio1" value="1"></label>
			  
			  
			&nbsp;&nbsp;&nbsp;
			 <label class="form-check-label" for="inlineRadio2">( 2 ✰)<input class="form-control form-check-input" type="radio" name="check_list1[]" id="inlineRadio2" value="2"></label>
			
			
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 3 ✰)<input class="form-control form-check-input" type="radio" name="check_list1[]" id="inlineRadio2" value="3"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 4 ✰)<input class="form-control form-check-input" type="radio" name="check_list1[]" id="inlineRadio2" value="4"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 5 ✰)<input class="form-control form-check-input" type="radio" name="check_list1[]" id="inlineRadio2" value="5"></label>
			</div>

			<br><br>

			<label class="badge-success col-12 text-center" style="font-size:100%">3) Volverias a comprar en este comercio :</label>
	
             <br>

			<div class="form-check form-check-inline" style="font-size:80%;padding: 0 17% 0 17%;">
			  <label class="form-check-label" for="inlineRadio1">( 1 ✰)<input class="form-check-input form-control" type="radio" name="check_list2[]" id="inlineRadio1" value="1"></label>
			  
			  
			&nbsp;&nbsp;&nbsp;
			 <label class="form-check-label" for="inlineRadio2">( 2 ✰)<input class="form-control form-check-input" type="radio" name="check_list2[]" id="inlineRadio2" value="2"></label>
			
			
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 3 ✰)<input class="form-control form-check-input" type="radio" name="check_list2[]" id="inlineRadio2" value="3"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 4 ✰)<input class="form-control form-check-input" type="radio" name="check_list2[]" id="inlineRadio2" value="4"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 5 ✰)<input class="form-control form-check-input" type="radio" name="check_list2[]" id="inlineRadio2" value="5"></label>
			</div>

			<br><br>
		
         <label class="badge-success col-12 text-center" style="font-size:100%;">4) Recomendarias el comercio</label>
	
             <br>

			<div class="form-check form-check-inline" style="font-size:80%;padding: 0 17% 0 17%;">
			  <label class="form-check-label" for="inlineRadio1">( 1 ✰)<input class="form-check-input form-control" type="radio" name="check_list3[]" id="inlineRadio1" value="1"></label>
			  
			  
			&nbsp;&nbsp;&nbsp;
			 <label class="form-check-label" for="inlineRadio2">( 2 ✰)<input class="form-control form-check-input" type="radio" name="check_list3[]" id="inlineRadio2" value="2"></label>
			
			
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 3 ✰)<input class="form-control form-check-input" type="radio" name="check_list3[]" id="inlineRadio2" value="3"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 4 ✰)<input class="form-control form-check-input" type="radio" name="check_list3[]" id="inlineRadio2" value="4"></label>
			&nbsp;&nbsp;&nbsp;
			
			  
			  <label class="form-check-label" for="inlineRadio2">( 5 ✰)<input class="form-control form-check-input" type="radio" name="check_list3[]" id="inlineRadio2" value="5"></label>
			</div>
            <br><br>
			 <label class=" badge-success col-12 text-center" style="font-size:100%;">5) regalame un comentario para <br>mejorar max 206 caracteres</label>

			 <textarea requerid name="comentario" id="comentario" style="width: 100%;" rows="2" maxlength="206"></textarea>

            <label class="btn btn-success col-12 text-center" style="font-size:150%;padding: 0 17% 0 17%;height:50px;">enviar encuesta<input type="submit" name="submit" class="badge badge-success" value="Enviar encuesta"></label>


</form>

</body>

 </html>
  