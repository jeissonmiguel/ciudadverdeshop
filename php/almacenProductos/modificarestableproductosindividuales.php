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
        $rutn="pro-";
        $numRegistroProductoIndividual=8000000000; 
        $numContrato3=9000000000;

       $usuario= (isset($_POST['usuario3'])    ? $_POST['usuario3']    : '');
        $tabla ="registroProductoIndividual";        
        $nombrepersona= (isset($_POST['nombrepersona'])    ? $_POST['nombrepersona']    : '');
        $Nproducto= (isset($_POST['Nproducto'])    ? $_POST['Nproducto']    : '');
        $Nlink= (isset($_POST['Nlink'])    ? $_POST['Nlink']    : '');
        
        $cedula= (isset($_POST['Cedula'])    ? $_POST['Cedula']    : '');
        
        $ciudad3= (isset($_POST['ciudad3'])    ? $_POST['ciudad3']    : '');
        $barrio3= (isset($_POST['barrio3'])    ? $_POST['barrio3']    : '');
        $direccion3= (isset($_POST['direccion3'])    ? $_POST['direccion3']    : '');
        $coordenadas3= (isset($_POST['coordenadas3'])    ? $_POST['coordenadas3']    : ''); 
        $compartir3= (isset($_POST['compartir3'])    ? $_POST['compartir3']    : '');
        $domicilios3= (isset($_POST['domicilios3'])    ? $_POST['domicilios3']    : '');       
        $descripcion3= (isset($_POST['descripcion3'])    ? $_POST['descripcion3']    : '');
        
        $celularProductoIndividual= (isset($_POST['celularProductoIndividual'])    ? $_POST['celularProductoIndividual']    : '');
        $emailProductoIndividual= (isset($_POST['emailProductoIndividual'])    ? $_POST['emailProductoIndividual']    : '');
        $seccion3= (isset($_POST['seccion3'])    ? $_POST['seccion3']    : '');
        $adicional3= (isset($_POST['adicional3'])    ? $_POST['adicional3']    : '');
        $valor3= (isset($_POST['valor3'])    ? $_POST['valor3']    : '');

        $contrasena3= (isset($_POST['contrasena3'])    ? $_POST['contrasena3']    : '');
        $confirmarContrasena3= (isset($_POST['confirmarContrasena3'])    ? $_POST['confirmarContrasena3']    : '');


                    
         $archivo = $_FILES['imagen3']['name'];     
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['imagen3']['name'];
                  $tmp=$_FILES['imagen3']['tmp_name'];
                  $size=$_FILES['imagen3']['size']; 

                      mkdir("../../img/archivos/imagenesRegistroProductoIndividual/".$usuario."/".$numRegistroProductoIndividual,0777,true);       
                       $ruta="../../img/archivos/imagenesRegistroProductoIndividual/".$usuario."/".$numRegistroProductoIndividual."/".$name;
      
      
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



 
       $modificar1="UPDATE registroproductoindividual SET adicional='$adicional3',seccion='$seccion3',producto='$Nproducto',valor='$valor3' WHERE numRegistroProductoIndividual=$id";

       $modificar2="UPDATE descripcion SET descripcion='$descripcion3' WHERE numRegistroGlobal=$id";

       $modificar3="UPDATE direccion SET mostrarubicacion='$compartir3',domicilios='$domicilios3',coordenadas='$coordenadas3' WHERE numRegistroGlobal=$id";

       $modificar4="UPDATE celular SET celular='$celularProductoIndividual' WHERE numRegistroGlobal=$id";

       $modificar5="UPDATE email SET email='$emailProductoIndividual' WHERE numRegistroGlobal=$id";

       $modificar6="UPDATE usuariosclave SET contrasena='$contrasena3',confirmar1='$confirmarContrasena3' WHERE numRegistroGlobal=$id";

       $modificar7="UPDATE link SET link='$Nlink' WHERE numRegistroGlobal=$id";

       

       
       
       
              
        
         

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
               echo "<script type='text/javascript'>window.location='../crearTienda/MostrarProducto.php?id=".$id."'</script>";
            
  echo "<script type='text/javascript'>alert('correcto numRegistroEmpresa  $id modificado ok')</script>";


          
        
			
      
?>