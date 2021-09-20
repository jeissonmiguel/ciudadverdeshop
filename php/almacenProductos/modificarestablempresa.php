<?php
include("../conexion/conexion.php"); 
//trae los elementos de modificar.php parte final cambiaria en esta hoja
 

// $aprobar=(isset($_POST['aprobar'])    ? $_POST['aprobar']    : '');
//         if ($aprobar='si') {
//           echo "<script>alert('casilla imagen no activa parta no modificar imagen seleccionela');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";
          
//  echo "<script type='text/javascript'>alert('correcto numRegistroProducto $aprobar, $id')</script>"; 
//         }else{
   date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("%Y-%m-%d");
      $hora=strftime("%H:%M:%S"); 

       session_start();
       $usuario =$_SESSION['logueado'];       
        
 	
        $identificativo="conti-";
        $rutn="rut-";
        $numRegistroEmpresa=4000000000; 
        $numContrato2=5000000000;

        $id=(isset($_GET['id'])    ? $_GET['id']    : ''); 
          $traeid= (isset($_POST['traeid'])    ? $_POST['traeid']    : ''); 
            echo "<script type='text/javascript'>alert('correcto numRegistroProducto $id')</script>";

        $usuario= (isset($_POST['usuario2'])    ? $_POST['usuario2']    : '');
        $tabla ="registroEmpresa";        
        $nombreEmpresa= (isset($_POST['nombreEmpresa'])    ? $_POST['nombreEmpresa']    : '');
        
        $nit= (isset($_POST['nit'])    ? $_POST['nit']    : '');
        
        $ciudad2= (isset($_POST['ciudad2'])    ? $_POST['ciudad2']    : '');
        $barrio2= (isset($_POST['barrio2'])    ? $_POST['barrio2']    : '');
        $direccion2= (isset($_POST['direccion2'])    ? $_POST['direccion2']    : '');
        $coordenadas2= (isset($_POST['coordenadas2'])    ? $_POST['coordenadas2']    : '');
        $compartir2= (isset($_POST['compartir2'])    ? $_POST['compartir2']    : '');
        $domicilios2= (isset($_POST['domicilios2'])    ? $_POST['domicilios2']    : '');
        $descripcion2= (isset($_POST['descripcion2'])    ? $_POST['descripcion2']    : '');
        
        $celularEmpresa= (isset($_POST['celularEmpresa'])    ? $_POST['celularEmpresa']    : '');
        $telefonoEmpresa= (isset($_POST['telefonoEmpresa'])    ? $_POST['telefonoEmpresa']    : '');
        $emailEmpresa= (isset($_POST['emailEmpresa'])    ? $_POST['emailEmpresa']    : '');
        $redsocial2= (isset($_POST['redsocial2'])    ? $_POST['redsocial2']    : ''); 
        $paginawebEmpresa= (isset($_POST['paginawebEmpresa'])    ? $_POST['paginawebEmpresa']    : '');
        $seccion2= (isset($_POST['seccion2'])    ? $_POST['seccion2']    : '');
        $adicional2= (isset($_POST['adicional2'])    ? $_POST['adicional2']    : '');

        $contrasena2= (isset($_POST['contrasena2'])    ? $_POST['contrasena2']    : '');
        $confirmarContrasena2= (isset($_POST['confirmarContrasena2'])    ? $_POST['confirmarContrasena2']    : '');
               

                    
        $archivo = $_FILES['imagen1']['name'];     
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['imagen1']['name'];
                  $tmp=$_FILES['imagen1']['tmp_name'];
                  $size=$_FILES['imagen1']['size'];
             

                      mkdir("../../img/archivos/LogoEmpresa/".$usuario."/".$numRegistroEmpresa,0777,true);       
                       $ruta="../../img/archivos/LogoEmpresa/".$usuario."/".$numRegistroEmpresa."/".$name;
      
              if(!file_exists($ruta)){                                                 
                    move_uploaded_file($tmp ,$ruta);

                     $modificarimagen="UPDATE insertimglogo SET name='$name',tmp='$tmp',size='$size',ruta='$ruta', creado='$fecha1' WHERE numRegistroGlobal=$id";

                     if (mysqli_query($conexion,$modificarimagen))
                     { 
                  // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$tienda."'</script>";
                  echo "<script type='text/javascript'>window.location='modificarestabl.php?id=".$id."'</script>";

                           
                } 

                      echo "<script>alert('archivo agregado correctamente');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                        $archivo ="";
                        }else{ 

                        echo "<script>var mensaje;
                        var opcion = confirm('ya existe el archivo seleccionado se borrara el anterior, para poder continuar presione aceptar y vuelva a cargar el archivo si no presione cancelar');

                          if (opcion == true) {"
                            .unlink($ruta)."
                             alert('se aborrado el archivo anterior vuelva a ingresar para adicionar el nuevo');''
                           }                            
                             if (opcion == false) {
                            alert('el archivo se conserva');
                        }
                           </script>";         
                                              
                         // echo "<script>alert('ya existe el archivo seleccionado se borrara el anterior para poder continuar');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                         
                            }
                          }



 
       $modificar1="UPDATE registroempresa SET adicional='$adicional2',seccion='$seccion2' WHERE numRegistroEmpresa=$id";

       $modificar2="UPDATE descripcion SET descripcion='$descripcion2' WHERE numRegistroGlobal=$id";

       $modificar3="UPDATE direccion SET mostrarubicacion='$compartir2',domicilios='$domicilios2',coordenadas='$coordenadas2' WHERE numRegistroGlobal=$id";

       $modificar4="UPDATE celular SET celular='$celularEmpresa',telefono='$telefonoEmpresa' WHERE numRegistroGlobal=$id";

       $modificar5="UPDATE email SET email='$emailEmpresa' WHERE numRegistroGlobal=$id";

       $modificar6="UPDATE redsocial SET redsocial='$redsocial2' WHERE numRegistroGlobal=$id";

       $modificar7="UPDATE paginaweb SET paginaweb='$paginawebEmpresa' WHERE numRegistroGlobal=$id";

       $modificar8="UPDATE usuariosclave SET contrasena='$contrasena2',confirmar1='$confirmarContrasena2' WHERE numRegistroGlobal=$id";

       $modificar9="UPDATE paginaweb SET paginaweb='$paginawebEmpresa' WHERE numRegistroGlobal=$id";


       
       
              
        
         

           if (mysqli_query($conexion,$modificar2)){  }
           if (mysqli_query($conexion,$modificar3)){  }
           if (mysqli_query($conexion,$modificar4)){  }
           if (mysqli_query($conexion,$modificar5)){  }
           if (mysqli_query($conexion,$modificar6)){  }
           if (mysqli_query($conexion,$modificar7)){  }
           if (mysqli_query($conexion,$modificar8)){  }
           if (mysqli_query($conexion,$modificar9)){  }
           if (mysqli_query($conexion,$modificar1)) 
              { 
            // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$tienda."'</script>";
           
              } 

               //echo "<script type='text/javascript'>window.location='modificarestabl.php?id=".$id."'</script>";
               echo "<script type='text/javascript'>window.location='../crearTienda/MostrarEmpresa.php?id=".$id."'</script>";
            
  echo "<script type='text/javascript'>alert('correcto numRegistroEmpresa  $id modificado ok')</script>";


          
        
			
      
?>