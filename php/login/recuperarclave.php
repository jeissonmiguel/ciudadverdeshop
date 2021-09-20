<?php
 session_start(); 
 include ("../conexion/conexion.php"); 
 // session_unset(); session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="../../css/login/login.css" type="text/css"/>
	<link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>
    <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<body style="zoom:135%;background-size:100% 150%;" class="jumbotron container-fluid col-lg-5 col-xs-6 col-md-6 letrat1">

	 <br> 

	 <form action="../../index.html" class="letra">
		 <button type="submit" onclick=this.form.action="../../php/login/login.php" class="padding badge badge-success btn btn-warning float-right col-12"><= Ir pantalla login</button>
      </form>

	<br><br>	
	<div>
		<div class="padding badge badge-success col-12"><h3 class="display-6">Recuperar Clave</h3></div>
	 
		   <form  method="post" action="selecionperfil.php">		   
		    <br>
			<input class="trans" type="text" placeholder="email" id="email" name="email" autofocus>					
			<br><br>
			
			<!-- <button type="submit" class="trans btn btn-success" onclick=this.form.action="../phpmailer/PHPMailer-master/src/enviar_mail.php">Enviar correo de recuperación</button>	 -->
			<button type="submit" class="trans btn btn-success" onclick=this.form.action="recuperarclave.php">Enviar correo de recuperación</button>	
			<br>
			<br>

			
	   </form>
<?php 
 // session_start();
   include("../conexion/conexion.php");
   require '../phpmailer/PHPMailer-master/src/Exception.php';
require '../phpmailer/PHPMailer-master/src/PHPMailer.php';
require '../phpmailer/PHPMailer-master/src/SMTP.php';


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
error_reporting(0);
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
   $emailE="";
   $registro="";
   $usuario="";
			
			// $conexion=mysqli_connect("localhost","root","","citygreen");

			$email= (isset($_POST['email'])    ? $_POST['email']    : '');
			$busquedaEmail="SELECT * FROM email WHERE tabla='registrousuario'";
            $result = mysqli_query($conexion,$busquedaEmail);
			
			 while ($row = mysqli_fetch_row($result)) { 
			 if ($row[3]==$email) {
			          $registro=$row[0];
			          $usuario=$row[1];
			          $emailE=$row[3];
			          // echo $registro.'<br>';
			          // echo $usuario.'<br>';
			          }         
               }
            
			if(isset($_POST['email'])  && !empty($_POST['email'])){
			$pass=substr(md5(microtime()),1,10);
								   
						  			   
			      $cambiarclave="UPDATE usuariosclave set contrasena='$pass' where numRegistroGlobal='$registro'";
			      if ($email!=$emailE){			                   
                      echo "<script type='text/javascript'>alert('no existe en la base de datos');</script>";
                    }else{
            //         echo $pass.'<br>';
			         // echo $email.'<br>';
			         // echo $emailE.'<br>';
			         if(mysqli_query($conexion,$cambiarclave))
			         {
			          // echo "<script type='text/javascript'>alert('Contraseña actualizada con exito ve a tu correo para ingresar con nueva clave');</script>";
			          //  $to = $emailE;
             //           $from = "From: " . "ciudadverdeshoporiginal@gmail.com";
		           //     $subject = "recordar contraseña";
		           //     $message = "El sistema asigno la siguiente Clave: " . $pass;



	            //     	mail($to,$subject,$message,$from);
	            //     	echo "<script type='text/javascript'>alert('mensaje enviado satisfactoriamente a : $emailE');</script>";


	                	/////////
                        error_reporting(0);
	                	$mail = new PHPMailer(true);

							try {
							    //Server settings
							    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
							    $mail->isSMTP();                                            // Send using SMTP
							    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
							    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
							    $mail->Username   = 'ciudadverdeshoporiginal@gmail.com';                     // SMTP username
							    $mail->Password   = '80815886InicioVentas';                               // SMTP password
							    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
							    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

							    //Recipients
							    $mail->setFrom('ciudadverdeshoporiginal@gmail.com', 'admin');
							    $mail->addAddress($emailE, 'user');     // Add a recipient
							    // $mail->addAddress('ellen@example.com');               // Name is optional
							    // $mail->addReplyTo('info@example.com', 'Information');
							    // $mail->addCC('cc@example.com');
							    // $mail->addBCC('bcc@example.com');

							    // // Attachments
							    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
							    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

							    // Content
							    $mail->isHTML(true);                                  // Set email format to HTML
							    $mail->Subject = 'Recuperacion de contraseña';
							    $mail->Body    = 'este es un cambio de contraseña!, tu nueva contrasena es :</b>'. $pass ;
							    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

							    $mail->send();
							    echo "<script type='text/javascript'>alert('mensaje enviado satisfactoriamente a : $emailE');</script>";
							} catch (Exception $e) {
							    echo "hubo un error al enviar el correo: {$mail->ErrorInfo}";
							}
								                	
							                     }            
							                  }
							                } 

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
	     	
	   </body>
	</html>