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
        	
      
        $id=(isset($_GET['id'])    ? $_GET['id']    : ''); 
          $traeid= (isset($_POST['traeid'])    ? $_POST['traeid']    : ''); 
            echo "<script type='text/javascript'>alert('correcto numRegistroProducto $id')</script>";

        $identificativo="conti-";
        $rutn="rut-";
        $numRegistroTienda=2000000000; 
        $numContrato1=3000000000;

        $usuario= (isset($_POST['usuario1'])    ? $_POST['usuario1']    : '');
        $tabla ="registroTienda";        
        $nombreTienda= (isset($_POST['nombreTienda'])    ? $_POST['nombreTienda']    : '');
        
        $rut= (isset($_POST['rut'])    ? $_POST['rut']    : '');
        
        $ciudad1= (isset($_POST['ciudad1'])    ? $_POST['ciudad1']    : '');
        $barrio1= (isset($_POST['barrio1'])    ? $_POST['barrio1']    : '');
        $direccion1= (isset($_POST['direccion1'])    ? $_POST['direccion1']    : '');
        $coordenadas1= (isset($_POST['coordenadas1'])    ? $_POST['coordenadas1']    : ''); 
        $compartir1= (isset($_POST['compartir1'])    ? $_POST['compartir1']    : '');
        $domicilios1= (isset($_POST['domicilios1'])    ? $_POST['domicilios1']    : '');       
        $descripcion1= (isset($_POST['descripcion1'])    ? $_POST['descripcion1']    : '');
        
        $celularTienda= (isset($_POST['celularTienda'])    ? $_POST['celularTienda']    : '');
        $emailTienda= (isset($_POST['emailTienda'])    ? $_POST['emailTienda']    : '');
        $redsocial1= (isset($_POST['redsocial1'])    ? $_POST['redsocial1']    : '');
        // $paginawebEmpresa= (isset($_POST['paginawebEmpresa'])    ? $_POST['paginawebEmpresa']    : '');
        $seccion1= (isset($_POST['seccion1'])    ? $_POST['seccion1']    : '');
        $adicional1= (isset($_POST['adicional1'])    ? $_POST['adicional1']    : '');

        $contrasena1= (isset($_POST['contrasena1'])    ? $_POST['contrasena1']    : '');
        $confirmarContrasena1= (isset($_POST['confirmarContrasena1'])    ? $_POST['confirmarContrasena1']    : '');
               

                    
        $archivo = $_FILES['imagen2']['name'];     
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['imagen2']['name'];
                  $tmp=$_FILES['imagen2']['tmp_name'];
                  $size=$_FILES['imagen2']['size']; 

                      mkdir("../../img/archivos/LogoTienda/".$usuario."/".$numRegistroTienda,0777,true);       
                       $ruta="../../img/archivos/LogoTienda/".$usuario."/".$numRegistroTienda."/".$name;
      
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



       
       $modificar1="UPDATE registrotienda SET adicional='$adicional1',seccion='$seccion1'WHERE numRegistroTienda=$id";

       $modificar2="UPDATE descripcion SET descripcion='$descripcion1' WHERE numRegistroGlobal=$id";

       $modificar3="UPDATE direccion SET mostrarubicacion='$compartir1',domicilios='$domicilios1',coordenadas='$coordenadas1' WHERE numRegistroGlobal=$id";

       $modificar4="UPDATE celular SET celular='$celularTienda' WHERE numRegistroGlobal=$id";

       $modificar5="UPDATE email SET email='$emailTienda' WHERE numRegistroGlobal=$id";

       $modificar6="UPDATE redsocial SET redsocial='$redsocial1' WHERE numRegistroGlobal=$id";

       $modificar7="UPDATE usuariosclave SET contrasena='$contrasena1',confirmar1='$confirmarContrasena1' WHERE numRegistroGlobal=$id";

       
       
       
              
        
         

           if (mysqli_query($conexion,$modificar2)){  }
           if (mysqli_query($conexion,$modificar3)){  }
           if (mysqli_query($conexion,$modificar4)){  }
           if (mysqli_query($conexion,$modificar5)){  }
           if (mysqli_query($conexion,$modificar6)){  }
           if (mysqli_query($conexion,$modificar7)){  }          
           if (mysqli_query($conexion,$modificar1)) 
              { 
            // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$tienda."'</script>";
           
              } 

               //echo "<script type='text/javascript'>window.location='modificarestabl.php?id=".$id."'</script>";
              echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$id."'</script>";
            
  echo "<script type='text/javascript'>alert('correcto numRegistroEmpresa  $id modificado ok')</script>";


          
        
			
      
?>