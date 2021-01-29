<?php
include("../conexion/conexion.php");

       date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("%Y-%m-%d");
      $hora=strftime("%H:%M:%S");
      // $contenido="$fecha1";
      // echo $contenido;

      // $hoy = getdate();
      // print_r($hoy);
      

//tabla registro


$tabla ="registrousuario";
$numRegistroUsuario=1000000001;
$documento= (isset($_POST['documento'])    ? $_POST['documento']    : '');
$nombre1= (isset($_POST['nombre1'])    ? $_POST['nombre1']    : '');
$nombre2= (isset($_POST['nombre2'])    ? $_POST['nombre2']    : '');
$apellido1= (isset($_POST['apellido1'])    ? $_POST['apellido1']    : '');
$apellido2= (isset($_POST['apellido2'])    ? $_POST['apellido2']    : '');
$cargo= (isset($_POST['cargo'])    ? $_POST['cargo']    : '');
$celular= (isset($_POST['celular'])    ? $_POST['celular']    : '');
$genero= (isset($_POST['genero'])    ? $_POST['genero']    : '');
$email= (isset($_POST['email'])    ? $_POST['email']    : '');
$tipo= (isset($_POST['tipo'])    ? $_POST['tipo']    : '');


//tabla interes
$Licores= (isset($_POST['Licores'])    ? $_POST['Licores']    : '');
$Panaderia= (isset($_POST['Panaderia'])    ? $_POST['Panaderia']    : '');
$Comidasr= (isset($_POST['Comidasr'])    ? $_POST['Comidasr']    : '');
$Restaurante= (isset($_POST['Restaurante'])    ? $_POST['Restaurante']    : '');
$Asaderos= (isset($_POST['Asaderos'])    ? $_POST['Asaderos']    : '');
$Tecnologia= (isset($_POST['Tecnologia'])    ? $_POST['Tecnologia']    : '');




$Supermercados= (isset($_POST['Supermercados'])    ? $_POST['Supermercados']    : '');
$Droguerias= (isset($_POST['Droguerias'])    ? $_POST['Droguerias']    : '');
$Mascotas= (isset($_POST['Mascotas'])    ? $_POST['Mascotas']    : '');
$Miscelaneas= (isset($_POST['Miscelaneas'])    ? $_POST['Miscelaneas']    : '');
$Profesiones= (isset($_POST['Profesiones'])    ? $_POST['Profesiones']    : '');
$Otros= (isset($_POST['Otros'])    ? $_POST['Otros']    : '');


$Gimnasio= (isset($_POST['Gimnasio'])    ? $_POST['Gimnasio']    : '');
$Guarderia= (isset($_POST['Guarderia'])    ? $_POST['Guarderia']    : '');
$Belleza= (isset($_POST['Belleza'])    ? $_POST['Belleza']    : '');
$Vehiculo= (isset($_POST['Vehiculo'])    ? $_POST['Vehiculo']    : '');
$Vivienda= (isset($_POST['Vivienda'])    ? $_POST['Vivienda']    : '');
$Trueque= (isset($_POST['Trueque'])    ? $_POST['Trueque']    : '');


//tabla usuario
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');
$confirmar1= (isset($_POST['confirmar1'])    ? $_POST['confirmar1']    : '');


$ultimo ="SELECT * FROM registrousuario ORDER BY idRegistro desc";
$resulta = mysqli_query($conexion,$ultimo);
$fila = mysqli_fetch_row($resulta);
$mostrar=$fila[0]; 
$numRegistroUsuario=$mostrar+$numRegistroUsuario;


$insertar1="INSERT INTO registrousuario (numRegistroUsuario,tabla,tipo,documento,nombre1,nombre2,apellido1,apellido2,genero) VALUES ('$numRegistroUsuario','$tabla','$tipo','$documento','$nombre1','$nombre2','$apellido1','$apellido2','$genero')";

$insertar2="INSERT INTO celular(numRegistroGlobal,usuario,tabla,celular) VALUES ('$numRegistroUsuario','$usuario','$tabla','$celular')";

$insertar3="INSERT INTO email(numRegistroGlobal,usuario,tabla,email) VALUES ('$numRegistroUsuario','$usuario','$tabla','$email')";

