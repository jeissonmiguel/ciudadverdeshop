<?php 
 // session_start();
  include("../conexion/conexion.php");
   // $usuario="80815886";
   $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
// echo $usuario;
$confirmacionclaves="SELECT * FROM usuariosclave WHERE usuario='$usuario' and tabla='registrousuario'";
 $result = mysqli_query($conexion,$confirmacionclaves);
			$contrasena="";
			$ccontrasena="";
			 while ($row = mysqli_fetch_row($result)) { 
			 // if ($row[1]==$usuario) {
			          // $registro=$row[0];
			          // $usuario=$row[1];
			          // $tabla=$row[2];
			          $contrasena=$row[3];
			          $ccontrasena=$row[4];
			          // echo $registro.'<br>';
			          // echo $usuario.'<br>';
			          // echo $tabla.'<br>';
			          // echo $contrasena.'<br>';
			          // echo $ccontrasena.'<br>';
			          // }         
               }

               if ($contrasena==$ccontrasena) {
               	// echo "continua en la app";
               	# code...
               }else{
               	echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<script src="../../js/login/cambiarcontraseña.js"></script>
	<link rel="stylesheet" href="../../css/login/login.css" type="text/css"/>
	<link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>
    <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body style="zoom:100%;" class="jumbotron container-fluid col-lg-5 col-xs-6 col-md-6 letrat1">

	 <br> 

	 <!-- <form action="../../index.html" class="letra">
		 <button type="submit" onclick=this.form.action="../../index.html" class="padding badge badge-success btn btn-warning float-right col-12"><= Ir pantalla principal</button>
      </form> -->

	<br>	
	<div>
		<div class="padding badge badge-success col-12"><h3 class="display-6">Cambia la contraseña Generica</h3></div>
	 
		   <form  method="post" action="procesocambio.php">		   
		    <br>
			<input class="trans" type="password" placeholder="Nueva contrasena" id="contrasena" name="contrasena"  autofocus required  pattern=".{8,}" minlength="5" maxlength="10">
			<br><br>
			<input class="trans"  type="password" placeholder="Confirmar Nueva contrasena" id="confirmar" name="confirmar" required onchange="verificar();" pattern=".{8,}" minlength="5" maxlength="16">
			<br><br>
			
			<button type="submit" class="trans btn btn-success" onclick=this.form.action="procesocambio.php">Cambiar</button>		
			<br>
			<br>

			
	   </form>
<!-- <div>
   <a href="recuperarclave.php" class="blanco" style="color:white;">· Olvide mi contraseña</a>
   <br>
	<a href="../registrate/registrate.php" class="blanco" style="color:white;">· ¿Aun no te has registrado? ¡registrate!</a>
</div> -->
   </div>

         
	
</body>
</html>';
die();
               }












   // $emailE="";
   // $registro="";
   // $usuario="";
			
			// // $conexion=mysqli_connect("localhost","root","","citygreen");

			// $email= (isset($_POST['email'])    ? $_POST['email']    : '');
			// $busquedaEmail="SELECT * FROM email WHERE tabla='registrousuario'";
   //          $result = mysqli_query($conexion,$busquedaEmail);
			
			//  while ($row = mysqli_fetch_row($result)) { 
			//  if ($row[3]==$email) {
			//           $registro=$row[0];
			//           $usuario=$row[1];
			//           $emailE=$row[3];
			//           echo $registro.'<br>';
			//           echo $usuario.'<br>';
			//           }         
   //             }
            
			// if(isset($_POST['email'])  && !empty($_POST['email'])){
			// $pass=substr(md5(microtime()),1,10);
								   
						  			   
			//       $cambiarclave="UPDATE usuariosclave set contrasena='$pass' where numRegistroGlobal='$registro'";
			//       if ($email!=$emailE){			                   
   //                    echo "<script type='text/javascript'>alert('no existe en la base de datos');</script>";
   //                  }else{
   //                  echo $pass.'<br>';
			//          echo $email.'<br>';
			//          echo $emailE.'<br>';
			//          if(mysqli_query($conexion,$cambiarclave))
			//          {
			//           echo "<script type='text/javascript'>alert('Contraseña actualizada con exito ve a tu correo para ingresar con nueva clave');</script>";
			//            $to = $emailE;
   //                     $from = "From: " . "ciudadverdeshoporiginal@gmail.com";
		 //               $subject = "recordar contraseña";
		 //               $message = "El sistema asigno la siguiente Clave: " . $pass;

	  //               	mail($to,$subject,$message,$from);
	  //               	echo "<script type='text/javascript'>alert('mensaje enviado satisfactoriamente a : $emailE');</script>";
	                	
   //                   }            
   //                }
   //              } 

                /*Envia de correo*/
               
             // Catch(Exception $e){
             // 	echo 'excepción capturada: ' , $e->getMessage(),"\n";
             // }   	


          //   if(mysqli_error($conexion,$cambiarclave)){

          //   }else{	            
           
          //   if(mysqli_query($conexion,$cambiarclave))
          //   {                         
          //   echo "<script type='text/javascript'>alert('Contraseña actualizada con exito ve a tu correo para ingresar con nueva clave');</script>"; 
          //   }else{
           
          //    echo "NO EXISTE USUARIO SI DESEA REGISTRESE ES MUY FACIL";
          //   }
          // }

             
         

						
            


	    ?>