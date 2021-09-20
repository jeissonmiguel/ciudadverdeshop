<?php
session_start();
include("../conexion/conexion.php");
 $usuario=(isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 $numRegistroGlobal=(isset($_SESSION['id3'])    ? $_SESSION['id3']    : '');
  $comentario=(isset($_POST['comentario'])    ? $_POST['comentario']    : '');
 // $numRegistroGlobal1=(isset($_SESSION['id2'])     ? $_SESSION['id2']    : '');

$selected=0;
$selected1=0;
$selected2=0;
$selected3=0;




 // echo $numRegistroGlobal;
 // echo "</br>";
 // echo $usuario;
 // echo "</br>";

        if(isset($_POST['submit'])){
          if(!empty($_POST['check_list'])){
// Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
            foreach($_POST['check_list'] as $selected){
            // echo $selected."</br>";

            }
          }
            if(!empty($_POST['check_list1'])){
// Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
            foreach($_POST['check_list1'] as $selected1){
            // echo $selected1."</br>";
            }
          }

          if(!empty($_POST['check_list2'])){
// Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
            foreach($_POST['check_list2'] as $selected2){
            // echo $selected2."</br>";
            }
          }

          if(!empty($_POST['check_list3'])){
// Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
            foreach($_POST['check_list3'] as $selected3){
            // echo $selected3."</br>";
            }
          }
        
   $porcentaje=($selected+$selected1+$selected2+$selected3)/"4";


      $numRegistroCalificacion=6000000000;
        $ultimo ="SELECT * FROM calificacion ORDER BY numRegistroCalificacion desc";

           
     
            $resulta = mysqli_query($conexion,$ultimo);           
            $fila = mysqli_fetch_row($resulta);
            $mostrar=$fila[0];           
            if ($mostrar==""){
            $numRegistroCalificacion=6000000000;
          
            }else{
            $numRegistroCalificacion=$mostrar+1;            
            $ultimo ="SELECT * FROM calificacion ORDER BY numRegistroCalificacion  asc";        
            
            }

            $usuarioRepetido ="SELECT * FROM calificacion where usuario ='$usuario' and numRegistroGlobal ='$numRegistroGlobal'";
            $result = mysqli_query($conexion,$usuarioRepetido);
            $numero = mysqli_num_rows($result);



if ($usuario!="") { 
  // echo $numRegistroCalificacion ;
if ($numero<2){  
  if(!empty($selected)){
    if(!empty($selected1)){
      if(!empty($selected2)){
        if(!empty($selected3)){
    $selecionar="SELECT * FROM calificacion";
$ingresar="INSERT INTO calificacion(numRegistroCalificacion,numRegistroGlobal,usuario,pregunta1,pregunta2,pregunta3,pregunta4,porcentaje,comentario) VALUES ('$numRegistroCalificacion','$numRegistroGlobal','$usuario','$selected','$selected1','$selected2','$selected3','$porcentaje','$comentario')"; 


if (mysqli_query($conexion,$ingresar)) 
          {     
          echo "<script>alert('comenatrio agregado correctamente');</script>"."<script type='text/javascript'>"."window.location='../crearTienda/muestraComercioTienda.php?id=$numRegistroGlobal'"."</script>"; 

            
            
          }

             
           }

           else{
            echo '<script type="text/javascript">alert("te falta por seleccionar una o mas casillas");window.history.back(0)</script>';
            
          }
         }
           else{
            echo '<script type="text/javascript">alert("te falta por seleccionar una o mas casillas");window.history.back(0)</script>';
            
          }
          }
           else{
            echo '<script type="text/javascript">alert("te falta por seleccionar una o mas casillas");window.history.back(0)</script>';
            
          }
          }
           else{
            echo '<script type="text/javascript">alert("te falta por seleccionar una o mas casillas");window.history.back(0)</script>';
            
          }

  
}else{
  echo "<script>alert('ya has registrado un comentario anteriormente si tienes una queja comunicate con el administrador');</script>"."<script type='text/javascript'>"."window.location='../crearTienda/muestraComercioTienda.php?id=$numRegistroGlobal'"."</script>";
}
}else{
  echo "<script>alert('no te haz logueado para generar un comentario logueate, anda disfruta de sus beneficios');</script>"."<script type='text/javascript'>"."window.location='../crearTienda/muestraComercioTienda.php?id=$numRegistroGlobal'"."</script>";
}
}
   

?>