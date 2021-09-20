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
 $numRegistroGlobal= (isset($_POST['tienda'])    ? $_POST['tienda']    : '');
 $producto= (isset($_POST['producto'])    ? $_POST['producto']    : '');
 $descripcion= (isset($_POST['descripcion'])    ? $_POST['descripcion']    : '');
 $embalaje= (isset($_POST['embalaje'])    ? $_POST['embalaje']    : '');
 $cantidad = (isset($_POST['cantidad'])    ? $_POST['cantidad']    : '');
 $valor= (isset($_POST['valor'])    ? $_POST['valor']    : '');
 $iva= (isset($_POST['iva'])    ? $_POST['iva']    : '');
 $tiva= (isset($_POST['tiva'])    ? $_POST['tiva']    : '');
 $descuento= (isset($_POST['descuento'])    ? $_POST['descuento']    : '');
 $total= (isset($_POST['total'])    ? $_POST['total']    : '');	


  $archivo = $_FILES['seleccionArchivos']['name'];      
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['seleccionArchivos']['name'];
                  $tmp=$_FILES['seleccionArchivos']['tmp_name'];
                  $size=$_FILES['seleccionArchivos']['size']; 

                      mkdir("imagenesProductosTienda/".$usuario."/".$numRegistroGlobal,0777,true);       
                       $ruta="imagenesProductosTienda/".$usuario."/".$numRegistroGlobal."/".$name;
      
              if(!file_exists($ruta)){                                
                    move_uploaded_file($tmp ,$ruta);


          $modificar2="UPDATE insertimgproducto SET producto='$producto',name='$name',tmp='$tmp',size='$size',ruta='$ruta', creado='$fecha1' WHERE numRegistroProducto=$id";  
                     if (mysqli_query($conexion,$modificar2)) 
                { 
                  // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$tienda."'</script>";
                  echo "<script type='text/javascript'>window.location='modificarpro.php?id=".$id."'</script>";

                           
                } 

                      echo "<script>alert('archivo agregado correctamente');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                        $archivo ="";
                        }else{ 

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
                                              
                         // echo "<script>alert('ya existe el archivo seleccionado se borrara el anterior para poder continuar');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                         
                            }
                          }


 


       $modificar1="UPDATE registroproductos SET producto='$producto',descripcion='$descripcion',embalaje='$embalaje',cantidad='$cantidad',valor='$valor', iva='$iva',tiva='$tiva',descuento='$descuento',total='$total' WHERE numRegistroProducto=$id"; 
         
        
         if (mysqli_query($conexion,$modificar1)) 
          { 
            // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$tienda."'</script>";
            echo "<script type='text/javascript'>window.location='modificarpro.php?id=".$id."'</script>";

                  	 
          }


          
        
			 echo "<script type='text/javascript'>alert('correcto numRegistroProducto  $id , $producto ,$descripcion , $embalaje , $cantidad  , $valor , $iva , $tiva  $descuento , $total ,$name ,$tmp, $size,$ruta,$fecha1')</script>";
      
?>