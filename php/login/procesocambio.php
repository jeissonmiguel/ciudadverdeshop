<?php 
 session_start();
 include("../conexion/conexion.php");
    $usuario="";  
               $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
			// $usuario="80815886";
// echo $usuario;
// $contrasena="";
// 			$ccontrasena="";
			$email="";
			$registro="";
            $confirmacionclaves="SELECT * FROM email WHERE usuario='$usuario' and tabla='registrousuario'";
            $result1 = mysqli_query($conexion,$confirmacionclaves);
			
			 while ($row = mysqli_fetch_row($result1)) { 
			 // if ($row[1]==$usuario) {
			          $registro=$row[0];
			          // $usuario=$row[1];
			          // $tabla=$row[2];
			           $email=$row[3];
			          // $ccontrasena=$row[4];
			          // echo $registro.'<br>';
			          // echo $usuario.'<br>';
			          // echo $tabla.'<br>';
			          // echo $email.'<br>';
			          // echo $ccontrasena.'<br>';
			          // }         
               }
			// $email= (isset($_POST['email'])    ? $_POST['email']    : '');
			$busquedaEmail="SELECT * FROM email WHERE usuario='$usuario'";
            $result = mysqli_query($conexion,$busquedaEmail);
			
			 while ($row = mysqli_fetch_row($result)) { 
			 if ($row[3]==$email) {
			          // $registro=$row[0];
			          $usuario=$row[1];
			          $emailE=$row[3];
			          // echo $registro.'<br>';
			          // echo $usuario.'<br>';
			          }         
               }
            
			// if(isset($_POST['email'])  && !empty($_POST['email'])){
			// $pass=substr(md5(microtime()),1,10);

               
               $contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');
               $confirmar= (isset($_POST['confirmar'])    ? $_POST['confirmar']    : '');
				 // $contrasena="80815886";
				 // $confirmar="80815886";
				 $cambiarcontrasena='';
				 $cambiarconfirmar='';				   
				   			   
			      $cambiarcontrasena="UPDATE usuariosclave SET contrasena='$contrasena' WHERE numRegistroGlobal='$registro'";
			      $cambiarconfirmar="UPDATE usuariosclave SET confirmar1='$confirmar' WHERE numRegistroGlobal='$registro'";
			      
	     if (mysqli_query($conexion,$cambiarcontrasena)) 
          { 
          // if (mysqli_query($conexion,$cambiarconfirmar)) 
          // {       
          
          // }     
           echo "<script type='text/javascript'>alert('Contraseña actualizada con exito');window.location='selecionperfil.php';</script>"; 
           
          }
         

  ?>                  