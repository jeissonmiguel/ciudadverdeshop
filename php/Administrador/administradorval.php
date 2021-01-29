<?php
  session_start();
  include("../conexion/conexion.php");

// $conexion=mysqli_connect("localhost","root","","citygreen");
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');

/*drop table administrador;*/
$creartabla = "CREATE TABLE administrador (
usuario VARCHAR(20) NOT NULL,
contrasena VARCHAR(20) NOT NULL,
correo VARCHAR(100) NOT NULL,
correocontrasena VARCHAR(20) NOT NULL,

primary key(usuario),
UNIQUE KEY(usuario));";



$busqueda ="SELECT * FROM administrador where usuario ='$usuario' and contrasena ='$contrasena'";
$result = mysqli_query($conexion,$busqueda);




$numero = mysqli_num_rows($result);

   
$_SESSION['logueado']=$usuario;

//  echo $usuario;
//  echo "<br>";
//  echo $contrasena;
 
//  echo "<br>";
// echo $busqueda;
// echo $numero;

 /*if (mysqli_error($creartabla)) {   
     if ($numero>0) 
              {
       
                 echo "<script>alert('BIENVENIDO'); window.location='tablaComando.php'</script>";   
     		 
               }
               else
                    {  
                   echo "<script>alert('Dato no existe en la base de datos intente de nuevo'); window.location='Administrador.php'</script>";
                    }     	
        
    	
                   }else{
			   		 $insertartabla = mysqli_query($conexion,$creartabla);
			  	     echo "<script>alert('tabla creada correctamente'); window.location='Administrador.php'</script>"; 
			  	     $crearacceso ="INSERT INTO administrador (usuario,contrasena) VALUES ('80815886','80815886');"; 
			  	     $insertaracceso = mysqli_query($conexion,$crearacceso);

           }
*/
    $insertartabla = mysqli_query($conexion,$creartabla);

    if ($insertartabla) 
                {   
                     
			  	     echo "<script>alert('tabla creada correctamente'); window.location='Administrador.php'</script>"; 
			  	     $crearacceso ="INSERT INTO administrador (usuario,contrasena) VALUES ('80815886','80815886','ciudadverdeshoporiginal@gmail.com','80815886InicioVentas');"; 
			  	     $insertaracceso = mysqli_query($conexion,$crearacceso);
			  	 }
               else
                 {  
                    /* echo "<script>alert('tabla creada'); window.location='Administrador.php'</script>";*/
                     if ($numero>0) 
                               {
       
                                  echo "<script>alert('Bienvenido $usuario'); window.location='tablaComando.php'</script>";   
     		 
				               }
				               else
				                    {  
				                   echo "<script>alert('Datos no existe en la base de datos intente de nuevo'); window.location='Administrador.php'</script>";

				                  

				                    }  
				            
				                   
				    }     	
        
    				   		 
              
 	


?>
