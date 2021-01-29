
       
       <?php

        if(isset($_POST['documento'])){
      $documento= (isset($_POST['documento'])    ? $_POST['documento']    : '');
      $celular= (isset($_POST['celular'])    ? $_POST['celular']    : '');
      $email= (isset($_POST['email'])    ? $_POST['email']    : '');
      $contrasena= (isset($_POST['contrasena'])    ? $_POST['contrasena']    : '');


      $campos=array();

      if ($documento =="") {
        array_push($campos,"ingresa un correo eletronico valido");
      }
      if ($celular =="") {
        array_push($campos,"el campo documento no puede estar vacio");
      }

      if ($email =="" || strpos($email,"@")=== false){
        array_push($campos,"el campo documento no puede estar vacio");
      }

      if ($contrasena == "" || strlen($contrasena) < 6){
         array_push($campos,"el campo contraseña no puede estar vacio , y debe contener minimo 6 caracteres");
      }

      if(count($campos) > 0){
      echo"<div class='error'>";
      for ($i=0; $i < count($campos); $i++) {
         echo "<li>".$campos[$i]."</div>"; 
        }
    }else{
      echo "<div class='correcto'>
      Datoscorrectos";

    }
    echo "</div>";  


  }
?>
           