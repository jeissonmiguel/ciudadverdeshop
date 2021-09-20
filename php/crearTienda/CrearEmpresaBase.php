<?php

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
        $numRegistroEmpresa=4000000000; 
        $numContrato2=5000000000;
        $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
        // $usuario= (isset($_POST['usuario2'])    ? $_POST['usuario2']    : '');
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
               
              	
        
        
           $ultimo ="SELECT * FROM registroempresa ORDER BY numRegistroEmpresa desc";

           
     
            $resulta = mysqli_query($conexion,$ultimo);           
            $fila = mysqli_fetch_row($resulta);
            $mostrar=$fila[0];           
            if ($mostrar==""){
            $numRegistroEmpresa=4000000000;
          
            }else{
            $numRegistroEmpresa=$mostrar+1;            
            $ultimo ="SELECT * FROM registroempresa ORDER BY numRegistroEmpresa asc";        
            
            }


            $ultimo ="SELECT * FROM registroempresa ORDER BY numContrato2 desc";

           
            $resulta = mysqli_query($conexion,$ultimo);           
            $fila = mysqli_fetch_row($resulta);
            $mostrar=$fila[4];           
            if ($mostrar==""){
            $numContrato2=5000000000;
          
            }else{
            $numContrato2=$mostrar+1;            
            $ultimo ="SELECT * FROM registroempresa ORDER BY numContrato2 asc";        
            
            }

        //      //quitar para pruebas
        // error_reporting(0); 
       
        //   $archivo = $_FILES['imagen2']['name'];     
        //     if (isset($archivo) && $archivo != "") {    
        //           $name=$_FILES['imagen2']['name'];
        //           $tmp=$_FILES['imagen2']['tmp_name'];
        //           $size=$_FILES['imagen2']['size'];
        //      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000000))) {
        //          echo "<script>alert('Error. La extensión o el tamaño de los archivos no es correcta.Se permiten archivos .gif, .jpg, .png. y de 2000 kb como máximo.');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
        //           die;
        //             } else{

        //               mkdir("imagenesEmpresa/".$usuario."/".$numRegistroEmpresa,0777,true);       
        //                $ruta="imagenesEmpresa/".$usuario."/".$numRegistroEmpresa."/".$name;
      
        //       if(!file_exists($ruta)){                                
        //             move_uploaded_file($tmp ,$ruta);
        //               echo "<script>alert('archivo agregado correctamente');</script>"."<script type='text/javascript'>"."window.location='crearTienda.php'"."</script>";
        //                 $archivo ="";
        //                 }else{          
                        
        //                  echo "<script>alert('ya existe el archivo seleccionado intente con otro');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
        //                   die;
        //                     }
        //                   }
        //                 }  

      
       
          $archivo = $_FILES['imagen1']['name'];     
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['imagen1']['name'];
                  $tmp=$_FILES['imagen1']['tmp_name'];
                  $size=$_FILES['imagen1']['size'];
             

                      mkdir("../../img/archivos/LogoEmpresa/".$usuario."/".$numRegistroEmpresa,0777,true);       
                       $ruta="../../img/archivos/LogoEmpresa/".$usuario."/".$numRegistroEmpresa."/".$name;
      
              if(!file_exists($ruta)){ 
                                                
                    move_uploaded_file($tmp ,$ruta);
                      echo "<script>alert('archivo agregado correctamente');</script>"."<script type='text/javascript'>"."window.location='crearTienda.php'"."</script>";
                        $archivo ="";
                        }else{          
                        
                         echo "<script>alert('ya existe el archivo seleccionado intente con otro');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                          die;
                            }
                          }
                          
                     
        
 

    	$insertar1="INSERT INTO registroempresa(numRegistroEmpresa,usuario,tabla,nit,numContrato2,nombreEmpresa,seccion,adicional) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$nit','$numContrato2','$nombreEmpresa','$seccion2','$adicional2')";

      $insertar2="INSERT INTO usuariosclave(numRegistroGlobal,usuario,tabla,contrasena,confirmar1) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$contrasena2','$confirmarContrasena2')";  


        $insertar3="INSERT INTO celular(numRegistroGlobal,usuario,tabla,celular,telefono) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$celularEmpresa','$telefonoEmpresa')";


        $insertar4="INSERT INTO email(numRegistroGlobal,usuario,tabla,email) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$emailEmpresa')";
       

       $insertar5="INSERT INTO direccion(numRegistroGlobal,usuario,tabla,ciudad,barrio,direccion,coordenadas,mostrarubicacion,domicilios) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$ciudad2','$barrio2','$direccion2','$coordenadas2','$compartir2','$domicilios2')";



        $insertar6="INSERT INTO descripcion(numRegistroGlobal,usuario,tabla,descripcion) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$descripcion2')";


        $insertar7="INSERT INTO fecha(numRegistroGlobal,usuario,tabla,fechaDeRegistro,hora,fecha) VALUES ('$numRegistroEmpresa','$usuario','$tabla',' $fecha1','$hora','$fecha')";

        $insertar8="INSERT INTO insertimglogo(numRegistroGlobal,usuario,tabla,nombrecomercio,name,tmp,size,ruta,creado)VALUES('$numRegistroEmpresa','$usuario','$tabla','$nombreEmpresa','$name','$tmp','$size','$ruta','$fecha1')";

        $insertar9="INSERT INTO paginaweb(numRegistroGlobal,usuario,tabla,paginaweb) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$paginawebEmpresa')";

        $insertar10="INSERT INTO redsocial(numRegistroGlobal,usuario,tabla,redsocial) VALUES ('$numRegistroEmpresa','$usuario','$tabla','$redsocial2')";



   		

          $mensaje1 = "<script>alert('documento : no existe en la base de datos puede continuar');'</script>";
            // $Errord = "Error: " . $insert1 . "<br>" . mysqli_error($conexion)."<script>alert('datos errados : revise sus campos');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";

          $Errord = "Error: " . $insertar1 . "<br>" . mysqli_error($conexion)."</script>";

          if (mysqli_query($conexion,$insertar1)) 
          {       
            echo $mensaje1;
            echo "<script type='text/javascript'>window.location='crearTienda.php'</script>"; 
            
          }
          else
          { 
            echo $Errord;
            echo "<script type='text/javascript'>alert('documento : no existe en la base de datos puede continuar');.window.history.back(0)"."</script>"; 
              
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


            if (mysqli_query($conexion,$insertar9)) 
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
