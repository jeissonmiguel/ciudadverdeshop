<?php
 include("../conexion/conexion.php");


       date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("%Y-%m-%d");
      $hora=strftime("%H:%M:%S");

    session_start();
    
      $id=(isset($_GET['id'])    ? $_GET['id']    : '');
      $traeid=$id;
      
      
      // echo $contenido;

      // $hoy = getdate();// print_r($hoy);
      
//tabla registro
      


$tabla ="registrousuario";
$numRegistroUsuario=(isset($_POST['idr'])    ? $_POST['idr']    : '');
$tipo= (isset($_POST['tipo'])    ? $_POST['tipo']    : '');
$documento= (isset($_POST['documento'])    ? $_POST['documento']    : '');
$nombre1= (isset($_POST['nombre1'])    ? $_POST['nombre1']    : '');
$nombre2= (isset($_POST['nombre2'])    ? $_POST['nombre2']    : '');
$apellido1= (isset($_POST['apellido1'])    ? $_POST['apellido1']    : '');
$apellido2= (isset($_POST['apellido2'])    ? $_POST['apellido2']    : '');
$genero= (isset($_POST['genero'])    ? $_POST['genero']    : '');
// $cargo= (isset($_POST['cargo'])    ? $_POST['cargo']    : '');
$celular= (isset($_POST['celular'])    ? $_POST['celular']    : '');
$email= (isset($_POST['email'])    ? $_POST['email']    : '');




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
$Vehiculos= (isset($_POST['Vehiculos'])    ? $_POST['Vehiculos']    : '');
$Vivienda= (isset($_POST['Vivienda'])    ? $_POST['Vivienda']    : '');
$Trueque= (isset($_POST['Trueque'])    ? $_POST['Trueque']    : '');


//tabla usuario
$usuario= (isset($_POST['usuario'])    ? $_POST['usuario']    : '');
$contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');
$confirmar1= (isset($_POST['confirmar1'])    ? $_POST['confirmar1']    : '');


// $ultimo ="SELECT * FROM registrousuario ORDER BY idRegistro desc";



       
       $modificar1="UPDATE registrousuario SET numRegistroUsuario='$id' , tabla='$tabla', tipo='$tipo', documento='$documento', nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1',apellido2='$apellido2', genero='$genero' WHERE numRegistroUsuario='$id'";
      

       $modificar2="UPDATE usuariosclave SET numRegistroGlobal='$numRegistroUsuario' , usuario='$documento', tabla='$tabla', contrasena='$contrasena', confirmar1='$confirmar1' WHERE numRegistroGlobal='$id'";

       $modificar3="UPDATE intereses SET usuario='$documento', interes1='$Licores', interes2='$Panaderia', interes3='$Comidasr', interes4='$Restaurante', interes5='$Asaderos',interes6='$Tecnologia', interes7='$Supermercados', interes8='$Droguerias', interes9='$Mascotas', interes10='$Miscelaneas', interes11='$Profesiones' ,interes12='$Otros', interes13='$Gimnasio', interes14='$Guarderia', interes15='$Belleza', interes16='$Vehiculos', interes17='$Vivienda', interes18='$Trueque'  WHERE usuario='$usuario'";

       $modificar4="UPDATE celular SET numRegistroGlobal='$numRegistroUsuario', usuario='$documento', tabla='$tabla', celular='$celular' ,telefono='0000000000' WHERE numRegistroGlobal='$id'";

       $modificar5="UPDATE email SET numRegistroGlobal='$numRegistroUsuario' , usuario='$documento', tabla='$tabla', email='$email' WHERE numRegistroGlobal='$id'";

              

           if (mysqli_query($conexion,$modificar2)){  }
           if (mysqli_query($conexion,$modificar3)){  } 
           if (mysqli_query($conexion,$modificar4)){  } 
           if (mysqli_query($conexion,$modificar5)){  }                    
           if (mysqli_query($conexion,$modificar1)) 
              { 
            // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$tienda."'</script>";
                // echo "<script type='text/javascript'>window.location='../Administrador/busquedausuario.php?id=".$id."'</script>";
                echo "<script type='text/javascript'>window.close();</script>";
           
              } 
         
               //echo "<script type='text/javascript'>window.location='modificarestabl.php?id=".$id."'</script>";
              
            
  echo "<script type='text/javascript'>alert('correcto registrate $id modificado ok')</script>";








