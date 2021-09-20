<?php
session_start();
include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 if ($_SESSION['logueado'] == "") {
        echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>"; 
                   }else{
             echo "<h5 class='btn-warning'> esta logueado como: ". $usuario."</h1>";

       date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fecha=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      $fecha1=strftime("%Y-%m-%d");
      $hora=strftime("%H:%M:%S");

       $id=(isset($_GET['id'])    ? $_GET['id']    : '');

      $busqueda = "SELECT * FROM registroempresa WHERE numRegistroEmpresa='$id'";
      $nombre = mysqli_query($conexion,$busqueda);

          while ($row = mysqli_fetch_row($nombre)) {
            $nombreEmpresa=$row[5];
            }



         $numRegistroEmpresa=$id;
				 $identificativo="almProduc-";
				 $numRegistroProducto=8500000000;
				 $tabla="registroEmpresa";
				 $usuario =$_SESSION['logueado'];			   	 
			     $producto= (isset($_POST['producto'])    ? $_POST['producto']    : '');
			     $descripcion= (isset($_POST['descripcion'])    ? $_POST['descripcion']    : '');
			     $embalaje= (isset($_POST['embalaje'])    ? $_POST['embalaje']    : '');
            $cantidad= (isset($_POST['cantidad'])    ? $_POST['cantidad']    : '');
			     $valor= (isset($_POST['valor'])    ? $_POST['valor']    : '');
			     $iva= (isset($_POST['iva'])    ? $_POST['iva']    : '');
			     $tiva= (isset($_POST['tiva'])    ? $_POST['tiva']    : '');
			     $descuento= (isset($_POST['descuento'])    ? $_POST['descuento']    : '');
			     $total= (isset($_POST['total'])    ? $_POST['total']    : '');	        

             //cuentas
                $iva=19;              
                $tiva=$valor*$iva/100+$valor;
                $total=$tiva-$tiva*$descuento/100;

                $ultimo ="SELECT * FROM registroproductos ORDER BY idRegistro desc";
				$resulta = mysqli_query($conexion,$ultimo);
				$fila = mysqli_fetch_row($resulta);
				$mostrar=$fila[0]; 
				$numRegistroProducto=$mostrar+$numRegistroProducto;
			// imagen
			   
			   $archivo = $_FILES['seleccionArchivos']['name'];     	
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['seleccionArchivos']['name'];
                  $tmp=$_FILES['seleccionArchivos']['tmp_name'];
                  $size=$_FILES['seleccionArchivos']['size']; 

                      // mkdir("imagenesProductosEmpresa/".$usuario."/".$numRegistroEmpresa,0777,true);       
                      //  $ruta="imagenesProductosEmpresa/".$usuario."/".$numRegistroEmpresa."/".$name;

                  mkdir("../../img/archivos/imagenesProductosEmpresa/".$usuario."/".$numRegistroEmpresa,0777,true);       
                       $ruta="../../img/archivos/imagenesProductosEmpresa/".$usuario."/".$numRegistroEmpresa."/".$name;
      
              if(!file_exists($ruta)){                                
                    move_uploaded_file($tmp ,$ruta);
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
                        
                         // echo "<script>alert('ya existe el archivo seleccionado intente con otro');</script>"."<script type='text/javascript'>"."window.history.back(0)"."</script>";
                         //  die;
                            }
                          }
                          

				
					             
		     $insertar1="INSERT INTO registroproductos(numRegistroGlobal,numRegistroProducto,usuario,producto,descripcion,embalaje,cantidad,valor,iva,tiva,descuento,total) VALUES ('$numRegistroEmpresa','$numRegistroProducto','$usuario','$producto','$descripcion','$embalaje','$cantidad','$valor','$iva','$tiva','$descuento','$total')";

		     $insertar2="INSERT INTO insertimgproducto(numRegistroGlobal,numRegistroProducto,producto,usuario,tabla,nombrecomercio,name,tmp,size,ruta,creado)VALUES('$numRegistroEmpresa','$numRegistroProducto','$producto','$usuario','$tabla','$nombreEmpresa','$name','$tmp','$size','$ruta','$fecha1')";

		     //////////////////////////////////////////////////////////////////////

         
          if (mysqli_query($conexion,$insertar1)) 
            {       
            
            }  
          if (mysqli_query($conexion,$insertar2)) 
            {       
           
            }
           

           }

			?>
