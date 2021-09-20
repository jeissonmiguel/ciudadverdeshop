<?php


//conexion
      include("../conexion/conexion.php");
      session_start();

      date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("%Y-%m-%d");
      $hora=strftime("%H:%M:%S");


        
        $identificativo="conti-";
        $rutn="rut-";
        $numRegistroTienda=2000000000; 
        $numContrato1=3000000000;
        $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
        // $usuario= (isset($_POST['usuario1'])    ? $_POST['usuario1']    : '');
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

                      
              	
        
        
           $ultimo ="SELECT * FROM registrotienda ORDER BY numRegistroTienda desc";

           
            $resulta = mysqli_query($conexion,$ultimo);           
            $fila = mysqli_fetch_row($resulta);
            $mostrar=$fila[0];           
            if ($mostrar==""){
            $numRegistroTienda=2000000000;
          
            }else{
            $numRegistroTienda=$mostrar+1;            
            $ultimo ="SELECT * FROM registrotienda ORDER BY numRegistroTienda asc";        
            
            }


            $ultimo ="SELECT * FROM registrotienda ORDER BY numContrato1 desc";

           
            $resulta = mysqli_query($conexion,$ultimo);           
            $fila = mysqli_fetch_row($resulta);
            $mostrar=$fila[4];           
            if ($mostrar==""){
            $numContrato1=3000000000;
          
            }else{
            $numContrato1=$mostrar+1;            
            $ultimo ="SELECT * FROM registrotienda ORDER BY numContrato1 asc";        
            
            }


//      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
//             echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
//          - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
//         }
//         else {
//           mkdir('images'."/".$usuario."/".$rut, 0777, true);
//             if (move_uploaded_file($tmp, 'images'."/".$usuario."/".$rut."/".$archivo)) {
//                 chmod('images'."/".$usuario."/".$rut, 0777, true);
//                 echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
               
