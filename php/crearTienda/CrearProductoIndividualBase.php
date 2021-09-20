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
        $rutn="pro-";
        $numRegistroProductoIndividual=8000000000; 
        $numContrato3=9000000000;
        $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');

        // $usuario= (isset($_POST['usuario3'])    ? $_POST['usuario3']    : '');
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
        $valor= (isset($_POST['Valor'])    ? $_POST['Valor']    : '');

        $contrasena3= (isset($_POST['contrasena3'])    ? $_POST['contrasena3']    : '');
        $confirmarContrasena3= (isset($_POST['confirmarContrasena3'])    ? $_POST['confirmarContrasena3']    : '');

                      
              	
        
        
           $ultimo ="SELECT * FROM registroproductoindividual ORDER BY numRegistroProductoIndividual desc";

           
            $resulta = mysqli_query($conexion,$ultimo);           
            $fila = mysqli_fetch_row($resulta);
            $mostrar=$fila[0];           
            if ($mostrar==""){
            $numRegistroProductoIndividual=8000000000;
          
            }else{
            $numRegistroProductoIndividual=$mostrar+1;            
            $ultimo ="SELECT * FROM registroproductoindividual ORDER BY numRegistroProductoIndividual asc";        
            
            }


            $ultimo ="SELECT * FROM registroproductoindividual ORDER BY numContrato3 desc";

           
            $resulta = mysqli_query($conexion,$ultimo);           
            $fila = mysqli_fetch_row($resulta);
            $mostrar=$fila[4];           
            if ($mostrar==""){
            $numContrato3=9000000000;
          
            }else{
            $numContrato3=$mostrar+1;            
            $ultimo ="SELECT * FROM registroproductoindividual ORDER BY numContrato3 asc";        
            
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
        
       
          $archivo = $_FILES['imagen3']['name'];     
            if (isset($archivo) && $archivo != ""){    
                  $name=$_FILES['imagen3']['name'];
                  $tmp=$_FILES['imagen3']['tmp_name'];
                  $size=$_FILES['imagen3']['size']; 

                      mkdir("../../img/archivos/imagenesRegistroProductoIndividual/".$usuario."/".$numRegistroProductoIndividual,0777,true);       
                       $ruta="../../img/archivos/imagenesRegistroProductoIndividual/".$usuario."/".$numRegistroProductoIndividual."/".$name;
      
              if(!file_exists($ruta)){
                                           
                    move_uploaded_file($tmp ,$ruta);
                      echo "<script>alert('archivo agregado correctamente');</script>"."<script type='text/javascript'>"."window.location='crearTienda.php'"."</script>";
                        $archivo ="";


        $insertar1="INSERT INTO registroproductoindividual(numRegistroProductoIndividual,usuario,tabla,cedula,numContrato3,Producto,valor,seccion,adicional) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$cedula','$numContrato3','$Nproducto','$valor','$seccion3','$adicional3')";

        if (mysqli_query($conexion,$insertar1)) 
          {       
            
          }

           $insertar2="INSERT INTO usuariosclave(numRegistroGlobal,usuario,tabla,contrasena,confirmar1) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$contrasena3','$confirmarContrasena3')";  

          if (mysqli_query($conexion,$insertar2)) 
          {       
            
          }

            $insertar3="INSERT INTO celular(numRegistroGlobal,usuario,tabla,celular) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$celularProductoIndividual')";
         
          if (mysqli_query($conexion,$insertar3)) 
          {       
            
          }

        $insertar4="INSERT INTO email(numRegistroGlobal,usuario,tabla,email) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$emailProductoIndividual')";
         
          if (mysqli_query($conexion,$insertar4)) 
          {       
            
          }

      $insertar5="INSERT INTO direccion(numRegistroGlobal,usuario,tabla,ciudad,barrio,direccion,coordenadas,mostrarubicacion,domicilios) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$ciudad3','$barrio3','$direccion3','$coordenadas3','$compartir3','$domicilios3')";

           if (mysqli_query($conexion,$insertar5)) 
          {       
            
          }

         $insertar6="INSERT INTO descripcion(numRegistroGlobal,usuario,tabla,descripcion) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$descripcion3')";
         
          if (mysqli_query($conexion,$insertar6)) 
          {       
            
          }

        
        $insertar7="INSERT INTO fecha(numRegistroGlobal,usuario,tabla,fechaDeRegistro,hora,fecha) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla',' $fecha1','$hora','$fecha')";
          
           if (mysqli_query($conexion,$insertar7)) 
          {       
            
          }
        
        $insertar8="INSERT INTO insertimglogo(numRegistroGlobal,usuario,tabla,nombrecomercio,name,tmp,size,ruta,creado)VALUES('$numRegistroProductoIndividual','$usuario','$tabla','$nombrepersona','$name','$tmp','$size','$ruta','$fecha1')";
        
           if (mysqli_query($conexion,$insertar8)) 
          {       
            
          }


        $insertar9="INSERT INTO link(numRegistroGlobal,usuario,tabla,link)VALUES('$numRegistroProductoIndividual','$usuario','$tabla','$Nlink')";
        
           if (mysqli_query($conexion,$insertar9)) 
          {       
            
          }


                        }else{          
                        
                         // echo "<script>alert('ya existe el archivo seleccionado intente con otro');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                         //  die;
                          echo "<script>var mensaje;
                          var opcion = confirm('ya existe el archivo seleccionado se borrara el anterior, para poder continuar presione aceptar y vuelva a cargar el archivo si no presione cancelar');

                          if (opcion == true){".unlink($ruta)."alert('se aborrado el archivo');window.history.back(0);". die();"
                           }                            
                          if (opcion == false) {
                            alert('el archivo se conserva');
                        }
                           </script>";         
                                       
                          

                            }
                           
                          }else{


        $insertar1="INSERT INTO registroproductoindividual(numRegistroProductoIndividual,usuario,tabla,cedula,numContrato3,Producto,valor,seccion,adicional) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$cedula','$numContrato3','$Nproducto','$valor','$seccion3','$adicional3')";

        if (mysqli_query($conexion,$insertar1)) 
          {       
            
          }

           $insertar2="INSERT INTO usuariosclave(numRegistroGlobal,usuario,tabla,contrasena,confirmar1) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$contrasena3','$confirmarContrasena3')";  

          if (mysqli_query($conexion,$insertar2)) 
          {       
            
          }

            $insertar3="INSERT INTO celular(numRegistroGlobal,usuario,tabla,celular) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$celularProductoIndividual')";
         
          if (mysqli_query($conexion,$insertar3)) 
          {       
            
          }

        $insertar4="INSERT INTO email(numRegistroGlobal,usuario,tabla,email) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$emailProductoIndividual')";
         
          if (mysqli_query($conexion,$insertar4)) 
          {       
            
          }

      $insertar5="INSERT INTO direccion(numRegistroGlobal,usuario,tabla,ciudad,barrio,direccion,coordenadas,mostrarubicacion,domicilios) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$ciudad3','$barrio3','$direccion3','$coordenadas3','$compartir3','$domicilios3')";

           if (mysqli_query($conexion,$insertar5)) 
          {       
            
          }

         $insertar6="INSERT INTO descripcion(numRegistroGlobal,usuario,tabla,descripcion) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla','$descripcion3')";
         
          if (mysqli_query($conexion,$insertar6)) 
          {       
            
          }

        
        $insertar7="INSERT INTO fecha(numRegistroGlobal,usuario,tabla,fechaDeRegistro,hora,fecha) VALUES ('$numRegistroProductoIndividual','$usuario','$tabla',' $fecha1','$hora','$fecha')";
          
           if (mysqli_query($conexion,$insertar7)) 
          {       
            
          }

              
        $insertar8="INSERT INTO insertimglogo(numRegistroGlobal,usuario,tabla,nombrecomercio,name,tmp,size,ruta,creado)VALUES('$numRegistroProductoIndividual','$usuario','$tabla','$nombrepersona','no disponible','','0','no disponible','$fecha1')";
        
           if (mysqli_query($conexion,$insertar8))  
          {       
            
          }

       
     $insertar9="INSERT INTO link(numRegistroGlobal,usuario,tabla,link)VALUES('$numRegistroProductoIndividual','$usuario','$tabla','$Nlink')";
        
           if (mysqli_query($conexion,$insertar9)) 
          {       
            
          }

                               
                                       
                          
 echo "<script>alert('archivo agregado correctamente');</script>"."<script type='text/javascript'>"."window.location='crearTienda.php'"."</script>";
                        
                          
 }


    


    ?>