$insertar4="INSERT INTO intereses (usuario,interes1,interes2,interes3,interes4,interes5,interes6,interes7,interes8,interes9,interes10,interes11,interes12,interes13,interes14,interes15,interes16,interes17,interes18) VALUES ('$usuario','$Licores','$Panaderia','$Comidasr','$Restaurante','$Asaderos','$Tecnologia','$Supermercados','$Droguerias','$Mascotas','$Miscelaneas','$Profesiones','$Otros','$Gimnasio','$Guarderia','$Belleza','$Vehiculo','$Vivienda','$Trueque')"; 

$insertar5="INSERT INTO fecha(numRegistroGlobal,usuario,tabla,fechaDeRegistro,hora,fecha) VALUES ('$numRegistroUsuario','$usuario','$tabla',' $fecha1','$hora','$fecha')";

$insertar6="INSERT INTO usuariosclave (numRegistroGlobal,usuario,tabla,contrasena,confirmar1) VALUES ('$numRegistroUsuario','$usuario','$tabla','$contrasena','$confirmar1')";  

$busqueda1 ="SELECT * FROM registrousuario where documento='$documento'";
$busqueda2 ="SELECT * FROM celular where celular='$celular'";
$busqueda3 ="SELECT * FROM email where email='$email'";

//$ultimo ="SELECT * FROM registro ORDER BY Idregistro ASC";
//$ultimo ="SELECT * FROM registro WHERE Idregistro=(SELECT min(Idregistro) FROM registro)";
//$ultimo ="SELECT MAX(documento) FROM registro";

// $result2 = mysqli_query($conexion,$ultimo);
// $numero1 = mysqli_num_rows($result2);
// //echo $numero1;

// //	
// $fila = mysqli_fetch_row($result2);
// $mostrar=$fila[0]; // 42
// echo $mostrar;


//------------------------------------------------------------------

	
	$result1 = mysqli_query($conexion,$busqueda1);
	$numero1 = mysqli_num_rows($result1);
	$mensaje1 = "<script>alert('documento : $numero1 $documento no existe en la base de datos puede continuar');'</script>";
    $Errord = "Error: " . $insertar1 . "<br>" . mysqli_error($conexion)."<script>alert('datos duplicados : $numero1 $documento revise sus campos documento');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";

  if ($numero1>0) 
  {       
    echo $Errord;  
  }
  else
  { 
  	echo $mensaje1;
  
 

 
//------------------------------------------------------------------   
	$result2 = mysqli_query($conexion,$busqueda2);
	$numero2 = mysqli_num_rows($result2);
	$mensaje2 = "<script>alert('celular : $numero2 $celular no existe en la base de datos puede continuar');'</script>";
    $Errorc = "Error: " . $insertar2 . "<br>" . mysqli_error($conexion)."<script>alert('datos duplicados : $numero2 $celular revise sus campos celular');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";

  if ($numero2>0) 
  {       
   echo $Errorc; 
  }
  else
  { 
   echo $mensaje2;
 
  
//------------------------------------------------------------------  
	$result3 = mysqli_query($conexion,$busqueda3);
	$numero3 = mysqli_num_rows($result3);
	$mensaje3 ="<script>alert('email : $numero2 $email no existe en la base de datos puede continuar');'</script>";
    $Errore = "Error: " . $insertar3 . "<br>" . mysqli_error($conexion)."<script>alert('datos duplicados : $numero3 $email revise sus campos email');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>"; 

  if ($numero3>0) 
  {       
   echo $Errore;  
  }
  else
  { 
  	echo $mensaje3;

    if (($numero1>0) and ($numero2>0) and ($numero3>0)) 
       {
       echo "no tendria que llegar aca";
       }
       else
       {
		  	$men1= mysqli_query($conexion, $insertar1);
		  	$men2= mysqli_query($conexion, $insertar2);
		  	$men3= mysqli_query($conexion, $insertar3);
		  	$men4= mysqli_query($conexion, $insertar4);
		  	$men5= mysqli_query($conexion, $insertar5);
		  	$men6= mysqli_query($conexion, $insertar6);
		  	 echo $mensaje3;
		  	 
		  	 $mensaje4 = "<script>alert('documento : $numero1 $documento ,celular : $numero2 $celular ,email : $numero3 $email , Datos correctos sin duplicados // su número de registro es $numRegistroUsuario'); window.location='../login/login.php'</script>";
		  	 echo $mensaje4;  
		  	 
         $ultimo1="SELECT * FROM registrousuario ORDER BY numRegistrousuario ASC";
		  	 mysqli_query($conexion, $ultimo1);
        }
  }
 } 
} 







 
