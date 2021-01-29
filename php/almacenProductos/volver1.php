<?php
include("../conexion/conexion.php"); 
//trae los elementos de modificar.php parte final cambiaria en esta hoja
 

// $aprobar=(isset($_POST['aprobar'])    ? $_POST['aprobar']    : '');
//         if ($aprobar='si') {
//           echo "<script>alert('casilla imagen no activa parta no modificar imagen seleccionela');</script>" . "<script type='text/javascript'>"."window.history.back(0)"."</script>";
          
//  echo "<script type='text/javascript'>alert('correcto numRegistroProducto $aprobar, $id')</script>"; 
//         }else{
         
        
 	
 $id=(isset($_GET['id'])    ? $_GET['id']    : ''); 
 $traeid= (isset($_POST['traeid'])    ? $_POST['traeid']    : '');
  


      
       echo "<script type='text/javascript'>alert('correcto numRegistroProducto  $traeid $id')</script>";


      

	 
// }
         
        
        
            // echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$tienda."'</script>";
            echo "<script type='text/javascript'>window.location='../crearTienda/MostrarTienda.php?id=".$id."'</script>";

                  	 
        
         
			
?>