//             }
//             else {
//                 echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
//             }
//    
        
       
          $archivo = $_FILES['imagen2']['name'];     
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['imagen2']['name'];
                  $tmp=$_FILES['imagen2']['tmp_name'];
                  $size=$_FILES['imagen2']['size']; 

                      mkdir("../../img/archivos/LogoTienda/".$usuario."/".$numRegistroTienda,0777,true);       
                       $ruta="../../img/archivos/LogoTienda/".$usuario."/".$numRegistroTienda."/".$name;
      
              if(!file_exists($ruta)){
                                           
                    move_uploaded_file($tmp ,$ruta);
                      echo "<script>alert('archivo agregado correctamente');</script>"."<script type='text/javascript'>"."window.location='crearTienda.php'"."</script>";
                        $archivo ="";
                        }else{          
                        
                         // echo "<script>alert('ya existe el archivo seleccionado intente con otro');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                         //  die;
                          echo "<script>var mensaje;
                          var opcion = confirm('ya existe el archivo seleccionado se borrara el anterior, para poder continuar presione aceptar y vuelva a cargar el archivo si no presione cancelar');

                          if (opcion == true) {"
                            .unlink($ruta)."
                             alert('se aborrado el archivo');''
                           }                            
                             if (opcion == false) {
                            alert('el archivo se conserva');
                        }
                           </script>";         
                                       
                          

                            }
                          }
                          


                     
        
       

    		$insertar1="INSERT INTO registrotienda(numRegistroTienda,usuario,tabla,rut,numContrato1,nombreTienda,seccion,adicional) VALUES ('$numRegistroTienda','$usuario','$tabla','$rut','$numContrato1','$nombreTienda','$seccion1','$adicional1')";

        $insertar2="INSERT INTO usuariosclave(numRegistroGlobal,usuario,tabla,contrasena,confirmar1) VALUES ('$numRegistroTienda','$usuario','$tabla','$contrasena1','$confirmarContrasena1')";  


        $insertar3="INSERT INTO celular(numRegistroGlobal,usuario,tabla,celular) VALUES ('$numRegistroTienda','$usuario','$tabla','$celularTienda')";


        $insertar4="INSERT INTO email(numRegistroGlobal,usuario,tabla,email) VALUES ('$numRegistroTienda','$usuario','$tabla','$emailTienda')";


      $insertar5="INSERT INTO direccion(numRegistroGlobal,usuario,tabla,ciudad,barrio,direccion,coordenadas,mostrarubicacion,domicilios) VALUES ('$numRegistroTienda','$usuario','$tabla','$ciudad1','$barrio1','$direccion1','$coordenadas1','$compartir1','$domicilios1')";


         $insertar6="INSERT INTO descripcion(numRegistroGlobal,usuario,tabla,descripcion) VALUES ('$numRegistroTienda','$usuario','$tabla','$descripcion1')";


        
        $insertar7="INSERT INTO fecha(numRegistroGlobal,usuario,tabla,fechaDeRegistro,hora,fecha) VALUES ('$numRegistroTienda','$usuario','$tabla',' $fecha1','$hora','$fecha')";

        
        $insertar8="INSERT INTO insertimglogo(numRegistroGlobal,usuario,tabla,nombrecomercio,name,tmp,size,ruta,creado)VALUES('$numRegistroTienda','$usuario','$tabla','$nombreTienda','$name','$tmp','$size','$ruta','$fecha1')";

        // $insertar9="INSERT INTO paginaweb(numRegistroGlobal,usuario,tabla,paginaweb) VALUES ('$numRegistroTienda','$usuario','$tabla','$paginawebEmpresa')";

        $insertar10="INSERT INTO redsocial(numRegistroGlobal,usuario,tabla,redsocial) VALUES ('$numRegistroTienda','$usuario','$tabla','$redsocial1')";



 

 
    		
          $mensaje1 = "<script>alert('documento : no existe en la base de datos puede continuar');window.history.back(0)'</script>";
            // $Errord = "Error: " . $insert1 . "<br>" . mysqli_error($conexion)."<script>alert('datos errados : revise sus campos');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";

          $Errord = "Error: " . $insertar1 . "<br>" . mysqli_error($conexion)."</script>";

          if (mysqli_query($conexion,$insertar1)) 
          {       
            echo $mensaje1;
            // echo "<script type='text/javascript'>window.location='crearTienda.php'</script>"; 
            
          }
          else
          { 
            echo $Errord;
            // echo "<script type='text/javascript'>alert('documento : no existe en la base de datos puede continuar');.window.history.back(0)"."</script>"; 
              
           }



             if (mysqli_query($conexion,$insertar2)) 
            {       
              echo $mensaje1; 
             // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
            }
            else
            { 
              echo $Errord; 
                
             }

            if (mysqli_query($conexion,$insertar3)) 
          {       
            echo $mensaje1; 
           // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
          }
          else
          { 
            echo $Errord; 
              
           }

            if (mysqli_query($conexion,$insertar4)) 
          {       
            echo $mensaje1; 
           // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
          }
          else
          { 
            echo $Errord; 
              
           }

               if (mysqli_query($conexion,$insertar5)) 
            {       
              echo $mensaje1; 
             // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
            }
            else
            { 
              echo $Errord; 
                

             }
  

               if (mysqli_query($conexion,$insertar6)) 
            {       
              echo $mensaje1; 
             // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
            }
            else
            { 
              echo $Errord; 
                
             }


        if (mysqli_query($conexion,$insertar7)) 
          {       
            echo $mensaje1; 
           // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
          }
          else
          { 
            echo $Errord;
              
           }

        if (mysqli_query($conexion,$insertar8)) 
          {       
            echo $mensaje1; 
           // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
          }
          else
          { 
            echo $Errord;

              
           }


            if (mysqli_query($conexion,$insertar10)) 
          {       
            echo $mensaje1; 
           // echo "<script type='text/javascript'>"."window.history.back(0)"."</script>";
          }
          else
          { 
            echo $Errord;

              
           }




     


    ?>
